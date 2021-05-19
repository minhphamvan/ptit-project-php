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
                        <p class="right__desc">Xem tất cả ngành</p>
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
                                        <tr>
                                            <td data-label="Mã ngành">N001</td>
                                            <td data-label="Tên ngành">Cơ điện tử</td>
                                            <td data-label="Thuộc khoa">Điện tử</td>
                                            <td data-label="Mô tả">Thành lập 14-4-2010</td>
                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href="sua-nganh.html"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href="sua-nganh.html"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href=""><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <a href="them-nganh.html" class="right__tableMore">
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