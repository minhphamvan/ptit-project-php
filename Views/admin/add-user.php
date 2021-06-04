<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
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
                        <p class="right__desc"><?= $pageTitle ?></p>

                        <div class="right__formWrapper">
                            <form action="/ptit-project-php/index.php?controller=user&action=add_Post" method="post">

                                <!-- <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file" name="image">
                                </div> -->

                                <div class="right__inputWrapper">
                                    <label for="title">Họ tên</label>
                                    <input type="text" placeholder="Họ tên" name="name">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên đăng nhập</label>
                                    <input type="text" placeholder="Tên đăng nhập" name="username">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Mật khẩu</label>
                                    <input type="text" placeholder="Mật khẩu" name="password">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Email</label>
                                    <input type="text" placeholder="Email" name="email">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Vai trò</label>
                                    <select id="role" name="role">
                                        <option value="ADMIN">ADMIN</option>
                                        <option value="USER">USER</option>
                                    </select>
                                </div>

                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=user&action=show" class="right__tableMore">
                            Xem tất cả người dùng<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>