<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($company["company_name"]); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo ($company["keyword"]); ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/bootstrap.min.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/style.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/lines.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/font-awesome.css" />	
 <link rel="stylesheet" type="text/css" href="/weidu/Public/admin/themes/css/custom.css" />	

<!-- jQuery -->
<script type="text/javascript" src="/weidu/Public/admin/themes/js/jquery.min.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/metisMenu.min.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/custom.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/d3.v3.js"></script>
<script type="text/javascript" src="/weidu/Public/admin/themes/js/rickshaw.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- <div class="navbar-header">
                <a class="navbar-brand"><?php echo ($company["company_name"]); ?></a>
				<a href="/weidu/admin.php/Index/destroy" class="dropdown-toggle" style="padding:15px 15px; height:50px; line-height:50px; color:white;font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出</a>
            </div> -->
			
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-left">
			    <li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/weidu/<?php echo ($company["logo"]); ?>"></a>	        		
	      		</li>
			</ul>
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="/weidu/index.php" class="dropdown-toggle" target="_blank" style="font-size:14px;"><span>查看首页</span></a>
	      		</li>
				<li style="line-height:52px;">|</li>
			    <li class="dropdown">
	        		<a href="/weidu/admin.php/Index/destroy" class="dropdown-toggle" style="font-size:14px;" onclick="if (!confirm('是否确定要退出？')) return false;">退出登入</a>		
	      		</li>
			</ul>
			<!-- 左侧菜单栏 -->
            
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""><i class="fa fa-laptop nav_icon"></i>网站信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">								
								<li>
                                    <a href="/weidu/admin.php/Company/index">公司信息</a>
                                </li>
								<!-- <li>
                                    <a href="/weidu/admin.php/Images/index">首页轮播图</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>板块<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/weidu/admin.php/Plate/index">板块管理</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php/Recruit/index">招聘信息</a>
                                </li>
								<li>
                                    <a href="/weidu/admin.php/Message/index">留言信息</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="/weidu/admin.php/Goods/index"><i class="fa fa-indent nav_icon"></i>商品列表<span class="fa arrow"></span></a>                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/weidu/admin.php/Manager/index"><i class="fa fa-envelope nav_icon"></i>管理员列表<span class="fa arrow"></span></a>                           
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>会员列表<span class="fa arrow"></span></a>  
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="/weidu/admin.php/Member/index">会员列表</a>
                                </li>
								<!-- <li>
                                    <a href="/weidu/admin.php/Member/buy">购买列表</a>
                                </li> -->
								<li>
                                    <a href="/weidu/admin.php/Member/put">提现列表</a>
                                </li>
                            </ul>							
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
			
            <!-- /.navbar-static-side -->
        </nav>
		
        <div id="page-wrapper">
		<!-- 中间编辑栏 -->
		
<link rel="stylesheet" type="text/css" href="/weidu/Public/admin/jqueryTreescroll/css/tree.css" />
<script type="text/javascript" src="/weidu/Public/admin/jqueryTreescroll/js/treescroll.min.js"></script>
<div class="col-md-12 graphs">
	<div class="xs">
  	<h3><?php echo ($member["member_name"]); ?></h3>
	<div class="col_1">
			<div class="panel-body no-padding">
				<table class="table table-striped">
					<thead>
						<tr class="warning">
							<th>手机账号</th>
							<th>会员名</th>
							<th>是否开通代理</th>
							<th>推广码</th>
							<th>地址</th>
							<th>余额</th>
							<th>开通时间</th>							
						</tr>
					</thead>
							
				<tbody>
					<tr>
						 <td><?php echo ($member[member_phone]); ?></td>
						 <td><?php echo ($member[member_name]); ?></td>
						 <td>
						 <?php if(($member["is_open"]) == "0"): ?>未开通<?php endif; ?>
						 <?php if(($member["is_open"]) == "1"): ?>已开通<?php endif; ?>
						 </td>
						 <td><a href="/weidu/Goods/code/id/<?php echo md5(time()); ?>_<?php echo ($member[member_id]); ?>" target="_blank">点击查看</a></td>
						 <td><?php echo ($member['member_address']); ?></td>
						 <td><?php echo ($member['member_money']); ?></td>
						 <td><?php echo date('Y-m-d H:i:s',$member['add_time']);?></td>
					</tr>					
				</tbody>
				</table>
			</div>
		    <div class="col-md-12 span_8">	
		    <div class="panel-body1">
			   <table class="table">
				 <thead>
					<tr>
						<th>会员名</th>
						<th>手机号</th>
						<th>地址</th>						
						<th>上一级</th>
						<th>开通时间</th>
					</tr>
				  </thead>
				  <tbody>
				    <?php if(is_array($next_list)): foreach($next_list as $key=>$next): ?><tr>
					  <th scope="row">
						<?php $__FOR_START_16859__=0;$__FOR_END_16859__=$next['level'];for($i=$__FOR_START_16859__;$i < $__FOR_END_16859__;$i+=1){ ?>————<?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($next[member_name]); ?>						
					  </th>
					  <td><?php echo ($next[member_phone]); ?></td>
					  <td><?php echo ($next[member_address]); ?></td>
					  <td>
						 <?php if(is_array($member_list)): foreach($member_list as $key=>$member): if(($next["parent_id"]) == $member["member_id"]): echo ($member['member_name']); endif; endforeach; endif; ?>
					  </td>
					  <td><?php echo (date("Y.m.d",$next[add_time])); ?></td>
					</tr><?php endforeach; endif; ?>
				  </tbody>
				</table>
			</div>      
			</div>

		    <div class="clearfix"> </div>
	 </div>
	  
  </div>
</div>

	   </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="/weidu/Public/admin/themes/js/bootstrap.min.js"></script>

</body>
</html>