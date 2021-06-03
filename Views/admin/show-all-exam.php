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

                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mã sinh viên</th>
                                            <th>Họ tên</th>
                                            <th>Số môn học</th>
                                            
                                            <th>Thêm điểm thi</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($exams as $e): ?>
                                        
                                        <tr>
                                            <td data-label="Mã sinh viên"><?= $e['id_student'] ?></td>
                                            <td data-label="Họ tên"><?= $e['name_student'] ?></td>
                                            <td data-label="Số môn học"><?= $e['count_subject'] ?></td>

                                            <td data-label="Thêm điểm thi" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=add&id=<?= $e['id_student'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=showAllExamOfStudent&id=<?= $e['id_student'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <a href="" class="right__tableMore" style="width: 535px; padding-top: 15px;">
                                    In thống kê<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>