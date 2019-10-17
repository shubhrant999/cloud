<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>{{config('app.name','Tri')}}</title>      
	    <link href="{{asset('css/tri/bootstrap.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/tri/font-awesome.min.css')}}" rel="stylesheet">
	    <link href="{{asset('css/tri/animate.min.css')}}" rel="stylesheet"> 
	    <link href="{{asset('css/tri/lightbox.css')}}" rel="stylesheet"> 
		<link href="{{asset('css/tri/main.css')}}" rel="stylesheet">
		<link href="{{asset('css/tri/responsive.css')}}" rel="stylesheet">

	    <!--[if lt IE 9]>
		    <script src="js/html5shiv.js"></script>
		    <script src="js/respond.min.js"></script>
	    <![endif]-->       
	    <link rel="shortcut icon" href="{{asset('images/tri/ico/favicon.ico')}}">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/tri/ico/apple-touch-icon-144-precomposed.png')}}">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/tri/ico/apple-touch-icon-114-precomposed.png')}}">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/tri/ico/apple-touch-icon-72-precomposed.png')}}">
	    <link rel="apple-touch-icon-precomposed" href="{{asset('images/tri/ico/apple-touch-icon-57-precomposed.png')}}">
	</head><!--/head-->
	<body>
		<header id="header">      
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 overflow">
	                   <div class="social-icons pull-right">
	                        <ul class="nav nav-pills">
	                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
	                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
	                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
	                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
	                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
	                        </ul>
	                    </div> 
	                </div>
	             </div>
	        </div>
	        <div class="navbar navbar-inverse" role="banner">
	            <div class="container">
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>

	                    <a class="navbar-brand" href="index.html">
	                    	<h1><img src="{{asset('images/tri/logo.png')}}" alt="logo"></h1>
	                    </a>
	                    
	                </div>
	                <div class="collapse navbar-collapse">
	                    <ul class="nav navbar-nav navbar-right">
	                        <li class="<?php if($title=='main') echo 'active'; ?>"><a href="/main">Home</a></li>
	                        <li class="<?php if($title=='about') echo 'active'; ?>"><a href="/about">About</a></li>                    
	                        <li class="<?php if($title=='services') echo 'active';?>"><a href="/services">Services</a></li>                    
	                    </ul>
	                </div>
	                <div class="search">
	                    <form role="form">
	                        <i class="fa fa-search"></i>
	                        <div class="field-toggle">
	                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </header>
	    <!--/#header-->
	    @yield('content')
		<footer id="footer">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 text-center bottom-separator">
	                    <img src="{{asset('images/tri/home/under.png')}}" class="img-responsive inline" alt="">
	                </div>
	                <div class="col-md-4 col-sm-6">
	                    <div class="testimonial bottom">
	                        <h2>Testimonial</h2>
	                        <div class="media">
	                            <div class="pull-left">
	                                <a href="#"><img src="{{asset('images/tri/home/profile1.png')}}" alt=""></a>
	                            </div>
	                            <div class="media-body">
	                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
	                                <h3><a href="#">- Jhon Kalis</a></h3>
	                            </div>
	                         </div>
	                        <div class="media">
	                            <div class="pull-left">
	                                <a href="#"><img src="{{asset('images/tri/home/profile2.png')}}" alt=""></a>
	                            </div>
	                            <div class="media-body">
	                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
	                                <h3><a href="">- Abraham Josef</a></h3>
	                            </div>
	                        </div>   
	                    </div> 
	                </div>
	                <div class="col-md-3 col-sm-6">
	                    <div class="contact-info bottom">
	                        <h2>Contacts</h2>
	                        <address>
	                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
	                        Phone: +1 (123) 456 7890 <br> 
	                        Fax: +1 (123) 456 7891 <br> 
	                        </address>

	                        <h2>Address</h2>
	                        <address>
	                        Unit C2, St.Vincent's Trading Est., <br> 
	                        Feeder Road, <br> 
	                        Bristol, BS2 0UY <br> 
	                        United Kingdom <br> 
	                        </address>
	                    </div>
	                </div>
	                <div class="col-md-4 col-sm-12">
	                    <div class="contact-form bottom">
	                        <h2>Send a message</h2>
	                        <form id="main-contact-form" name="contact-form" method="post" action="#">
	                            <div class="form-group">
	                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
	                            </div>
	                            <div class="form-group">
	                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
	                            </div>
	                            <div class="form-group">
	                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
	                            </div>                        
	                            <div class="form-group">
	                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
	                            </div>
	                        </form>
	                    </div>
	                </div>
	                <div class="col-sm-12">
	                    <div class="copyright-text text-center">
	                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
	                        <p>Designed by <a target="_blank" href="http://www.google.com">Shubhrant</a></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!--/#footer-->

	    <script type="text/javascript" src="{{asset('js/tri/jquery.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/tri/bootstrap.min.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/tri/lightbox.min.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/tri/wow.min.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/tri/main.js')}}"></script>   
	</body>
</html>