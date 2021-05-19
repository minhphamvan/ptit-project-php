<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTIT - Quản lý trường học</title>
    <link rel="stylesheet" href="Views/admin/css/main.css">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="dashboard">
                <?php include "Views/admin/sidebar.php"; ?>

                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Thông tin người dùng</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                </div>

                                <div class="right__inputImageReview"><img src="Views/admin/images/avatar.png" alt=""></div>

                                <div class="right__inputWrapper">
                                    <label for="title">Họ tên</label>
                                    <input type="text" placeholder="Họ tên">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên đăng nhập</label>
                                    <input type="text" placeholder="Tên đăng nhập">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Email</label>
                                    <input type="text" placeholder="Email">
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
                            </form>
                        </div>

                        <a href="dashboard.html" class="right__tableMore">
                            Xem tất cả quản trị viên<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>