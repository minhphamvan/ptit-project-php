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
                            <form action="/ptit-project-php/index.php?controller=subject&action=add_Post" method="post">

                                <div class="right__inputWrapper">
                                    <label for="title">Tên môn học</label>
                                    <input type="text" placeholder="Tên môn học" name="name">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="description">Số tín chỉ</label>
                                    <input name="number" placeholder="Số tín chỉ"></input>
                                </div>

                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=subject&action=show" class="right__tableMore">
                            Xem tất cả môn học<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>