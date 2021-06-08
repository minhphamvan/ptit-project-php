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
                            <form action="./index.php?controller=dashboard&action=addImage_Post" 
                                enctype="multipart/form-data" method="post">

                                <div class="right__inputWrapper">
                                    <label for="description">Chọn file</label>
                                    <input type="file" placeholder="Chọn file" name="image_file" />
                                </div>

                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=dashboard&action=showAllImage" class="right__tableMore">
                            Xem tất cả ảnh<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>

</body>

</html>