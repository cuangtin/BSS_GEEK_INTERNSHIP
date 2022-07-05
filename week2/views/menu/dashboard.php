<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DashBoard</title>
    <link rel="stylesheet" href="../../css/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />
</head>

<body>
    <?php

    require '../../helpers/Db.php';
    require '../../models/device.php';
    require '../../controllers/DeviceController.php';

    $device_ctl = new DeviceController();
    if ($_POST) {
        $name = $_POST['name'];
        $mac = 'a' . rand(1, 9) . ':b' . rand(1, 9) . ':c' . rand(1, 9) . ':d' . rand(1, 9).':e'. rand(1, 9);
        $ip = $_POST['ip'];
        $c_time = date('Y-m-d');
        $power = $_POST['power'];
        $device_ctl->addDevice($name, $mac, $ip, $c_time, $power);
    }
    $data_chart = json_encode($device_ctl->loadChart());

    ?>
    <script type="text/javascript">
        let data = <?php echo $data_chart; ?>;
    </script>

    <div class="wrapper">
        <div class="sidebar">
            <div id="menu">
                <div class="menu_hamburger"></div>
                <div class="menu_hamburger"></div>
                <div class="menu_hamburger"></div>
            </div>
            <a href="dashboard.php"><img src="../../img/home.png" alt="" height="70px" width="70px"></a>
            <ul>
                <li><img src="../../img/dashboard.png" alt="" width="25px" height="25px"><a href="#" class="active_menu">Dashboard</a>
                </li>
                <li><img src="../../img/logs.png" alt="" width="25px" height="25px"><a href="logs.php">Logs</a>
                </li>
                <li><img src="../../img/settings.png" alt="" width="25px" height="25px"><a href="#">Settings</a>
                </li>
                <li><img src="../../img/logout.png" alt="" width="25px" height="25px"><a href="../../index.php">Log
                        Out</a>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="header">
                <ul>
                    <li><img src="../../img/avatar.jpg" width="25px" height="25px" alt=""><a href="">Welcome John</a>
                    </li>
                </ul>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th>Devices</th>
                        <th>MAC Address</th>
                        <th>IP</th>
                        <th>Create Date</th>
                        <th>Power Consumption</th>
                        <th></th>
                    </tr>
                    <tbody>
                        <?php
                        $data = $device_ctl->loadDeviceToTable();
                        $sum = 0;
                        for ($i = 0; $i < count($data); $i++) {
                            echo "<tr><td>" . $data[$i]['name'] . '</td><td>'
                                . $data[$i]['mac_address'] . '</td><td>' . $data[$i]['ip_address']
                                . '</td><td>' . $data[$i]['c_time'] . '</td><td>'
                                . $data[$i]['power'] . '</td><td><form action="" method="POST"><input type="submit" value="xoá" id="'.$data[$i]['_id'].'" name="submit_form" /></form></td></tr>';
                            $sum += $data[$i]['power'];
                        }
                        
                        // $device = $device_ctl->deleteDevice($_POST['submit_form']);
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total:</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="total">
                                <?php
                                echo $sum;
                                ?>
                            </td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="product-chart">
                <p>Power Consumption</p>
                <canvas id="chart" height="200px" width="300px"></canvas>
            </div>

            <div class="add-product">
                <div class="add_form">
                    <form action="" method="POST" onsubmit="insertProduct()">
                        <input type="text" class="name" name="name" placeholder="NAME"> <br>
                        <input type="text" class="ip" name="ip" placeholder="IP"><br>
                        <input type="text" class="power" name="power" placeholder="POWER CONSUMPTION"><br>
                        <p id="validate_add_product">Every fields must be filled out!</p>
                        <button type="submit">ADD DEVICE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="../../js/validate.js"></script>
    <script src="../../js/logic.js"></script>
    <script type="text/javascript">
        let btn_humburger = document.querySelector("#menu");
        let sidebar = document.querySelector(".sidebar")
        btn_humburger.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
</body>

</html>