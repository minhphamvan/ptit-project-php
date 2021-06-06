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
                                            <th>Mã</th>
                                            <th>Hình ảnh</th>
                                            <th>Họ tên</th>
                                            <th>Tên đăng nhập</th>
                                            <th>Mật khẩu</th>
                                            <th>Email</th>
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
                                                <td data-label="Email"><?= $u['email'] ?></td>
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

                                <a href="/ptit-project-php/index.php?controller=user&action=add" class="right__tableMore">
                                    Thêm người dùng<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
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