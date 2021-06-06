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
                        
                        <p class="right__desc" style="float: left; display: block;"><?= $pageTitle ?></p>

                        <input type="text" class="timkiem" placeholder="Tìm kiếm theo tên" style="float: right; 
                        border: 1px solid grey; border-radius: 5px; height: 21px; 
                        padding: 2px 23px 2px 30px;
                        margin-bottom: 20px;
                        font-size: 17px; font-family: "Muli", sans-serif;">
                        
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mã ngành</th>
                                            <th>Tên ngành</th>
                                            <th>Thuộc khoa</th>
                                            <th>Mô tả</th>
                                            <th>Chi tiết</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($majors as $m): ?>
                                        
                                        <tr>
                                            <td data-label="Mã ngành"><?= $m['id'] ?></td>
                                            <td data-label="Tên ngành"><?= $m['name'] ?></td>
                                            <td data-label="Thuộc khoa"><?= $m['name_department'] ?></td>
                                            <td data-label="Mô tả"><?= $m['description'] ?></td>

                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=major&action=details&id=<?= $m['id'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=major&action=details&id=<?= $m['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=major&action=delete&id=<?= $m['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                    </tbody>

                                </table>

                                <a href="/ptit-project-php/index.php?controller=major&action=add" class="right__tableMore">
                                    Thêm ngành<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
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