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
                        <p class="right__desc">Thêm khoa</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã khoa</label>
                                    <input type="text" placeholder="Mã khoa">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên khoa</label>
                                    <input type="text" placeholder="Tên khoa">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="desc">Mô tả</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                                </div>
                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="xem-tat-ca-khoa.html" class="right__tableMore">
                            Xem tất cả khoa<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>