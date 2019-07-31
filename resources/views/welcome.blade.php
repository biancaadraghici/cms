<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMS</title>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* Timeline */
            .timeline,
            .timeline-horizontal {
            list-style: none;
            padding: 20px;
            position: relative;
            }
            .timeline:before {
            top: 40px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 3px;
            background-color: #eeeeee;
            left: 50%;
            margin-left: -1.5px;
            }
            .timeline .timeline-item {
            margin-bottom: 20px;
            position: relative;
            }
            .timeline .timeline-item:before,
            .timeline .timeline-item:after {
            content: "";
            display: table;
            }
            .timeline .timeline-item:after {
            clear: both;
            }
            .timeline .timeline-item .timeline-badge {
            color: #fff;
            width: 54px;
            height: 54px;
            line-height: 52px;
            font-size: 22px;
            text-align: center;
            position: absolute;
            top: 18px;
            left: 50%;
            margin-left: -25px;
            background-color: #7c7c7c;
            border: 3px solid #ffffff;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
            }
            .timeline .timeline-item .timeline-badge i,
            .timeline .timeline-item .timeline-badge .fa,
            .timeline .timeline-item .timeline-badge .glyphicon {
            top: 2px;
            left: 0px;
            }
            .timeline .timeline-item .timeline-badge.primary {
            background-color: #1f9eba;
            }
            .timeline .timeline-item .timeline-badge.info {
            background-color: #5bc0de;
            }
            .timeline .timeline-item .timeline-badge.success {
            background-color: #59ba1f;
            }
            .timeline .timeline-item .timeline-badge.warning {
            background-color: #d1bd10;
            }
            .timeline .timeline-item .timeline-badge.danger {
            background-color: #ba1f1f;
            }
            .timeline .timeline-item .timeline-panel {
            position: relative;
            width: 46%;
            float: left;
            right: 16px;
            border: 1px solid #c0c0c0;
            background: #ffffff;
            border-radius: 2px;
            padding: 20px;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            }
            .timeline .timeline-item .timeline-panel:before {
            position: absolute;
            top: 26px;
            right: -16px;
            display: inline-block;
            border-top: 16px solid transparent;
            border-left: 16px solid #c0c0c0;
            border-right: 0 solid #c0c0c0;
            border-bottom: 16px solid transparent;
            content: " ";
            }
            .timeline .timeline-item .timeline-panel .timeline-title {
            margin-top: 0;
            color: inherit;
            }
            .timeline .timeline-item .timeline-panel .timeline-body > p,
            .timeline .timeline-item .timeline-panel .timeline-body > ul {
            margin-bottom: 0;
            }
            .timeline .timeline-item .timeline-panel .timeline-body > p + p {
            margin-top: 5px;
            }
            .timeline .timeline-item:last-child:nth-child(even) {
            float: right;
            }
            .timeline .timeline-item:nth-child(even) .timeline-panel {
            float: right;
            left: 16px;
            }
            .timeline .timeline-item:nth-child(even) .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
            }
            .timeline-horizontal {
            list-style: none;
            position: relative;
            padding: 20px 0px 20px 0px;
            display: inline-block;
            }
            .timeline-horizontal:before {
            height: 3px;
            top: auto;
            bottom: 26px;
            left: 56px;
            right: 0;
            width: 100%;
            margin-bottom: 20px;
            }
            .timeline-horizontal .timeline-item {
            display: table-cell;
            height: 280px;
            width: 20%;
            min-width: 320px;
            float: none !important;
            padding-left: 0px;
            padding-right: 20px;
            margin: 0 auto;
            vertical-align: bottom;
            }
            .timeline-horizontal .timeline-item .timeline-panel {
            top: auto;
            bottom: 64px;
            display: inline-block;
            float: none !important;
            left: 0 !important;
            right: 0 !important;
            width: 100%;
            margin-bottom: 20px;
            }
            .timeline-horizontal .timeline-item .timeline-panel:before {
            top: auto;
            bottom: -16px;
            left: 28px !important;
            right: auto;
            border-right: 16px solid transparent !important;
            border-top: 16px solid #c0c0c0 !important;
            border-bottom: 0 solid #c0c0c0 !important;
            border-left: 16px solid transparent !important;
            }
            .timeline-horizontal .timeline-item:before,
            .timeline-horizontal .timeline-item:after {
            display: none;
            }
            .timeline-horizontal .timeline-item .timeline-badge {
            top: auto;
            bottom: 0px;
            left: 43px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        
            <div class="content">
                <div class="title m-b-md">
                    CMS
                </div>
        
                <div class="links">
                    <a href="{{url('admin')}}">Admin</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div style="background-color:white;padding:20px;border:2px solid #f2f2f2">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img style="border-radius:50%;width:80px;height:80px;" class="img-fluid" src="https://api.adorable.io/avatars/285/abott@adorable.png">
                                </div>
                                <div class="col-md-8">
                                    <div class="container" style="padding:10px;">
                                        <b>Full Name</b>
                                        <p class="text-muted">Founder&CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        
                            <div class="container">
                                <b>Full Name</b>
                                <p class="text-muted">Founder&CEO</p>
                                <a href="#"><i class="fab fa-facebook" style="padding:8px;"></i></a>
                                <a href="#"><i class="fab fa-whatsapp" style="padding:8px;"></i></a>
                                <a href="#"><i class="fab fa-linkedin" style="padding:8px;"></i></a>
                                <a href="#"><i class="fab fa-instagram" style="padding:8px;"></i></a>
                                <a href="#"><i class="fab fa-twitter" style="padding:8px;"></i></a>
                                <a href="#"><i class="fab fa-youtube" style="padding:8px;"></i></a>
                                <p>
                                    Lorem ipsum dolor sit amet, conse adipiscing elit. Maecenas mauris orci, pellentesque at vestibulum quis, porttitor eget turpis lobortis nunc quis metus dolor sit amet. 
                                    Sed hendrerit quam sed ante euismod posu. Mauris ut elementum ante. Vestibuel suscipit convallis purus mattis magna sapien, euis convallis sagittis quis euismod posu. Lorem ipsum dolor sit amet, conse adipiscing elit. 
                                </p>
                            </div>
                            <div style="display:inline-block;width:100%;overflow-y:auto;">
					<ul class="timeline timeline-horizontal">
						<li class="timeline-item">
							<div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 1</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 2</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 3</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 4</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 5</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
						<li class="timeline-item">
							<div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4 class="timeline-title">Mussum ipsum cacilds 6</h4>
									<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
								</div>
								<div class="timeline-body">
									<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				</div>
			</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- TEAM -->
        
    </body>
</html>
