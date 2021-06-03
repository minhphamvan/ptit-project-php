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
                            <form action="/ptit-project-php/index.php?controller=student&action=add_Post" method="post">
                            
                                <div class="right__inputWrapper">
                                    <label for="title">Mã sinh viên</label>
                                    <input type="text" name='code' placeholder="Mã sinh viên">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Họ tên</label>
                                    <input type="text" name='name' placeholder="Họ tên">
                                </div>
                                
                                <div class="right__inputWrapper">
                                    <label for="birthday">Ngày sinh</label>
                                    <input type="date" name="birthday">
                                </div>


                                <div class="right__inputWrapper">
                                    <label for="title">Địa chỉ</label>
                                    <input type="text" name='address' placeholder="Địa chỉ">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Email</label>
                                    <input type="text" name='email' placeholder="Email">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Thuộc ngành</label>
                                    <select id="select" name="id_major">

                                        <?php foreach($majors as $m): ?>
                                        <option value="<?= $m['id']?>"><?= $m['name']?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=student&action=show" class="right__tableMore">
                            Xem tất cả sinh viên<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>