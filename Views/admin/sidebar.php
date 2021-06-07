<?php
    $admin = $_SESSION["userLogin"];
?>

<div class="left">
                    <span class="left__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    </span>

                    <div class="left__content">
                        <div class="left__logo"><a href="./index.php?controller=dashboard&action=show">QUẢN LÝ TRƯỜNG HỌC</a></div>
                        <div class="left__profile">
                            <div class="left__image">
                                <a href="./index.php?controller=dashboard&action=show"><img src="Views/admin/images/avatar.png" alt=""></a>
                            </div>

                            <a href="./index.php?controller=user&action=details&id=<?= $admin['id'] ?>">
                                <p class="left__name"><?= $admin['name']?></p>
                            </a>
                        </div>

                        <ul class="left__menu">
                            <li class="left__menuItem">
                                <a href="./index.php?controller=dashboard&action=show" class="left__title"><img src="Views/admin/assets/icon-dashboard.svg" alt="">Bảng điều khiển</a>
                            </li>

                            <li class="left__menuItem">
                                <a href="./index.php?controller=student&action=haveBirthday" class="left__title"><img src="Views/admin/assets/icon-pencil.svg" alt="">Sinh nhật hôm nay</a>
                            </li>

                            <li class="left__menuItem">
                                <a href="./index.php?controller=dashboard&action=chart" class="left__title"><img src="Views/admin/assets/icon-pencil.svg" alt="">Biểu đồ</a>
                            </li>

                            <li class="left__menuItem">
                                <a href="./index.php?controller=dashboard" class="left__title"><img src="Views/admin/assets/icon-pencil.svg" alt="">Sửa slider</a>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title"><img src="Views/admin/assets/icon-pencil.svg" alt="">Thống kê<img class="left__iconDown" src="Views/admin/assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="./index.php?controller=exam&action=add">Thêm điểm</a>
                                    <a class="left__link" href="./index.php?controller=exam&action=show">Xem thống kê</a>
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title"><img src="Views/admin/assets/icon-users.svg" alt="">Người dùng<img class="left__iconDown" src="Views/admin/assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="./index.php?controller=user&action=add">Thêm người dùng</a>
                                    <a class="left__link" href="./index.php?controller=user&action=show">Xem tất cả</a>
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title"><img src="Views/admin/assets/icon-edit.svg" alt="">Khoa<img class="left__iconDown" src="Views/admin/assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="./index.php?controller=department&action=add">Thêm khoa</a>
                                    <a class="left__link" href="./index.php?controller=department&action=show">Xem tất cả</a>
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title"><img src="Views/admin/assets/icon-tag.svg" alt="">Ngành<img class="left__iconDown" src="Views/admin/assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="./index.php?controller=major&action=add">Thêm ngành</a>
                                    <a class="left__link" href="./index.php?controller=major&action=show">Xem tất cả</a>
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title"><img src="Views/admin/assets/icon-user.svg" alt="">Sinh viên<img class="left__iconDown" src="Views/admin/assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="./index.php?controller=student&action=add">Thêm sinh viên</a>
                                    <a class="left__link" href="./index.php?controller=student&action=show">Xem tất cả</a>
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <div class="left__title"><img src="Views/admin/assets/icon-book.svg" alt="">Môn học<img class="left__iconDown" src="Views/admin/assets/arrow-down.svg" alt=""></div>
                                <div class="left__text">
                                    <a class="left__link" href="./index.php?controller=subject&action=add">Thêm môn học</a>
                                    <a class="left__link" href="./index.php?controller=subject&action=show">Xem tất cả</a>
                                </div>
                            </li>

                            <li class="left__menuItem">
                                <a href="./index.php?controller=user&action=details&id=<?= $admin['id'] ?>" class="left__title"><img src="Views/admin/assets/icon-settings.svg" alt="">Thông tin tài khoản</a>
                            </li>

                            <li class="left__menuItem">
                                <a href="./index.php?controller=client" class="left__title"><img src="Views/admin/assets/icon-logout.svg" alt="">Quay lại trang chủ</a>
                            </li>

                            <li class="left__menuItem">
                                <a href="/ptit-project-php/index.php?controller=client&action=logout" class="left__title"><img src="Views/admin/assets/icon-logout.svg" alt="">Đăng Xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
