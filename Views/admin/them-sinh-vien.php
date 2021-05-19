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
                        <p class="right__desc">Thêm sinh viên</p>
                        <div class="right__formWrapper">
                            <form action="" method="post">
                                <div class="right__inputWrapper">
                                    <label for="title">Mã sinh viên</label>
                                    <input type="text" placeholder="Mã sinh viên">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="image">Hình ảnh</label>
                                    <input type="file">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Tên sinh viên</label>
                                    <input type="text" placeholder="Tên sinh viên">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="birthday">Ngày sinh</label>
                                    <input type="date" id="birthday" name="birthday">
                                </div>

                                <div class="right__inputWrapper">
                                    <label for="title">Thuộc ngành</label>
                                    <select id="select">
                                        <option value="Điện điện tử">Điện điện tử</option>
                                        <option value="Hệ thống thông tin">Hệ thống thông tin</option>
                                        <option value="Công nghệ phần mềm">Công nghệ phần mềm</option>
                                        <option value="An toàn thông tin">An toàn thông tin</option>
                                    </select>
                                </div>

                                <button class="btn" type="submit">Thêm</button>
                            </form>
                        </div>

                        <a href="xem-tat-ca-sinh-vien.html" class="right__tableMore">
                            Xem tất cả sinh viên<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>