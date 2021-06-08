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
                                            <th>Tên ảnh</th>
                                            <th>Hình ảnh</th>
                                            
                                            <th>Chọn</th>
                                            <th>Xoá</th>
                                        </tr>
                                    </thead>

                                    <tbody class="danhsach">
                                        <?php foreach($images as $i): ?>
                                        
                                        <tr>
                                            <td data-label="Mã"><?= $i['id'] ?></td>
                                            <td data-label="Tên ảnh"><?= $i['name'] ?></td>
                                            <td data-label="Hình ảnh"><img src="<?= $i['path'] ?>" style="width: 100px; "></td>
                                                <?php if($i['choose'] == 1) { ?>
                                                    <td data-label="Chọn">
                                                        <img src="Views/admin/assets/icon-check.svg">
                                                    </td>
                                                <?php } else { ?>
                                                    <td data-label="Chọn">
                                                        <a href="/ptit-project-php/index.php?controller=dashboard&action=updateImageForHome&id=<?= $i['id']?>" class="right__iconTable">
                                                            <img src="Views/admin/assets/icon-pencil.svg">
                                                        </a>
                                                    </td>
                                                <?php }
                                                ?>

                                            <td data-label="Xoá" class="right__iconTable">
                                                <a href="/ptit-project-php/index.php?controller=dashboard&action=deleteImage&id=<?= $i['id'] ?>"><img src="Views/admin/assets/icon-trash-black.svg" alt=""></a>
                                            </td>   
                                        </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                
                                <a href="/ptit-project-php/index.php?controller=dashboard&action=addImage" class="right__tableMore" style="width: 550px; padding-top: 15px;">
                                    Thêm ảnh<img src="Views/admin/assets/arrow-right-black.svg" alt=""></a>
                            </div>

                            

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>

    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.timkiem').keyup(function(){
                var txt = $('.timkiem').val();
                $.post('/ptit-project-php/index.php?controller=department&action=search', {data: txt}, function(data){
                    $('.danhsach').html(data);
                })
            });
            
        })
    </script>

</body>

</html>