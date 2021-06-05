<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $pageTitle ?></title>

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
    <link href="Views/client/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
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
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header -->
    <header id="TRANGCHU" style="background-position: 50% -125px;">
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
                        <a class="navbar-brand" href="./index.php?controller=client"><img src="Views/client/images/logo_ptit.png" alt="PTIT"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#TRANGCHU">Trang chủ</a></li>
                            <li><a href="#GIOITHIEU">Giới thiệu</a></li>
                            <li><a href="#GIAODUCDAOTAO">Giáo dục & Đào tạo</a></li>
                            <li><a href="#MUCTIEU">Mục tiêu</a></li>
                            <li><a href="#TINTUC">Tin tức </a></li>
                            <li><a href="#HOTRO">Hỗ trợ</a></li>
                            <li><a href="./index.php?controller=client&action=login">Đăng nhập</a></li>
                            <li><a href="./index.php?controller=client&action=register">Đăng kí</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="home_text wow fadeInUp animated">
                            <h2>Học viện công nghệ Bưu chính viễn thông</h2>
                            <p>Posts and Telecommunications Institute of Technology</p>
                            <img src="Views/client/images/shape.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="scroll_down">
                            <a href="#GIOITHIEU"><img src="Views/client/images/scroll.png" alt=""></a>
                            <h4>Scroll Down</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </header>

    <!-- GIỚI THIỆU -->
    <section class="services" id="GIOITHIEU">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-pencil"></i>
                        <h2>Tổng quan</h2>
                        <p>Lịch sử phát triển của Học viện . . .</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-gears"></i>
                        <h2>Cơ cấu tổ chức</h2>
                        <p>Cơ cấu tổ chức của Học viện . . .</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-camera"></i>
                        <h2>Nguồn nhân lực</h2>
                        <p>PTIT có gần 800 cán bộ nhân viên . . .</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-magnifying-glass"></i>
                        <h2>Cơ sở vật chất</h2>
                        <p>Học viện có 2 cơ sở đào tạo Đại học tại Hà Nội và Tp. Hồ Chí Minh . . .</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GIÁO DỤC ĐÀO TẠO -->
    <section class="about_us_area" id="GIAODUCDAOTAO">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>Giáo dục và đào tạo</h2>
                        <img src="Views/client/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4  wow fadeInLeft animated">
                    <div class="single_progress_bar">
                        <h2>ĐÀO TẠO QUỐC TẾ</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                <span class="sr-only">48% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="single_progress_bar">
                        <h2>ĐÀO TẠO NGẮN HẠN</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                                <span class="sr-only">35% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="single_progress_bar">
                        <h2>ĐÀO TẠO ĐẠI HỌC</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                <span class="sr-only">75% Complete</span>
                            </div>
                        </div>
                    </div>

                    <div class="single_progress_bar">
                        <h2>ĐÀO TẠO SAU ĐẠI HỌC</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Với mục tiêu tạo điều kiện cho học viên được giao lưu, chia sẻ kinh nghiệm, nâng cao kiến thức chuyên môn và khả năng sử dụng tiếng Anh trong môi trường học tập tiên tiến tại Australia; đồng thời tạo cơ hội cho học viên được nhận học
                        bổng toàn phần từ Bộ Giáo dục và Đào tạo, Học viện giới thiệu Chương trình đào tạo Thạc sĩ Công nghệ thông tin theo phương thức (Đề án 599) như sau. . .</p>
                </div>

                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">EPIC English là Trung tâm đào tạo Tiếng Anh trực thuộc Trung tâm Đào tạo Bưu chính Viễn thông 1 (Học viện Công nghệ BCVT). Với phương châm tạo môi trường học tập nâng cao trình độ tiếng Anh cho sinh viên đang học tập tại Học viện,
                        đặc biệt giúp sinh viên đạt chuẩn đầu ra tiếng Anh khi ra trường theo quy định của Học viện, Trung tâm đã chủ động xây dựng chương trình đào tạo. . .</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MỤC TIÊU -->
    <section class="testimonial text-center wow fadeInUp animated" id="MUCTIEU">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>Mục tiêu</h2>
                        <img src="Views/client/images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>"Xây dựng Học viện Công nghệ Bưu chính Viễn thông trở thành trường Đại học trọng điểm quốc gia<br/> trong lĩnh vực Thông tin và Truyền thông tại Việt Nam."</p>
                    <h4>- PGS. TS Vũ Văn San.</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>"Xây dựng Học viện Công nghệ Bưu chính Viễn thông trở thành trường Đại học trọng điểm quốc gia<br/> trong lĩnh vực Thông tin và Truyền thông tại Việt Nam."</p>
                    <h4>- PGS. TS Vũ Văn San.</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- CHI TIẾT -->
    <div class="fun_facts">
        <section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
            <div class="section_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft animated">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-telescope"></i>
                                        <h3><?= $numberDepartment ?>+</h3>
                                        <p>Khoa</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-documents"></i>
                                        <h3><?= $numberMajor ?>+</h3>
                                        <p>Ngành</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-lightbulb"></i>
                                        <h3><?= $numberStudent ?>+</h3>
                                        <p>Sinh viên</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
                            <div class="imac">
                                <img src="Views/client/images/imac.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- TIN TỨC -->
    <section class="work_area" id="TINTUC">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title wow fadeInUp animated">
                        <h1>Tin tức</h1>
                        <img src="Views/client/images/shape.png" alt="">
                        <p><a href="/index.html">Xem thêm</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img width="400" height="240" src="https://portal.ptit.edu.vn/wp-content/uploads/2021/04/de-an-tuyen-sinh-2021.jpg" alt="">
                        <div class="image_overlay">
                            <a href="/index.html">Xem thêm</a>
                            <h2>Thông tin</h2>
                            <h4>tuyển sinh Đại học chính quy</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img width="400" height="240" src="https://portal.ptit.edu.vn/wp-content/uploads/2020/09/1-3.jpg" alt="">
                        <div class="image_overlay">
                            <a href="/index.html">Xem thêm</a>
                            <h2>Lễ khánh thành</h2>
                            <h4>Viettel Lab</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img width="400" height="240" src="https://portal.ptit.edu.vn/wp-content/uploads/2020/12/1.jpg" alt="">
                        <div class="image_overlay">
                            <a href="/index.html">Xem thêm</a>
                            <h2>Phiên họp</h2>
                            <h4>khởi động dự án</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pad_top">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img width="400" height="240" src="https://portal.ptit.edu.vn/wp-content/uploads/2019/09/1-6.jpg" alt="">
                        <div class="image_overlay">
                            <a href="/index.html">Xem thêm</a>
                            <h2>Chào tân sinh viên</h2>
                            <h4>khóa 2019</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 no_padding">
                    <div class="single_image last_padding">
                        <img width="400" height="240" src="https://portal.ptit.edu.vn/wp-content/uploads/2021/04/tvtsbk2.jpg" alt="">
                        <div class="image_overlay">
                            <a href="/index.html">Xem thêm</a>
                            <h2>Ngày hội tuyển sinh</h2>
                            <h4>20/4/2021</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img width="400" height="240" src="https://portal.ptit.edu.vn/wp-content/uploads/2019/07/2-2.jpg" alt="">
                        <div class="image_overlay">
                            <a href="/index.html">Xem thêm</a>
                            <h2>Open day PTIT</h2>
                            <h4>Ngày hội tuyển sinh</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LIÊN HỆ -->
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>Liên hệ với chúng tôi để được hỗ trợ và giải đáp?</h2>
                        <p>Sẵn sàng tư vấn, giải đáp mọi thắc mắc trực tuyến của bạn !</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
                        <a href="#HOTRO">
                            <button type="button" class="btn btn-primary cs-btn">Liên hệ</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HỖ TRỢ -->
    <section class="contact" id="HOTRO">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>Hỗ trợ</h1>
                        <img src="Views/client/images/shape.png" alt="">
                        <p>Hãy gửi email cho chúng tôi để nhận phản hồi & tư vấn thắc mắc.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Hotline</h2>
                        <p>+88 6666.8888</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email</h2>
                        <p>minhpv.b18at164@ptit.edu.vn</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Địa chỉ</h2>
                        <p>10 Trần Phú, Hà Đông, Hà Nội</p>
                    </div>
                </div>

                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Tên của bạn">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Tiêu đề">
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Nội dung"></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">GỬI ĐI</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with wow fadeInUp animated">
                        <h3>Sẵn sàng tư vấn, giải đáp mọi thắc mắc trực tuyến của bạn !</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer_logo wow fadeInUp animated">
                            <img src="Views/client/images/logo_ptit.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center   wow fadeInUp animated">
                        <div class="social">
                            <ul class="icon_list">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="copyright_text   wow fadeInUp animated">
                            <p>&copy; PTIT 2021. All Right Reserved by <a href="https://www.facebook.com/profile.php?id=100028793446879" target="_blank">Minh Pham</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ========================= SCRIPTS ============================== -->
    <script src="Views/client/js/jquery.min.js"></script>
    <script src="Views/client/js/bootstrap.min.js"></script>
    <script src="Views/client/js/jquery.nicescroll.js"></script>
    <script src="Views/client/js/owl.carousel.js"></script>
    <script src="Views/client/js/wow.js"></script>
    <script src="Views/client/js/script.js"></script>

</body>

</html>