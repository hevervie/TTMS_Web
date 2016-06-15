<?php
    session_start();
    if (!isset($_SESSION["username"]) || !isset($_SESSION["identity"])) {
        die("<h1>非法访问</h1>");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>光影人生-影院票务管理系统</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/houtai.js"></script>
</head>
<body>

<!--网页头部-->
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <ul class="navbar-list clearfix">
                <li style="font-size:20px; font-weight:bold;">光影人生</li>
                <li style="font-size: 16px;font-style: italic">-影院票务管理系统</li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#"><i class="icon-font">&#xe014;</i></a></li>
                <li><a href="#"><i class="icon-font">&#xe059;</i></a></li>
            </ul>
        </div>
    </div>
</div>
<!--头部结束-->


<div class="container clearfix">

    <!--网页菜单栏-->
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="booking.html"><i class="icon-font">&#xe044;</i>售票</a></li>
                        <li><a href="return.html"><i class="icon-font">&#xe034;</i>退票</a></li>
                        <li><a href="select.html"><i class="icon-font">&#xe063;</i>影片查询</a></li>
                        <li><a href="schedule_select.html"><i class="icon-font">&#xe014;</i>演出计划查询</a></li>
                        <li><a href="employeeStatistic.html"><i class="icon-font">&#xe065;</i>统计</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="change_passwd.html"><i class="icon-font">&#xe017;</i>更改密码</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--菜单栏结束-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <a href="index.html">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">影片查询</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">类型:</th>
                            <td>
                                <select name="type" >
                                    <?php
                                        $DB_TABLE_NAME="play";
                                        require_once "../../conf/DB_login.php";
                                        /*
                                         * 连接数据库
                                         */
                                        $connect = new mysqli($DB_HOST, $DB_USER, $DB_PASSWD);
                                        /*
                                         * 如果连接失败，则直接结束
                                        */
                                        if (!$connect) {
                                            die("Connect DataBase Error!<br/>");
                                        }

                                        /*
                                         * 选择数据库
                                         */
                                        $select = $connect->select_db($DB_NAME);
                                        $query="select (id,type) from type ;";
                                        $result = $connect ->query($query);

                                        echo "<option value="0">全部</option>";
                                        while ($row = $result->fetch_array()) {
                                            echo "<option value=".$row["id"].">".$row["type"]."</option>"
                                        }
                                    ?>
                                </select>
                            </td>
                            <th width="120">语言:</th>
                            <td>
                                <select name="lang" >
                                    <?php
                                        $DB_TABLE_NAME="lang";
                                        require_once "../../conf/DB_login.php";
                                        /*
                                         * 连接数据库
                                         */
                                        $connect = new mysqli($DB_HOST, $DB_USER, $DB_PASSWD);
                                        /*
                                         * 如果连接失败，则直接结束
                                        */
                                        if (!$connect) {
                                            die("Connect DataBase Error!<br/>");
                                        }

                                        /*
                                         * 选择数据库
                                         */
                                        $select = $connect->select_db($DB_NAME);
                                        $query="select (id,type) from type ;";
                                        $result = $connect ->query($query);

                                        echo "<option value="0">全部</option>";
                                        while ($row = $result->fetch_array()) {
                                            echo "<option value=".$row["id"].">".$row["type"]."</option>"
                                        }
                                    ?>
                                </select>
                            </td>
                            <th width="120">等级:</th>
                            <td>
                                <select name="level" >
                                    <?php
                                        $DB_TABLE_NAME="level";
                                        require_once "../../conf/DB_login.php";
                                        /*
                                         * 连接数据库
                                         */
                                        $connect = new mysqli($DB_HOST, $DB_USER, $DB_PASSWD);
                                        /*
                                         * 如果连接失败，则直接结束
                                        */
                                        if (!$connect) {
                                            die("Connect DataBase Error!<br/>");
                                        }

                                        /*
                                         * 选择数据库
                                         */
                                        $select = $connect->select_db($DB_NAME);
                                        $query="select (id,type) from type ;";
                                        $result = $connect ->query($query);

                                        echo "<option value="0">全部</option>";
                                        while ($row = $result->fetch_array()) {
                                            echo "<option value=".$row["id"].">".$row["type"]."</option>"
                                        }
                                    ?>
                                </select>
                            </td>
                            <th width="120">时长:</th>
                            <td>
                                <select name="length" >
                                    <option value="">全部</option>
                                    <option value="19">90<</option>
                                    <option value="20">90-120</option>
                                    <option value="20">>120</option>
                                </select>
                            </td>
                            <th width="120">票价:</th>
                            <td>
                                <select name="price" >
                                    <option value="">全部</option>
                                    <option value="19">20<</option>
                                    <option value="20">20-60</option>
                                    <option value="20">>60</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-content" id="fid">
                    <table class="result-tab" width="100%" id="tableid" cellpadding="0" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>影片名称</th>
                            <th>影片类型</th>
                            <
                            <th>放映厅</th>
                            <th>状态</th>
                            <th>时间</th>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td title="美国队长3">美国队长3</td>
                            </td>
                            <td>IMAX</td>
                            <td>2号厅</td>
                            <td>正在上映</td>
                            <td>5.11 21:11:01-5.11 23:11:01</td>
                        </tr>
                        <?php
                           
                            $type = $_POST["type"];
                            $lang = $_POST["lang"];
                            $level = $_POST["level"];
                            $last = $_POST["length"];
                            $price = $_POST["price"];
                            $keywords = $_POST["keywords"];
                            
                            $DB_TABLE_NAME="play";
                            require_once "../../conf/DB_login.php";
                            /*
                             * 连接数据库
                             */
                            $connect = new mysqli($DB_HOST, $DB_USER, $DB_PASSWD);
                            /*
                             * 如果连接失败，则直接结束
                            */
                            if (!$connect) {
                                die("Connect DataBase Error!<br/>");
                            }

                            /*
                             * 选择数据库
                             */
                            $select = $connect->select_db($DB_NAME);
                            
                            if(!is_null($type)){

                                    /*
                                     * 写SQL语句
                                     */
                                    $query = " select (id,name.type_id,lang_id,level_id,score,length,price) from " . $DB_TABLE_NAME . " where type= \"" . $type . "\"; && \"".$lang."\" && \"".$length."\" && \"".$price."\" && ";
                                    /*
                                     * 获取查询结果
                                     */
                                    $result = $connect->query($query);         
                                    if (!$result) {
                                        die("<p>查询失败</p><br/>");
                                    } else {
                                        while ($row = $result->fetch_array()) {
                                            $query = "select type from type where id = ".$row['type_id'].";";
                                            $result2 = $connect->query($query);         
                                            
                                            while ( $row2 = $result2 ->fetch_array()) {
                                                # code...
                                                $type=$row2["type"]
                                            }
                                            $query = "select type from lang where id = ".$row['lang_id'].";";
                                            $result3 = $connect->query($query);         
                                            
                                            while ( $row3 = $result3 ->fetch_array()) {
                                                # code...
                                                $lang=$row3["type"]
                                            }
                                            $query = "select type from level where id = ".$row['level'].";";
                                            $result4 = $connect->query($query);         
                                            
                                            while ( $row4 = $result4 ->fetch_array()) {
                                                # code...
                                                $level=$row4["type"]
                                            }
                                            
                                            echo "<td>".$row["id"]."</td>"
                                            echo "<td >".$row["name"]."</td>"
                                            echo "<td>".$type."</td>"
                                            echo "<td>".$lang."</td>"
                                            echo "<td>".$score."</td>"
                                            echo "<td>".$length."</td>"
                                            echo "<td>".$price."</td>"
                                        }
                                    }
                                }else{
                                    echo ""
                                }
                            }
                            else
                            {
                                    /*
                                     * 写SQL语句
                                     */
                                    $query = " select (id,name.type_id,lang_id,level_id,score,length,price) from " . $DB_TABLE_NAME .";";
                                    /*
                                     * 获取查询结果
                                     */
                                    $result = $connect->query($query);         
                                    if (!$result) {
                                        die("<p>查询失败</p><br/>");
                                    } else {
                                        while ($row = $result->fetch_array()) {
                                            $query = "select type from type where id = ".$row['type_id'].";";
                                            $result2 = $connect->query($query);         
                                            
                                            while ( $row2 = $result2 ->fetch_array()) {
                                                # code...
                                                $type=$row2["type"]
                                            }
                                            $query = "select type from lang where id = ".$row['lang_id'].";";
                                            $result3 = $connect->query($query);         
                                            
                                            while ( $row3 = $result3 ->fetch_array()) {
                                                # code...
                                                $lang=$row3["type"]
                                            }
                                            $query = "select type from level where id = ".$row['level'].";";
                                            $result4 = $connect->query($query);         
                                            
                                            while ( $row4 = $result4 ->fetch_array()) {
                                                # code...
                                                $level=$row4["type"]
                                            }
                                            
                                            echo "<td>".$row["id"]."</td>"
                                            echo "<td >".$row["name"]."</td>"
                                            echo "<td>".$type."</td>"
                                            echo "<td>".$lang."</td>"
                                            echo "<td>".$score."</td>"
                                            echo "<td>".$length."</td>"
                                            echo "<td>".$price."</td>"
                                        }
                                    }
                                }
                            }
                        ?>
                    </table>
                    <div class="list-page"> 1 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
    <script type="text/javascript">
        function post()
            {
                forPost.action="DestinationPage.aspx";
                forPost.submit();
            }
    </script>
</div>
</body>
</html>
