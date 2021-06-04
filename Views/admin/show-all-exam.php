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
                                            <th>Số môn đang học</th>
                                            
                                            <th>Thêm điểm thi</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($exams as $e): ?>
                                        
                                        <tr>
                                            <td data-label="Mã sinh viên">
                                                <a href="/ptit-project-php/index.php?controller=student&action=details&id=<?= $e['id_student'] ?>">
                                                    <?= $e['id_student'] ?>
                                                </a>
                                            </td>

                                            <td data-label="Họ tên">
                                                <a href="/ptit-project-php/index.php?controller=student&action=details&id=<?= $e['id_student'] ?>">
                                                    <?= $e['name_student'] ?>
                                                </a>
                                            </td>

                                            <td data-label="Số môn đang học">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=showAllExamOfStudent&id_student=<?= $e['id_student'] ?>">
                                                    <?= $e['count_subject'] ?>
                                                </a>
                                            </td>

                                            <td data-label="Thêm điểm thi" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=addExamForStudent&id_student=<?= $e['id_student'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=showAllExamOfStudent&id_student=<?= $e['id_student'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <a href="/ptit-project-php/index.php?controller=exam&action=add" class="right__tableMore" style="width: 525px; padding-top: 15px;">
                                    Thêm điểm <img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>

                                    <a href="/ptit-project-php/index.php?controller=exam&action=export" class="right__tableMore" style="width: 550px; padding-top: 15px;">
                                    Xuất file thống kê<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
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