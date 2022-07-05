<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logs</title>
    <link rel="stylesheet" href="../../css/dashboard.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" />
</head>

<body>

    <?php
    require '../../helpers/Db.php';
    require '../../models/log.php';
    require '../../controllers/LogController.php';
    $log_ctl = new LogController();
    $data_logs = json_encode($log_ctl->loadLogToTable());

    ?>
    <script type="text/javascript">
        let data = <?php echo $data_logs; ?>;
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
                <li><img src="../../img/dashboard.png" alt="" width="25px" height="25px"><a href="dashboard.php">Dashboard</a>
                </li>
                <li><img src="../../img/logs.png" alt="" width="25px" height="25px"><a class="active_menu">Logs</a>
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

            <div id="logs_content" class="table">
                <div class="title_table-logs">
                    <b>Action Logs</b>
                    <input type="text" name="search_logs" id="search_logs" placeholder="Type name here..." onchange="searchByName()">
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Action</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $data = $device_ctl->loadLogToTable();
                        // $sum=0;
                        // for ($i = 0; $i < count($data); $i++){
                        //     echo "<tr><td>" . $data[$i]['name'] .'</td><td>'
                        //     . $data[$i]['action'] . '</td><td>'. $data[$i]['c_time'] .'</td></tr>';
                        //     $sum+=$data[$i]['power'];
                        // }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Total:</td>
                            <td></td>
                            <td></td>
                            <td class="total">
                                <!-- <?php echo $sum ?> -->
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="pagination_logs">
                    <ul></ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script type="text/javascript">
        let btn_humburger = document.querySelector("#menu");
        let sidebar = document.querySelector(".sidebar")
        btn_humburger.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
    <script src="../../js/pagination.js"></script>
</body>

</html>