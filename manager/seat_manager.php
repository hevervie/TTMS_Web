<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>光影人生-影院票务管理系统</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/houtai.js"></script>
</head>
<body>
<!-- 网页头部 -->
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
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
<!-- 头部结束-->


<div class="container clearfix">
    <!-- 网页菜单栏-->
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="design.html"><i class="icon-font">&#xe044;</i>影厅管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe034;</i>影片管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe063;</i>座位管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe014;</i>演出计划管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe065;</i>财务管理</a></li>
                        <li><a href="design.html"><i class="icon-font">&#xe042;</i>票房统计</a></li>
                        <li><a href="managerStatistic.html"><i class="icon-font">&#xe033;</i>查询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>人事管理</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>密码重置</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- 菜单栏结束-->
    
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">影厅管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="#" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" >
                                    <option value="">全部</option>
                                    <option value="19">正在上映</option><option value="20">即将上映</option>
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
                <div class="result-title">
                    <div class="result-list">
                        <a href="insert.html"><i class="icon-font"></i>添加</a>
                        <a id="batchDel" href="javascript:void(0)" ><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content" id="fid">
                    <table class="result-tab" width="100%" id="tableid" cellpadding="0" cellspacing="0">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>影片名称</th>
                            <th>影片类型</th>
                            <th>放映厅</th>
                            <th>状态</th>
                            <th>时间</th>
                            <th>票价</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td>59</td>
                            <td title="美国队长3"><a target="_blank" href="#" title="美国队长3">美国队长3</a> …
                            </td>
                            <td>IMAX</td>
                            <td>2号厅</td>
                            <td>正在上映</td>
                            <td>5.11 21:11:01-5.11 23:11:01</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#" onclick="deleteRow(this)">删除</a>
                            </td>
                        </tr>
                        <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td>59</td>
                            <td title="美国队长3"><a target="_blank" href="#" title="美国队长3">美国队长3</a> …
                            </td>
                            <td>IMAX</td>
                            <td>2号厅</td>
                            <td>正在上映</td>
                            <td>5.11 21:11:01-5.11 23:11:01</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#" onclick="deleteRow(this)">删除</a>
                            </td>
                        </tr>
                      
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