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
                        <p class="right__desc">Xem tất cả sinh viên</p>
                        <div class="right__table">
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mã sinh viên</th>
                                            <th>Hình ảnh</th>
                                            <th>Tên sinh viên</th>
                                            <th>Ngày sinh</th>
                                            <th>Thuộc ngành</th>
                                            <th>Chi tiết</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td data-label="Mã sinh viên">SV001</td>
                                            <td data-label="Hình ảnh"><img src="Views/admin/images/avatar1.png" alt=""></td>
                                            <td data-label="Tên sinh viên">Trần Tuấn Anh</td>
                                            <td data-label="Ngày sinh">15-6-2000</td>
                                            <td data-label="Thuộc ngành">Điện điện tử</td>
                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href=""><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href=""><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href=""><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <a href="them-sinh-vien.html" class="right__tableMore">
                                    Thêm sinh viên<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
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