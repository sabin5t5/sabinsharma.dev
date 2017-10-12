<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="Sabin Sharma | Software Developer | Web Developer | Pokhara Nepal | Portfolio | Laravel Site">
        <meta name="description" content="Web Developer From Pokhara Nepal like to play with computer and have interest in developing and designing web application.">
        <meta name="keywords" content="sabin,sharma, web, developer, designer, programmer, pokhara, nepal, software, laravel, php, contact, skills, about">
       <meta property="og:title" content="Sabin Sharma | Software Developer | Web Developer | Pokhara Nepal "/>
       <meta property="og:site_name" content="Sabinsharma.com.np"/>
       <meta property="og:image" content="{{asset('images\3.JPG')}}"/>
        <meta name="google-site-verification" content="z7HodD1EEo4ZwUQb4QaieJNE0xy0owIEOnPz8DnJpVQ" />

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sabin Sharma | Software Developer | Web Developer | Pokhara Nepal | Portfolio</title>

        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <link href='{{asset("font-awesome-4.5.0/css/font-awesome.min.css")}}' rel="stylesheet" type="text/css">
        <link type="{{asset('image/x-icon')}}" href="images/logo.png" rel="shortcut icon">
        <link href="{{asset('css\mystyle.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css\NEW.css')}}">
        <style>
            ul, li {list-style-type:none;}
                .wrapper {width:1170px;padding:0 30px;margin:0 auto;position:relative;float:none;z-index:9998;}

                .column-1,.column-12 {float:left;margin:0 30px 30px 0;position:relative;padding:0;}

                .column-1 {width:70px;}
                .column-12 {width:1170px;margin-right:0;}

                .stats {position:relative;width:100%;height:100%;}
                .stat-1, .stat-2, .stat-3, .stat-4, .stat-5, .stat-6, .stat-7, .stat-8, .stat-9, .stat-10, .stat-11, .stat-12 {text-align:center;border-radius:50%;cursor:pointer;color:rgba(255, 255, 255, 1);background:#fff;border:3px solid rgba(0, 104, 92, 1);position:relative;color:rgba(0, 104, 92, 1);font-weight:600;font-size:12px;}
                .stat-1:hover, .stat-2:hover, .stat-3:hover, .stat-4:hover, .stat-5:hover, .stat-6:hover, .stat-7:hover, .stat-8:hover, .stat-9:hover, .stat-10:hover, .stat-11:hover, .stat-12:hover {margin-left:-5px;margin-top:-20px;background:rgba(0, 104, 92, 1);color:#fff;color:#fff;}
                .stat-1 {top:70px;left:40px;height:40px;width:40px;line-height:40px;}
                .stat-1:hover {height:50px;width:50px;line-height:50px;}
                .stat-2 {top:60px;left:30px;height:60px;width:60px;line-height:60px;}
                .stat-2:hover {height:70px;width:70px;line-height:70px;}
                .stat-3 {top:50px;height:80px;width:80px;line-height:80px;}
                .stat-3:hover {height:90px;width:90px;margin-left:-5px;line-height:90px;}
                .stat-4 {top:40px;height:100px;width:100px;line-height:100px;}
                .stat-4:hover {height:110px;width:110px;line-height:110px;}
                .stat-5 {top:30px;height:120px;width:120px;line-height:120px;}
                .stat-5:hover {height:130px;width:130px;line-height:130px;}
                .stat-6 {top:20px;height:140px;width:140px;line-height:140px;}
                .stat-6:hover {height:150px;width:150px;line-height:150px;}
                .stat-7 {top:10px;left:90px;height:160px;width:160px;line-height:160px;}
                .stat-7:hover {height:170px;width:170px;line-height:170px;}
                .stat-8 {top:0px;left:90px;height:180px;width:180px;line-height:180px;}
                .stat-8:hover {height:190px;width:190px;line-height:190px;}
                .stat-9 {top:-10px;left:100px;height:200px;width:200px;line-height:200px;}
                .stat-9:hover {height:210px;width:210px;line-height:210px;margin-bottom:10px;}
                .stat-10 {height:220px;width:220px;line-height:220px;}
                stat-10:hover {height:230px;width:230px;line-height:230px;}
                .stat-11 {height:240px;width:240px;line-height:240px;}
                .stat-11:hover {height:250px;width:250px;line-height:250px;}
                .stat-12 {top:-300px;height:260px;width:260px;line-height:260px;}
                .stat-12:hover {height:270px;width:270px;line-height:270px;}


                .timeline{padding:80px 0 120px 0;width: 100%;height:100px;margin:-50px auto 0 0;}
                .timeline li a{display: block;outline: none;}
                .timeline li a span{color:#000;width:170px;height: auto;padding:10px;left:50%;margin-left:-96px;font-weight: 300;font-size: 12px;line-height: 16px;text-align: center;border: 1px solid #fff;background: rgba(255, 255, 255, 1);border-radius: 5px;position: absolute;bottom: 100px;opacity: 0;
                box-shadow:2px 2px 0px rgba(0, 0, 0, 0.2);-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;-ms-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;font-family:"aktiv-grotesk-std";}
                .timeline li a span b {text-transform:uppercase;}
                .timeline li a span:before,.timeline li a span:after{content: "";position: absolute;bottom: -12px;left: 50%;margin-left: -9px;width: 0;height: 0;border-left: 10px solid transparent;border-right: 10px solid transparent;border-top: 10px solid rgba(0, 0, 0, 0.2);}
                .timeline li a span:after{bottom: -11px;margin-left: -10px;border-top: 10px solid rgba(255, 255, 255, 1);}
                .timeline li a:hover span{opacity: 1;bottom: 110%;}

                .title_link{color:white;}
        </style>
    </head>
    <body>
        <div class="navbar navbar-default navbar-inverse navbar-fixed-top margin">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}"><b>Sabin Sharma <i>(Yanka)</i></b></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="#home">Home</a>
                        </li>
                        <!-- <li>
                            <a href="#service">Services</a>
                        </li> -->
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li>
                            <a href="#skill">Skills &amp; Qualification</a>
                        </li>
                        <li>
                            <a href="#work">Work</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section section down" id="home">
            <div class="background-image background-image-fixed" style="background-image : url('https://unsplash.imgix.net/photo-1422513391413-ddd4f2ce3340?w=1024&amp;q=50&amp;fm=jpg&amp;s=282e5978de17d6cd2280888d16f06f04')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center down ">

                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));
                        </script>

                        <div class="fb-page" data-href="https://www.facebook.com/fatahayanka/" data-tabs="timeline" data-height="520" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fatahayanka/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fatahayanka/">Sabin Sharma</a></blockquote></div>
                    </div>
                    <div class="col-md-9 down">
                        <div id="carousel-example" data-interval="5000" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img src="{{asset('images\1.JPG')}}" alt ='Sabin Sharma Side Look'>
                                </div>
                                <!--<div class="item">
                                    <img src="{{asset('images\2.JPG')}}">
                                </div>-->
                                <div class="item">
                                    <img src="{{asset('images\3.JPG')}}" alt='Sabin Sharama, Smile, Sun Sine, Sarangkot'>
                                </div>
                                <div class="item">
                                    <img src="{{asset('images\4.JPG')}}" alt='Sabin Sharma, Forest Photography, Smile'>
                                </div>
                                <div class="item">
                                    <img src="{{asset('images\5.JPG')}}" alt='Sabin Sharma, Convocation, Pokhara University, Bachelor Degree, Happy, BCA'>
                                </div>
                            </div>
                            <a class="carousel-control hidden-xs left" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
                            <a class="carousel-control hidden-xs right" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-info" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                            <b>I Design And Develop</b>
                        </h1>
                        <hr>
                        <img src="{{asset('images\me.png')}}" class="center-block img-responsive">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Design-85%</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: 85%;"></div>
                        </div>
                        <h2>Development-75%</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: 75%;"></div>
                        </div>
                        <h2>Marketing-75%</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: 75%;"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">
                            <b>About Me</b>
                        </p>
                        <p class="lead text-justify">I'm Web Developer From Pokhara, Nepal like to play with computer and have interest in Developing, Designing, Trekking, Hiking And love surfing on
                        Internet. Personally, I'm best at learning new technologies. I'm good at
                        research on new idea and technologies to bring up the solution. I like
                        to work in team enjoy entertaining themselves, I work on getting myself
                        educated.</p>
                    </div>
                </div>
                <div class="row hidden-xs hidden-sm">
                    <div class="col-md-12">
                        <div class="column-12 last wow fadeInUp" data-wow-duration="1.5s">
                            <ul class="timeline mobile">
                                <li class="column-1">
                                    <a class="stat-1">1994
                                        <span><b><i class="fa fa-map-marker"></i> Narayansthan Balewa, Baglung</b><br>Born, April 10</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-2">2009
                                        <span><b><i class="fa fa-map-marker"></i> Narayansthan-08, JDHSS</b><br>Graduated SLC</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-3">2009
                                        <span><b><i class="fa fa-map-marker"></i> From Narayansthan to Pokhara</b><br>My first real move&hellip;away from the only home I've ever known</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-4">2011
                                        <span><b><i class="fa fa-map-marker"></i>Mahendrapool Pokhara, Infomax P.Ltd</b><br>Learn, Web Page Designing</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-5">2011
                                        <span><b><i class="fa fa-map-marker"></i> Bagar-01 Pokhara, PHSS</b><br>Graduated Diploma (Science)</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-6">2012
                                        <span><b><i class="fa fa-map-marker">Mahendrapool Pokhara, Infomax P.Ltd</i></b><br>Teaching (Basic, Diploma, Web and Graphic Design)</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-7">2015
                                        <span><b><i class="fa fa-map-marker"></i>Mahendrapool Pokhara, Infomax P.Ltd</b><br>PHP and MYSQL</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-8">2016
                                        <span><b><i class="fa fa-map-marker"></i>Simalchaur Pokhara, LA Grandee Int College</b><br>Graduated Bachelor (BCA)</span>
                                    </a>
                                </li>
                                <li class="column-1">
                                    <a class="stat-9">2017
                                        <span><b><i class="fa fa-map-marker"></i> SiwalayeChowk Pokhara, Zimris Technology Nepal P.LTD</b><br>Jr.Developer (Laravel)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-success" id="skill">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                            <b>Skills</b>
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <i class="fa fa-3x fa-code fa-fw text-success center-block"></i>
                        <h2 class="text-center">
                            <b>Coding Skill</b>
                            <hr>
                        </h2>
                        <p></p>
                        <h2>C Programming</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" style="width: 70%;">70%</div>
                        </div>
                        <h2>C++</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-default" role="progressbar" style="width: 70%;">70%</div>
                        </div>
                        <h2>Java</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 45%;">45%</div>
                        </div>
                        <h2>VB.Net</h2>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 65%;">65%</div>
                        </div>
                        <h2>PHP/MYSQL</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 85%;">85%</div>
                        </div>
                    </div>
                <div class="col-md-4">
                    <i class="fa fa-3x fa-fw text-success center-block fa-eye"></i>
                    <h2 class="text-center">
                        <b>Graphics Design Skill</b>
                    <hr>
                    </h2>
                    <p></p>
                    <h2>Adobe Photoshop</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" style="width: 90%;">90%</div>
                    </div>
                    <h2>Corel Draw</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-default" role="progressbar" style="width: 70%;">70%</div>
                    </div>
                    <h2>Pagemaker</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 55%;">55%</div>
                    </div>
                    <h2>InDesign</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 35%;">35%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-3x fa-fw text-success center-block fa-globe"></i>
                    <h2 class="text-center">
                      <b>Web Development Skill</b>
                      <hr>
                    </h2>
                    <p></p>
                    <h2>HTML/HTML5</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" style="width: 95%;">95%</div>
                    </div>
                    <h2>CSS/CSS3</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-default" role="progressbar" style="width: 85%;">85%</div>
                    </div>
                    <h2>Bootstrap</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 75%;">75%</div>
                    </div>
                    <h2>Javascript</h2>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 75%;">75%</div>
                    </div>
                    <h2>Laravel</h2>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%;">65%</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="section section-info" id="qualification">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                            <b>Qualification</b>
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <i class="center-block fa fa-3x fa-fw fa-pencil text-success"></i>
                        <p class="lead text-center">
                            <b>Education</b>
                        </p>
                        <hr>
                        <p></p>
                        <p></p>
                        <ol class="lead">
                            <li>
                                <b>+2 Science -&nbsp;</b>
                                <i>Pokhara Higher Secondary School Bagar, Pokhara</i>
                            </li>
                            <li>
                                <b>Bachelor of Computer Application</b>-
                                <i>La Grandee International College Simalchour, Pokhara</i>
                            </li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <i class="center-block fa fa-3x fa-desktop fa-fw text-success"></i>
                        <p class="lead text-center">
                          <b>Technical</b>
                        </p>
                        <hr>
                        <p></p>
                        <p></p>
                        <ol class="lead">
                            <li>
                                <b>Graphics Design -&nbsp;</b>
                                <i>Infomax P. Ltd Mahendrapool, Pokhara</i>
                            </li>
                            <li>
                                <b>Web Master Course</b>-
                                <i>Infomax P. Ltd Mahendrapool, Pokhara</i>
                            </li>
                            <li>
                                <b>Hardware And Networking</b>-
                                <i>Infomax P. Ltd Mahendrapool, Pokhara</i>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-primary" id="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                          <b>Work</b>
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <i class="center-block fa fa-3x fa-fw fa-institution text-success"></i>
                        <p class="lead text-center">
                          <b>Experiences</b>
                        </p>
                        <hr>
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="images\infomax.jpg" height="64" width="64"></a>
                                <div class="media-body">
                                      <a href="http://infomax.com.np/" target="_blank"><h2 class="media-heading title_link">Infomax P.LTD</h2></a>
                                      <p class="lead">Trainer of Web Design, Graphics Design and Other Software Courses and Programming Languages. <br>
                                        <i>2011 to 2015</i>
                                      </p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="images\panacea.png" height="64" width="64"></a>
                                <div class="media-body">
                                      <a href="http://www.panaceanepal.info/" target="_blank"><h2 class="media-heading title_link">Panacea Nepal P.LTD</h2></a>
                                      <p class="lead">Internship- Core PHP, MYSQL, Code Igniter, Bootstrap-CSS Framework(45 days)<br>
                                        <i>2016</i>
                                      </p>
                                </div>
                            </li>
                             <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="images\zimris.png" height="64" width="64"></a>
                                <div class="media-body">
                                      <a href="http://www.zimris.com/" target="_blank"><h2 class="media-heading title_link">Zimris Technology Nepal P.LTD</h2></a>
                                      <p class="lead">Jr. Web Developer. <br>
                                        <i>2017 Jan to Till</i>
                                      </p>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="http://www.vtechpokhara.com/site/images/favicon.ico" height="64" width="64"></a>
                                <div class="media-body">
                                      <a href="http://www.vtechpokhara.com/" target="_blank"><h2 class="media-heading title_link">Virtual Technology</h2></a>
                                      <p class="lead">Managing Director<br>
                                        <i>2017 Aug to Till</i>
                                      </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <i class="center-block fa fa-3x fa-desktop fa-fw text-success"></i>
                        <p class="lead text-center">
                          <b>Project Involve</b>
                        </p>
                        <hr>
                        <p></p>
                        <ul class="media-list">
                            <li class="media">
                                <!-- <a class="pull-left" href="#"><img class="media-object" src="images\logo.png" height="64" width="64"></a> -->
                                <div class="media-body">
                                    <h2 class="media-heading">Parking Management System</h2>
                                    <p class="lead">Simple and sweet application usign C Programming Language .
                                        <i>(As a Coder)</i>
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <!-- <a class="pull-left" href="#"><img class="media-object" src="images\logo.png" height="64" width="64"></a> -->
                                <div class="media-body">
                                    <h2 class="media-heading">School Management System</h2>
                                    <p class="lead">Desktop Application using VB.NET and SQLserver .
                                        <i>&nbsp;(As a Coder and Designer)</i>
                                    </p>
                                </div>
                            </li>
                            <li class="media">
                                <!-- <a class="pull-left" href="#"><img class="media-object" src="images\logo.png" height="64" width="64"></a> -->
                                <div class="media-body">
                                    <h2 class="media-heading">Clz E-Learning</h2>
                                    <p class="lead">College E-Learning Web Application Using PHP/MYQL.
                                        <i>(As a Coder and Designer)</i>
                                     </p>
                                </div>
                            </li>
                            <li class="media">
                                <!-- <a class="pull-left" href="#"><img class="media-object" src="images\logo.png" height="64" width="64"></a> -->
                                <div class="media-body">
                                    <h2 class="media-heading">E-Attendance</h2>
                                    <p class="lead">Employee Attendance Web Application Using Laravel.
                                        <i>(As a Coder and Designer)</i>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-info" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">
                            <b>Get In Touch</b>
                        </h1>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h1>Call Me</h1>
                        <h3>
                            <i>+9779805898920, +9779840610075</i>
                        </h3>
                        <h1>Email</h1>
                        <h3>
                            <i>yanka.pd.s@gmail.com</i>
                        </h3>
                        <h1>Address</h1>
                        <h3>
                            <i>
                                <b>Home Address</b>: Baglung, Balewa Narayansthan - 08
                                <br>
                                <b>Work Address</b>: Pokhara -08 Srijana Chowk
                            </i>
                        </h3>
                    </div>
                    <div class="col-md-8">
                        <form action="email_script.php" method="post">
                            <fieldset>
                                <div class="form-group col-md-12">
                                    <h3>Contact Form</h3>
                                </div>
                                <div class="form-group col-md-12">
                                    <p>Full Name</p>
                                    <input type="text" name="name" class="form-control" required="required">
                                </div>

                                <div class="form-group col-md-12">
                                    <p>Email</p>
                                    <input type="email" name="email" class="form-control" required="required">
                                </div>

                                <div class="form-group col-md-12">
                                    <p>Subject</p>
                                    <input type="text" name="subject" class="form-control" required="required">
                                </div>

                                <div class="form-group col-md-12">
                                  <p>Your message</p>
                                    <textarea name="message" class="form-control" rows="7" cols="50" required="required"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary btn-lg">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <p class="text-center ">
                    <i>LOOKIN FORWARD TO HEARING FROM YOU!</i>
                    </p>
                </div>
            </div>
        </div>
        <footer class="section section-primary ">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6">
                        <h1>Sabin Sharma</h1>
                        <h3 class="text-muted">sabinsharma.com.np</h3>
                        <p>COPYRIGHT ©&nbsp;2016. ALL RIGHT RESERVED BY SABIN SHARMA&nbsp;
                          <br>MADE FOR PEOPLE WHO ARE SEARCHING FOR EFFECTIVE SOLUTION.</p>
                    </div>
                    <div class="col-sm-6 ">
                        <p class="text-muted text-right " style="COLOR:WHITE
                                                ">FOLLOW ME ON HERE</p>
                        <div class="row ">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="# "><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="# "><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="# "><i class="fa fa-3x fa-facebook fa-fw text-inverse"></i></a>
                                <a href="# "><i class="fa fa-3x fa-fw fa-github text-inverse text-success"></i></a>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 hidden-xs text-right ">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-success "></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-success "></i></a>
                                <a href="http://www.facebook.com/fataha.sharma" target="_blank"><i class="fa fa-3x fa-facebook fa-fw text-success "></i></a>
                            </div>
                        </div>
                        <h1 class="text-center text-success">Thank You Visit Again !!!</h1>

                        <img src="http://hitwebcounter.com/counter/counter.php?page=6423499&style=0008&nbdigits=5&type=ip&initCount=0" title="" Alt=""   border="0" ><br/>
                    </div>
                </div>
            </div>
        </footer>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            $(document).ready(function(){
                // Add scrollspy to <body>
                $('body').scrollspy({target: ".navbar", offset: 50});

                // Add smooth scrolling on all links inside the navbar
                $("#navbar-ex-collapse a").on('click', function(event) {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                      scrollTop: $(hash).offset().top
                    }, 800, function(){

                      // Add hash (#) to URL when done scrolling (default click behavior)
                      window.location.hash = hash;
                    });
                });
            });

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-89252826-2', 'auto');
            ga('send', 'pageview');

            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-3190129707132772",
                enable_page_level_ads: true
            });
        </script>
    </body>
</html>
