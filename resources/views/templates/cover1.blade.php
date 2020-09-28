<!DOCTYPE html>
<html   >
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />
        <!-- Custom Styles -->
        <link rel="stylesheet" type="text/css" href="/cover1/css/paper.css" />
        <link rel="stylesheet" type="text/css" href="/cover1/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="/template1/css/typography.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/cover1/css/screen.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/cover1/css/print.css" />
        <title>HTML Resume Template</title>
    </head>
    <body class="letter">
        <nav class="navbar navbar-expand-lg navbar-primary fixed-top " id="mainNav" style="background-color: #1a1e22;position: fixed;">
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
        <section id="save">
            <section class="sheet">
                <aside>
                    <section class="contact">
                        <h6>Contact</h6>
                        <ul>
                            <li>
                                <p><i class="fa fa-map-marker-alt" title="Location" style="width:10px;"></i>{{$user->UserPersonalInfo[0]->address}} {{$user->UserPersonalInfo[0]->state}} </p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone" title="Cell phone"></i>{{$user->phone}}</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope" title="Email"></i>{{$user->email}} </p>
                            </li>
                        </ul>
                    </section>
                    
               
                  
                    <section class="references">
                        <h6>References</h6>
                        <address>
                            Robin clarck<br />
                            cavtpm.<br />
                            (413) 025-1900
                            sirclarck@cavtpm.com
                        </address>
                       
                         
                    </section>
                </aside>
                <section>
                    <header class="name" aria-label="Joe Smith">
                        <a href="https://joesmith.site">
                            <svg width="257px" height="35px" viewBox="0 0 257 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-family="Montserrat-Regular, Montserrat" font-size="48" font-weight="normal">
                                    <g id="Letter" transform="translate(-54.000000, -140.000000)" fill="#484848">
                                        <text id="JOE-SMITH">
                                            <tspan x="54.728" y="174">{{$user->name}}</tspan>
                                        </text>
                                    </g>
                                </g>
                            </svg>
                        </a>
                        <h6>{{$user->UserPersonalInfo[0]->post}}</h6>
                        <hr />
                    </header>
                    <section>
                        <section class="summary">
                            <h6>Objective</h6>
                            <p>{{$user->UserPersonalInfo[0]->summary}}</p>
                        </section>
                        
                        <section class="experience">
                            @foreach($user->cover as $cover)
                            <ul>
                                <li>
                                <p>{{$cover->receiver_name}}</p>
                                </li>
                                <li>
                                    <p>{{$cover->receiver_desigination}}</p>
                                </li>
                                <li>
                                    <p>{{$cover->company_name}} </p>
                                </li>
                                <li>
                                    <p>{{$cover->company_address}}</p>
                                </li>
                            </ul>
                            <br>
                            <ol>
                                    <li>
                                        <header>
                                            <p class="sanserif">Dear {{$cover->receiver_name}}:</p>
                                            <time>12-may-2020</time>
                                        </header>
                                        <ul type="none">
                                            <li style="text-align: justify">
                                                {{$cover->body}}
                                                </li>
                                            
                                        </ul>
                                    <br>
                                </li>
                            </ol>
                            <ul>
                                <li>
                                    <p>Sincerely</p>
                                </li>
                                <li>
                                    <p> {{$user->name}}</p>
                                </li>
                              
                                <li>
                                    <p><img src="" alt=""></p>
                                </li>
                               
                            </ul>
                             @endforeach
                        </section>
                       
                    </section>
                </section>
            </section>
        </section>
        <footer class="bg-light py-4 bg-dark" id="footer">
            <div class="container"><div class="small  text-center text-muted" >Copyright © 2020 - Creative CV Builder</div></div>
          </footer>
        <!-- Script to make elements authorable and save changes to localStorage -->
        <script type="text/javascript" src="/cover1/index.js"></script>
    </body>
</html>