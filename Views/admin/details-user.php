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
                            <form action="/ptit-project-php/index.php?controller=user&action=update" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã</label>
                                    <input type="text" name="id" placeholder="Mã" value="<?= $user['id'] ?>" readonly>
                                </div>

                                <!-- <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                    <td data-label="Hình ảnh"><img src="Views/admin/images/avatar1.png" alt=""></td>
                                    <input type="file">
                                </div> -->

                                <div class="right__inputWrapper">
                                    <label for="title">Họ tên</label>
                                    <input type="text" name="name" placeholder="Họ tên" value="<?= $user['name'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên đăng nhập</label>
                                    <input type="text" name="username" placeholder="Tên đăng nhập" value="<?= $user['username'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Mật khẩu</label>
                                    <input type="text" name="password" placeholder="Mật khẩu" value="<?= $user['password'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Email</label>
                                    <input type="text" placeholder="Email" name="email" value="<?= $user['email'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Vai trò</label>
                                    <select id="role" name="role">
                                        <?php if($user['role'] == 'ADMIN') { ?>
                                            <option value="ADMIN" selected > ADMIN </option>
                                            <option value="USER" > USER </option>
                                        <?php } else { ?>
                                            <option value="ADMIN" > ADMIN </option>
                                            <option value="USER" selected> USER </option>
                                        <?php }; ?>
                                    </select>
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
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