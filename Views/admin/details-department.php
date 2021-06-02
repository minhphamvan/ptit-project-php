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
                            <form action="/ptit-project-php/index.php?controller=department&action=update" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã khoa</label>
                                    <input type="text" placeholder="Mã khoa" name='id' value="<?= $department['id'] ?>" readonly>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên khoa</label>
                                    <input type="text" placeholder="Tên khoa" name='name' value="<?= $department['name'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <input type="text" placeholder="Mô tả" name="description" value="<?= $department['description'] ?>"></input>
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=department&action=show" class="right__tableMore">
                            Xem tất cả khoa<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>