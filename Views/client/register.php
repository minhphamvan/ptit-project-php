<!DOCTYPE html>
<html lang="en">

<head>
    <title>PTIT - Đăng kí</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="Views/client/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Views/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Views/client/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Views/client/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Views/client/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="Views/client/css/util.css">
    <link rel="stylesheet" type="text/css" href="Views/client/css/main.css">
    <!--===============================================================================================-->

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Preloader -->
    <link rel="stylesheet" href="Views/client/css/preloader.css" type="text/css" media="screen, print" />

    <!-- Icon Font-->
    <link rel="stylesheet" href="Views/client/style.css">
    <link rel="stylesheet" href="Views/client/css/owl.carousel.css">
    <link rel="stylesheet" href="Views/client/css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="Views/client/css/animate.css">

    <!-- Bootstrap -->
    <link href="Views/client/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="Views/client/css/style.css" rel="stylesheet"> Responsive CSS
    <link href="Views/client/css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <header id="HOME" style="background-position: 50% -125px;">
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
                        <a class="navbar-brand" href="index.html"><img src="Views/client/images/logo_ptit.png" alt="PTIT"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/index.html">Trang chủ</a></li>
                            <li><a href="/index.html">Giới thiệu</a></li>
                            <li><a href="/index.html">Giáo dục & Đào tạo</a></li>
                            <li><a href="/index.html">Mục tiêu</a></li>
                            <li><a href="/index.html">Tin tức </a></li>
                            <li><a href="/index.html">Hỗ trợ</a></li>
                            <li><a href="/login.html">Đăng nhập</a></li>
                            <li><a href="/register.html">Đăng kí</a></li>
                            <li><a href="/admin/dashboard.html">Trang quản trị</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container -->
            </nav>

            </section>
    </header>

    <div class="limiter">
        <div class="container-login100" style="background-image: url(Views/client/images/bg-login.jpg);">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="Views/client/images/ptit.jpg" alt="IMG">
                </div>

                <form class="login100-form validate-form">
                    <span class="login100-form-title">
						ĐĂNG KÍ
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Tài khoản phải có dạng B18DCAT164@ptit.edu.vn">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tài khoản phải có dạng B18DCAT164@ptit.edu.vn">
                        <input class="input100" type="text" name="email" placeholder="Tên đăng nhập">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Bạn cần phải nhập mật khẩu">
                        <input class="input100" type="password" name="pass" placeholder="Mật khẩu">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Bạn cần phải nhập mật khẩu">
                        <input class="input100" type="password" name="pass" placeholder="Nhập lại mật khẩu">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
							Đăng kí
						</button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="/login.html">
							Đăng nhập
						</a> /
                        <a class="txt2" href="/forgot-password.html">
							Quên mật khẩu?
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="Views/client/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="Views/client/vendor/bootstrap/js/popper.js"></script>
    <script src="Views/client/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="Views/client/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="Views/client/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="Views/client/js/main.js"></script>

</body>

</html>