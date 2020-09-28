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
        <link rel="stylesheet" type="text/css" href="/template1/css/paper.css" />
        <link rel="stylesheet" type="text/css" href="/template1/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="/template1/css/typography.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="/template1/css/screen.css" />
        <link rel="stylesheet" type="text/css" media="print" href="/template1/css/print.css" />
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
                                <p><i class="fa fa-map-marker-alt" title="Location" style="width:10px;"></i>{{$user->UserPersonalInfo[0]->address}}</p>
                            </li>
                            <li>
                                <p><i class="fa fa-phone" title="Cell phone"></i>{{$user->phone}}</p>
                            </li>
                            <li>
                                <p><i class="fa fa-envelope" title="Email"></i>{{$user->email}} </p>
                            </li>
                            <li>
                                <p><i class="fab fa-github" title="GitHub"></i> <a href="https://github.com/Tombarr">github.com/Tombarr</a></p>
                            </li>
                        </ul>
                    </section>
                    <section class="skills">
                        <h6>Skills</h6>
                        <ul>
                            @foreach($user->skill as $skill)
                            <li style="margin-bottom: 10px;"><span>{{$skill->title}}</span></li>
                            @endforeach 
                        </ul>
                        
                    </section>
                    <section class="skills">
                        <h6>Interest</h6>
                        <ul>
                            @foreach($user->interest as $interest)
                            <li><span>{{$interest->title}}</span></li>
                            @endforeach 
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
                            <h6>Summary</h6>
                            <p>{{$user->UserPersonalInfo[0]->summary}}</p>
                        </section>
                        <br>
                        <br>
                        <section class="experience">
                            <h6>Experience</h6>
                            <ol>
                                @foreach ($user->experience as $experience)
                                    <li>
                                        <header>
                                        <p class="sanserif">{{$experience->desigination}}</p>
                                            <time>{{$experience->start_date}}-{{$experience->complete_date}}</time>
                                        </header>
                                        <span>{{$experience->name}}</span>
                                        <ul>
                                            <li style="text-align: justify">{{$experience->description}}</li>
                                            
                                        </ul>
                        <br>

                                    </li>
                                @endforeach
                            </ol>
                        </section>
                        <br>
                        <section class="experience">
                            <h6>Certification</h6>
                            <ol>
                                @foreach ($user->certification as $certification)
                                    <li>
                                        <header>
                                        <p style="font-size:16px;">{{$certification->title}}</p>
                                            <time>{{$certification->year}}</time>
                                        </header>
                                         
                                    </li>
                                @endforeach
                            </ol>
                        </section>
                        <br>
                        <section class="education">
                            <h6>Education</h6>
                            <ol>
                                <li>
                                    @foreach($user->education as $education)
                                    <div>
                                        <p class="sanserif">{{$education->course}}</p>
                                        <time>{{$education->start_date}}– {{$education->complete_date}}</time>
                                    </div>
                                    <div>
                                        <span>{{$education->college}}</span>
                                        <span>{{$education->location}}</span>
                                    </div>
                                    <br>
                                    @endforeach
                                </li>
                            </ol>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <footer class="bg-light py-4 bg-dark" id="footer">
            <div class="container"><div class="small  text-center text-muted" >Copyright © 2020 - Creative CV Builder</div></div>
          </footer>
        <!-- Script to make elements authorable and save changes to localStorage -->
        <script type="text/javascript" src="/template1/index.js"></script>
    </body>
</html>