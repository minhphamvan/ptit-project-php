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
                                            <th>Mã</th>
                                            <th>Mã môn học</th>
                                            <th>Môn học</th>
                                            <th>Điểm thi</th>
                                            
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($exams as $e): ?>
                                        
                                        <tr>
                                            <td data-label="Mã"><?= $e['id'] ?></td>
                                            <td data-label="Mã môn học"><?= $e['id_subject'] ?></td>
                                            <td data-label="Môn học"><?= $e['name_subject'] ?></td>
                                            <td data-label="Điểm thi"><?= $e['result'] ?></td>

                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=details&id=<?= $e['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=exam&action=delete&id=<?= $e['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <a href="/ptit-project-php/index.php?controller=exam&action=show" class="right__tableMore">
                                    Quay lại thống kê<img src="Views/admin/assets/icon-return.svg" alt=""></a>
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