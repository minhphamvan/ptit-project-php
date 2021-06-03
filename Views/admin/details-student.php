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
                            <form action="/ptit-project-php/index.php?controller=student&action=update" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã</label>
                                    <input type="text" name='id' placeholder="Mã" value="<?= $student['id'] ?>" readonly>
                                </div>
                            
                                <div class="right__inputWrapper">
                                    <label for="title">Mã sinh viên</label>
                                    <input type="text" name='code' placeholder="Mã sinh viên" value="<?= $student['code'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Họ tên</label>
                                    <input type="text" name='name' placeholder="Họ tên" value="<?= $student['name'] ?>">
                                </div>
                                
                                <div class="right__inputWrapper">
                                    <label for="birthday">Ngày sinh</label>
                                    <input type="date" name="birthday" value="<?= $student['birthday'] ?>">
                                </div>


                                <div class="right__inputWrapper">
                                    <label for="title">Địa chỉ</label>
                                    <input type="text" name='address' placeholder="Địa chỉ" value="<?= $student['address'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Email</label>
                                    <input type="text" name='email' placeholder="Email" value="<?= $student['email'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Thuộc ngành</label>
                                    <select id="select" name="id_major">
                                        <?php foreach($majors as $m): ?>
                                            
                                            <?php if($student['id_major'] == $m['id']) { ?>
                                                <option value="<?= $m['id'] ?>" selected > <?= $m['name'] ?> </option>
                                            <?php } else { ?>
                                                <option value="<?= $m['id'] ?>" > <?= $m['name'] ?> </option>
                                            <?php }; ?>
                                            
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
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