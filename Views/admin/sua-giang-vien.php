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
                        <p class="right__desc">Chi tiết giảng viên</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã giảng viên</label>
                                    <input type="text" placeholder="Mã giảng viên" value="GV001" readonly>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                    <td data-label="Hình ảnh"><img src="Views/admin/images/avatar1.png" alt=""></td>
                                    <input type="file">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên giảng viên</label>
                                    <input type="text" placeholder="Tên giảng viên" value="Trần Tuấn Anh">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Thuộc khoa</label>
                                    <select id="select">
                                        <option value="Điện tử">Điện điện tử</option>
                                        <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                                        <option value="An toàn thông tin">An toàn thông tin</option>
                                    </select>
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="birthday">Ngày bắt đầu hợp đồng</label>
                                    <input type="date" id="birthday" name="birthday">
                                </div>

                                <button class="btn" type="submit">Cập nhật</button>
                            </form>
                        </div>

                        <a href="xem-tat-ca-giang-vien.html" class="right__tableMore">
                            Xem tất cả giảng viên<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>