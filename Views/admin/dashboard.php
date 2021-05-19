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
            <?php include "Views/admin/sidebar.php";?>

                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc">Quản lý</p>

                        <div class="right__cards">
                            <a class="right__card" href="xem-tat-ca-khoa.html">
                                <div class="right__cardTitle">Khoa</div>
                                <div class="right__cardNumber">12</div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>

                            <a class="right__card" href="xem-tat-ca-nganh.html">
                                <div class="right__cardTitle">Ngành</div>
                                <div class="right__cardNumber">27</div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>

                            <a class="right__card" href="xem-tat-ca-giang-vien.html">
                                <div class="right__cardTitle">Giảng viên</div>
                                <div class="right__cardNumber">348</div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>

                            <a class="right__card" href="xem-tat-ca-sinh-vien.html">
                                <div class="right__cardTitle">Sinh viên</div>
                                <div class="right__cardNumber">5845</div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>
                        </div>

                        <div class="right__table">
                            <p class="right__tableTitle">Thông tin quản trị</p>
                            <div class="right__tableWrapper">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Họ tên</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Email</th>
                                            <th>Trạng Thái</th>
                                            <th>Chi tiết</th>
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td data-label="STT">1</td>
                                            <td data-label="Họ tên">Trần Anh Quân</td>
                                            <td data-label="Tên đăng nhập">trananhquan</td>
                                            <td data-label="Email">trananhquan@ptit.edu.vn</td>
                                            <td data-label="Trạng Thái">
                                                Offline
                                            </td>
                                            <td data-label="Chi tiết" class="right__iconTable">
                                                <a href="thong-tin-nguoi-dung.html"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                            </td>
                                            <td data-label="Sửa" class="right__iconTable">
                                                <a href="thong-tin-nguoi-dung.html"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                            </td>
                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href=""><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <a href="them-quan-tri-vien.html" class="right__tableMore">
                                Thêm quản trị viên<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>