<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>西科码Co.,Ltd | 西科码数据可视化管理平台</title>

    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Public/css/animate.css" rel="stylesheet">
    <!--<link href="/Public/css/plugins/dropzone/basic.css" rel="stylesheet">-->
    <!--<link href="/Public/css/plugins/dropzone/dropzone.css" rel="stylesheet">-->
    <link href="/Public/css/style.css" rel="stylesheet">
    <script src="/Public/js/jquery-2.1.1.js"></script>
</head>

<body>

<div id="wrapper">

<nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav metismenu" id="side-menu">
<li class="nav-header">
    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/Public/Upload/head_img/default.png" width="50" height="50" />
                             </span>
        <a data-toggle="dropdown" class="dropdown-toggle" href="form_file_upload.html#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$userInfo['fnickname'];?></strong>
                             </span> <span class="text-muted text-xs block"><?=$userInfo['faccount'];?><b class="caret"></b></span> </span> </a>
        <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li><a href="/user/profile">Profile</a></li>
            <li class="divider"></li>
            <li><a href="/user/logout">Logout</a></li>
        </ul>
    </div>
    <div class="logo-element">
        ：）
    </div>
</li>
    <?php foreach($menu as $k=>$v){ ?>
        <li <?php if($v['controller'] == $controllerName){ echo "class='active'";} ?>>
            <a href="javascript:void(0);"><i class="<?=$v['class'];?>"></i>
                <span class="nav-label"><?=$v['name'];?></span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse">
                <?php foreach($v['two_level_menu'] as $tow_level_menu_key=>$tow_level_menu_val){ ?>
                    <li <?php if($tow_level_menu_val['action'] == $actionName) echo "class='active'";?> ><a href="/<?php echo ($tow_level_menu_val["controller"]); ?>/<?php echo ($tow_level_menu_val["action"]); ?>"><?=$tow_level_menu_val['name'];?></a></li>
                <?php }?>
            </ul>
        </li>
    <?php } ?>
</ul>

</div>
</nav>

