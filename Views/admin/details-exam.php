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
                            <form action="/ptit-project-php/index.php?controller=exam&action=update" method="post">
                                
                                <div class="right__inputWrapper">
                                    <input type="text" name='id' placeholder="Mã" value="<?= $exam['id'] ?>" hidden>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Họ tên</label>
                                    <input type="text" name='id_student' placeholder="Sinh viên" value="<?= $exam['id_student'] ?>" hidden>
                                    <input type="text" name='' placeholder="Sinh viên" value="<?= $student['name'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Môn học</label>
                                    <input type="text" name='id_subject' placeholder="Điểm thi" value="<?= $exam['id_subject'] ?>" hidden>
                                    <input type="text" name='' placeholder="Điểm thi" value="<?= $subject['name'] ?>">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="result">Điểm thi</label>
                                    <input type="text" name="result" value="<?= $exam['result'] ?>">
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
                            </form>
                        </div>

                        <a href="/ptit-project-php/index.php?controller=exam&action=show" class="right__tableMore">
                            Xem tất cả thống kê<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>