<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台管理_详细信息</title>
<link rel="stylesheet" href="../css/chuShiHua.css" type="text/css" /><!--初始化css样式-->
<link rel="stylesheet" href="../css/information_detail.css" type="text/css" /><!--本网页的css样式-->
<?php include("../php/functions_information_detail.php") ?><!--资讯-函数库-->
<!--js样式star-->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<!--js样式end-->
</head>

<body>
		<div id="top-header"></div>
		<!--头背景end-->
		
		
		
		
		<!--||导航栏-（首页）star-->
		<div id="bg">
			<div class="top-menu">
				<ul id="all_title">
					<li><a href="../houtai.php" class="width4">数据管理</a></li>
					<li><a href="information.php?form=1&page=1" class="width4">农业资讯</a></li>
					<li><a href="information.php?form=3&page=1" class="width4">农业政策</a></li>
					<li><a href="information.php?form=6&page=1" class="width4">市场行情</a></li>
					<li><a href="../video/video.php" class="width4">农业视频</a></li>
					<li><a href="../teach/teach.php" class="width4">种植教学</a></li>
					<li><a href="../nongzi/nongzi.php?form=1" class="width4">农资信息</a></li>
					<li><a href="../bing_chong/bing_chong.php" class="width5">病虫害防治</a></li>
				</ul>
				<input type="hidden" id="form" value="<?php echo $form ?>">
				<!--js代码star-->
				<script>
					$(function(){
						var form=$('#form').val();
						switch(form){
							case "information-news-hot":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(1).find('a').addClass('active');
								break;
							case "information-news-new":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(1).find('a').addClass('active');
								break;
							case "information-policy-dongtai":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(2).find('a').addClass('active');
								break;
							case "information-policy-huinong":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(2).find('a').addClass('active');
								break;
							case "information-policy-biaozhun":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(2).find('a').addClass('active');
								break;
							case "information-market-dongtai":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(3).find('a').addClass('active');
								break;
							case "information-market":
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(3).find('a').addClass('active');
								break;
							default:
								$('#all_title li a').removeClass('active');
								$('#all_title li').eq(1).find('a').addClass('active');
								break;
						}
						
					});
				</script>
			<!--搜索框star-->
				<div class="top-search">
					<a id='tuichu' href='../tuichu.php'>管理员退出</a>
				</div>
			<!--搜索框end-->
			</div>
		</div>
		<!--||导航栏-（首页）end>-->
	    <!--去掉4个像素-->
    	<div style="width: 1004px; height: 4px; background: #ffffff;margin:0px auto;"></div>
	    <!--||导航栏-（首页）end>-->
	    
	    
	    
	    
	    <!-------------------------------------------------------->
	    <!--内容部分-->
	    <div  id="content">
			<div class="title">
					<div class="nav">
						<!--/*导航标签*/-->
						<?php detail_nav($_GET["form"],$_GET["page"]); ?>
					</div>
					<div class="background"></div>
			</div>
    		<div class="con">
    			<!--内容-->
    			<?php detail($form,$id,$page); ?>
    		</div>
	    </div>
	    
	    
	    
 	<!-------------------------------------------------------->
  	<!--尾-->
	<div id="bottom">
		<div class="span">
			<div class="span1">
				<p>友情链接：</p>
				<div>
					<a href="http://www.xjxnw.gov.cn" target="_blank">兴农网</a>
					<a href="http://www.zgny.com.cn" target="_blank">中国农业网</a>
					<a href="http://www.chinapesticide.gov.cn" target="_blank">中国农药信息网</a>
					<a href="http://www.grain.gov.cn" target="_blank">中国粮食信息网</a>

				</div>
				<div>
					<a href="http://www.gofei.net" target="_blank">农批网</a>
					<a href="http://www.agri.cn" target="_blank">中国农业信网</a>
					<a href="http://www.nongyao001.com" target="_blank">中国农药第一网</a>
					<a href="http://www.zgncpw.com" target="_blank">中国农产品网</a>
				</div>
			</div>
			<div class="span2">
				<p>关于我们：</p>
				<div class="p">
					<p>联系地址：浙江省多媒体大赛</p>
					<p>联系电话：***********/**********</p>
				</div>
				<div class="p">
				 <p>官方邮箱：***********@qq.com</p>
				</div>
			</div>
			<div class="span3">
					<a href="../../index.php" target="_blank">新疆农业技术学习平台</a>
			</div>
		</div>
	</div>
</body>
</html>