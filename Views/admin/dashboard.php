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
            <?php include "Views/admin/sidebar.php";?>

                <div class="right">
                    <div class="right__content">
                        <div class="right__title">Bảng điều khiển</div>
                        <p class="right__desc"><?= $pageTitle ?></p>

                        <div class="right__cards">
                            <a class="right__card" href="/ptit-project-php/index.php?controller=department&action=show">
                                <div class="right__cardTitle">Khoa</div>
                                <div class="right__cardNumber"><?= $numberDepartment ?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>

                            <a class="right__card" href="/ptit-project-php/index.php?controller=major&action=show">
                                <div class="right__cardTitle">Ngành</div>
                                <div class="right__cardNumber"><?= $numberMajor ?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>

                            <a class="right__card" href="/ptit-project-php/index.php?controller=student&action=show">
                                <div class="right__cardTitle">Sinh viên</div>
                                <div class="right__cardNumber"><?= $numberStudent ?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>

                            <a class="right__card" href="/ptit-project-php/index.php?controller=subject&action=show">    
                                <div class="right__cardTitle">Môn học</div>
                                <div class="right__cardNumber"><?= $numberSubject ?></div>
                                <div class="right__cardDesc">Xem Chi Tiết <img src="Views/admin/assets/arrow-right.svg" alt=""></div>
                            </a>
                        </div>

                        <div class="right__table">
                            <p class="right__tableTitle">Danh sách quản trị viên</p>
                            <div class="right__tableWrapper">
                            
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Hình ảnh</th>
                                            <th>Họ tên</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Vai trò</th>
                                            <th>Chi tiết</th>
                                            <th>Sửa</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($users as $u): ?>
                                            
                                            <tr>
                                                <td data-label="Mã"><?= $u['id'] ?></td>
                                                <td data-label="Hình ảnh"><img src="Views/admin/images/avatar1.png" alt=""></td>
                                                <td data-label="Họ tên"><?= $u['name'] ?></td>
                                                <td data-label="Tên đăng nhập"><?= $u['username'] ?></td>
                                                <td data-label="Mật khẩu"><?= $u['password'] ?></td>
                                                <td data-label="Vai trò"><?= $u['role'] ?></td>
                                                <td data-label="Chi tiết" class="right__iconTable">
                                                    <a href="/ptit-project-php/index.php?controller=user&action=details&id=<?= $u['id'] ?>"><img src="Views/admin/assets/icon-book.svg" alt=""></a>
                                                </td>
                                                <td data-label="Sửa" class="right__iconTable">
                                                    <a href="/ptit-project-php/index.php?controller=user&action=details&id=<?= $u['id'] ?>"><img src="Views/admin/assets/icon-edit.svg" alt=""></a>
                                                </td>
                                                <td data-label="Xoá" class="right__iconTable">
                                                    <a href="/ptit-project-php/index.php?controller=user&action=delete&id=<?= $u['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                                </td>
                                            </tr>
                                        
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                            <a href="/ptit-project-php/index.php?controller=user&action=add" class="right__tableMore">
                                Thêm người dùng<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>
</body>

</html>