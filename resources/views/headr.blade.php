<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{url('/')}}/home/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/home/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('/')}}/home/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{url('/')}}/home/css/price-range.css" rel="stylesheet">
    <link href="{{url('/')}}/home/css/animate.css" rel="stylesheet">
	<link href="{{url('/')}}/home/css/main.css" rel="stylesheet">
	<link href="{{url('/')}}/home/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="{{url('/')}}/home/shortcut icon" href="{{url('/')}}/home/ico/favicon.ico">
    <link rel="{{url('/')}}/home/apple-touch-icon-precomposed" sizes="144x144" href="{{url('/')}}/home/ico/apple-touch-icon-144-precomposed.png">
    <link rel="{{url('/')}}/home/apple-touch-icon-precomposed" sizes="114x114" href="{{url('/')}}/home/ico/apple-touch-icon-114-precomposed.png">
    <link rel="{{url('/')}}/home/apple-touch-icon-precomposed" sizes="72x72" href="{{url('/')}}/home/ico/apple-touch-icon-72-precomposed.png">
    <link rel="{{url('/')}}/home/apple-touch-icon-precomposed" href="{{url('/')}}/home/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +8801900000000</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> diu_swe@diu.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="#"><img src="{{url('/')}}/home/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
								</button>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{url('/userinfo')}}"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								@if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('/chome')}}" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('/products')}}">Products</a></li>
										<li><a href="{{url('/products-details')}}">Product Details</a></li> 
										<li><a href={{url('/cart')}}>Cart</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('/blog')}}">Blog List</a></li>
										<li><a href="{{url('/single-blog')}}">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="{{url('/contact')}}">Contact</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->