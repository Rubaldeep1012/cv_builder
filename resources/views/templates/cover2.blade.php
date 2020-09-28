<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cv Builder</title>

<link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
<!-- Third party plugin CSS-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->

<link href="/css/styles.css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="/template/css/blue.css" />
<link type="text/css" rel="stylesheet" href="/template/css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="/template/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/template/js/jquery.tipsy.js"></script>
<script type="text/javascript" src="/template/js/cufon.yui.js"></script>
<script type="text/javascript" src="/template/js/scrollTo.js"></script>
<script type="text/javascript" src="/template/js/myriad.js"></script>
<script type="text/javascript" src="/template/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="/template/js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body style="font-size:15px;">
  <nav class="navbar navbar-expand-lg navbar-primary fixed-top py-3" id="mainNav" style="background-color: #343A40;position:fixed">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/">Creative Cv Builder</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @if(Route::currentRouteName() === 'index')
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#theme">Templates</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            @endif
            @if(Route::currentRouteName() !='index')
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            @endif
        </div>
    </div>
</nav>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait1" src="/profile/{{$user->UserPersonalInfo[0]->image}}" alt="John Smith" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
          <h1 class="name">{{$user->name}}<br />
              <span>{{$user->UserPersonalInfo[0]->post}}</span></h1>
              <br>
            <ul>
              <li class="ad">{{$user->UserPersonalInfo[0]->address}},{{$user->UserPersonalInfo[0]->city}},{{$user->UserPersonalInfo[0]->state}},{{$user->UserPersonalInfo[0]->zip}}</li>
              <li class="mail">{{$user->email}}</li>
              <li class="tel">{{$user->phone}}</li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="/images/icn-print.jpg" alt="" /></a></li>
               
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
          <p>{{$user->UserPersonalInfo[0]->summary}}</p>
        </div>
        <!-- Begin 3rd Row -->
        <div class="entry" style="padding:10px;">
          @foreach($user->cover as $cover)
          <div class="content">
            <p>{{$cover->receiver_name}} <br />
            <p>{{$cover->receiver_desigination}} <br />
            <p>{{$cover->company_name}} <br />
            <p>{{$cover->company_address}} <br />
            <ul class="info" type="none">
                <br>
              {{$cover->body}}
            </ul>
            <p style="margin-top:10px;">Your Sincerely</p>
            <p>{{$user->name}} </p>
          </div>
          @endforeach
        </div>
        <!-- End 3rd Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom">
    
  </div>
</div>
<footer class="bg-light py-4 bg-dark">
  <div class="container"><div class="small  text-center text-muted" >Copyright © 2020 - Creative CV Builder</div></div>
</footer>
<div id="message"><a href="#" onclick="window.scrollTo(0, 0)">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
