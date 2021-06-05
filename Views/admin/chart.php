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

                        <div id="piechart_3d" style="width: 950px; height: 410px;"></div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="Views/admin/js/main.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                            ['Tỉnh thành', 'Số lượng sinh viên'],

                            <?php
                                for ($x = 0; $x < count($address); $x+=1) {
                                    echo "['". $address[$x]['address'].  "', " 
                                    . $count_address[$x] . "], ";
                                }

                                echo "]);";
                            ?>

                            // ['Work',     11],
                            // ['Eat',      2],
                            // ['Commute',  2],
                            // ]);

            var options = { title: 'Biểu đồ theo địa chỉ',
                            is3D: true 
                            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            
            chart.draw(data, options);
        }

    </script>
</body>

</html>