<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:void(0)"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to PeopleSoft</span>
                </li>
                <li class="dropdown">
                    <!--<a class="dropdown-toggle count-info" data-toggle="dropdown" href="form_file_upload.html#">-->
                        <!--<i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>-->
                    <!--</a>-->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/Public/img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/Public/img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="/Public/img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <!--<a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0)">-->
                        <!--<i class="fa fa-bell"></i>  <span class="label label-primary">8</span>-->
                    <!--</a>-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="/user/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
    </div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>订单管理</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">销售平台管理</a>
            </li>
            <li class="active">
                <strong>订单管理</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>订单管理</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_data_tables.html#">Config option 1</a>
                            </li>
                            <li><a href="table_data_tables.html#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="">
                        <!--<a href="#" class="btn btn-primary ">创建新用户</a>-->
                    </div>
                    <table class="table table-striped table-bordered table-hover product_dataTables" id="editable" >
                        <thead>
                        <tr>
                            <th>订单ID</th>
                            <th>商品ID</th>
                            <th>商品名称</th>
                            <th>购买数量</th>
                            <th>订单状态</th>
                            <th>下单UID</th>
                            <th>支付方式</th>
                            <th>快递单号</th>
                            <th>邮寄地址</th>
                            <th>订单创建时间</th>
                            <th>订单完成时间</th>
                            <th>订单操作UID</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeX">
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300);

    .loading-bro {
        position: absolute;
        top: calc(50% - 80px);
        left: calc(50% - 130px);
        width: 64px;
        height: 64px;
        border-radius: 50%;
        perspective: 800px;
    }
    #load {
        width: 100px;
        animation: loading 3s linear infinite;
    }
    #load #loading-inner {
        stroke-dashoffset: 0;
        stroke-dasharray: 300;
        stroke-width: 10;
        stroke-miterlimit: 10;
        stroke-linecap: round;
        animation: loading-circle 2s linear infinite;
        stroke: #51BBA7;
        fill: transparent;
    }

    @keyframes loading {
        0% {
            transform: rotate(0);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    @keyframes loading-circle {
        0% {
            stroke-dashoffset: 0;
        }
        100% {
            stroke-dashoffset: -600;
        }
    }

</style>
<div class="loading-bro">
    <h1 style="width: 300px; margin-left: -90px; text-align: center; font-weight: bold; color: #999;">正在加载数据...</h1>
    <svg id="load" x="0px" y="0px" viewBox="0 0 150 150">
        <circle id="loading-inner" cx="75" cy="75" r="60"/>
    </svg>
</div>

<link href="/Public/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
<script src="/Public/js/plugins/dataTables/datatables.min.js"></script>


<script type="application/javascript">

    $('.product_dataTables').DataTable({
        //"processing": true,
        "serviceSize":true,
        "serverSide": true,//打开后台分页
        "sAjaxSource": "/salecontrol/order/query",
        "fnServerData": function ( sSource, aoData, fnCallback ) {
            $.ajax({
                "dataType": 'json',
                "type": "POST",
                "url": sSource,
                "data": aoData,
                "success": fnCallback,
            });
        },
        "drawCallback": function( settings ) {      //首次请求数据
            $(".loading-bro").css('display','none');
        },
        "fnPreDrawCallback":function (){        //开始绘制数据之前调用
            $(".loading-bro").css('display','block');
        },
        "columns": [
            { "data": 'order_number' },
            { "data": 'goods_id' },
            { "data": 'goods_name'},
            { "data": 'goods_number'},
            { "data": 'order_status'},
            { "data": 'order_create_uid'},
            { "data": 'pay_type'},
            { "data": 'order_express_number'},
            { "data": 'order_address'},
            { "data": 'order_create_at'},
            { "data": 'order_done_time'},
            { "data": 'operation_order_uid'},
            { "data": 'id',
                "render":function(data,type,full,callback){
                    return ("<a href=/configure/order/update/"+data+"><button type='button' class='btn btn-xs btn-primary'>更新订单信息</button></a>" +
                    "  <a href=/salecontrol/order/delete/"+data+"><button type='button' class='btn btn-xs btn-danger'>删除</button></a>");
                }
            },

        ],
        "iDisplayLength":10,
        "bSort": false,
        "sPaginationType": "full_numbers",      //翻页界面类型
        "bLengthChange": false,                 //用户不可改变每页显示数量
        "oLanguage": {                          //汉化
            "sLengthMenu": "每页显示 _MENU_ 条记录。",
            "sZeroRecords": "没有检索到数据。",
            "sInfo": "当前数据为从第 _START_ 到第 _END_ 条数据；总共有 _TOTAL_ 个订单。",
            "sInfoEmtpy": "没有数据。",
            "sLoadingRecords": "载入中...",
            //"sProcessing": Loading,
            "sInfoFiltered": '(过滤总订单数 _MAX_ 条)',
            "oPaginate": {
                "sFirst": "首页",
                "sPrevious": "前页",
                "sNext": "后页",
                "sLast": "尾页"
            }
        }

    });
</script>

<div class="footer">
    <div class="pull-right">
        西科码股份(北京)科技有限公司   ALL Rights Reserved
    </div>
    <div>
        <strong>Copyright</strong> Segma  &copy; 2014-2017
    </div>
</div>

</div>
</div>
<!-- Mainly scripts -->
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/plugins/metisMenu/metisMenu.min.js"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.0/metisMenu.min.js"></script>-->
<!--<script src="//cdn.jsdelivr.net/npm/metismenu@2.7.0/dist/metisMenu.min.js"></script>-->

<!--<script src="https://cdn.bootcss.com/metisMenu/2.6.1/metisMenu.min.js"></script>-->


<script src="/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="/Public/js/inspinia.js"></script>
<script src="/Public/js/plugins/pace/pace.min.js"></script>

<script type="application/javascript">
     $('#side-menu').metisMenu();
</script>

</body>
</html>