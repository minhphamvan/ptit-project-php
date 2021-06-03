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
                            <form action="/ptit-project-php/index.php?controller=exam&action=add_Post" method="post">

                                <div class="right__inputWrapper">
                                    <label for="title">Sinh viên</label>
                                    <select id="select" name="id_student">

                                        <?php foreach($students as $s): ?>
                                        <option value="<?= $s['id']?>"><?= $s['name']?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Môn học</label>
                                    <select id="select" name="id_subject">

                                        <?php foreach($subjects as $s): ?>
                                        <option value="<?= $s['id']?>"><?= $s['name']?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="result">Điểm thi</label>
                                    <input type="text" name="result">
                                </div>

                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=exam&action=show" class="right__tableMore">
                            Xem tất cả điểm thi<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>