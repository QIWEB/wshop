<?php /*%%SmartyHeaderCode:8972597d66b62fba03-70407591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc1a704960f741027bcb0e10e8e33832ec9391d3' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\index.dwt.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '60050616a473761d3193528c2a544510722b51b1' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\ecjia-pc.dwt.php',
      1 => 1498202359,
      2 => 'file',
    ),
    'e501368787c5d517cd065c4cdb83861be295de34' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\page_header.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '3b2e106e014627f37c7a39a2242c508b298607ac' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\no_content.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    'cd86b7ab5c3aff7b7c063aafcd650a7923885b4d' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\page_footer.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '859d3ecdb924db8f42cd3264b16d94b9baae7ded' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\choose_city.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '153707d504f70f401515f12dfb6dc9eca6bd4691' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\nav.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8972597d66b62fba03-70407591',
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6c1273f627_00190744',
  'has_nocache_code' => true,
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6c1273f627_00190744')) {function content_597d6c1273f627_00190744($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ECJia到家 - 同城上门O2O解决方案 - Powered by ECJia</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://localhost/content/uploads/data/assets/ecjia-intro/wap_logo.png" rel="shortcut icon bookmark">
	
	<link rel="stylesheet" href="http://localhost/content/themes/ecjia-pc/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/content/themes/ecjia-pc/fonts/iconfont.min.css">
	<link rel="stylesheet" href="http://localhost/content/themes/ecjia-pc/css/style.css">
	<link rel="stylesheet" href="http://localhost/content/themes/ecjia-pc/lib/swiper/css/swiper.min.css">
</head>
<body>
	<div class="main_content">
	
 

<div class="ecjia-header fixed">
	<div class="ecjia-content">
		<div class="ecjia-fl ecjia-logo">
			<a href="http://localhost"><img class="wt-10" src="http://localhost/content/uploads/data/assets/ecjia-intro/shop_logo.gif"></a>
			<div class="select-location">
				<i class="icon-position"></i>
				<span class="current-position">深圳</span>
				<span class="choose-city">切换城市</span>
			</div>
		</div>
		<div class="ecjia-fl search" data-url="http://localhost/index.php?m=main&c=index&a=search">
			<input type="text" placeholder="搜索商品名称或商家" name="keywords" value="" autocomplete="off"/>
			<button class="button search-button" data-url="http://localhost/index.php?m=goods&c=index&a=init"><i class="iconfont"></i></button>
			<ul class="shelper"></ul>
		</div>
		<div class="ecjia-fr">
			<ul class="nav">
				<li class="active"><a href="http://localhost">首页</a></li>
				<li ><a class="merchant-list" href="http://localhost/index.php?m=merchant&c=store&a=category">商家</a></li>
				<li><a class="nopjax" href="http://localhost/sites/app">下载APP</a></li>
				<li><a class="nopjax" href="http://localhost/sites/merchant/index.php?m=franchisee&c=merchant&a=init" target="_blank">商家入驻</a></li>
				<li><a class="nopjax ecjia-back-green" href="http://localhost/sites/merchant/index.php?m=staff&c=privilege&a=login" target="_blank">商家登录</a></li>
			</ul>
		</div>
	</div>
</div>


<div class="ecjia-category-nav">
	<div class="category-info ecjia-category">
		<div class="ecjia-category-info">
						<div class="ecjia-category-info-l1">
				<a class="ecjia-category-l2" href="http://localhost/index.php?m=goods&c=index&a=init&cat_id=1">
					<span class="category-icon"><img src="http://localhost/content/themes/ecjia-pc/images/category/category_all_on.png"></span>iphone
					<i class="iconfont icon-jiantou-right"></i>
				</a>
				<div class="ecjia-category-info-l2">
					<div class="cate_detail">
											</div>
				</div>
			</div>
					</div>
	</div>
	<div class="category-bg"></div>
</div>

<div class="ecjia-cycleimage">
	<div id="swiper-web" class="swiper-container">
		<div class="swiper-wrapper">
						<div class="swiper-slide" style="background:url('http://localhost/content/uploads/data/cycleimage/1492650806593974463.png') center center no-repeat;">
				<a href="https://cityo2o.ecjia.com/index.php?m=merchant&c=store&a=category&cat_id=4"></a>
			</div>
						<div class="swiper-slide" style="background:url('http://localhost/content/uploads/data/cycleimage/1492651290525993731.png') center center no-repeat;">
				<a href="https://cityo2o.ecjia.com/index.php?m=merchant&c=goods&a=init&store_id=111"></a>
			</div>
						<div class="swiper-slide" style="background:url('http://localhost/content/uploads/data/cycleimage/1492651307128656813.png') center center no-repeat;">
				<a href="https://cityo2o.ecjia.com/index.php?m=merchant&c=goods&a=init&store_id=60"></a>
			</div>
						<div class="swiper-slide" style="background:url('http://localhost/content/uploads/data/cycleimage/1492651334051472978.png') center center no-repeat;">
				<a href="https://cityo2o.ecjia.com/index.php?m=merchant&c=goods&a=init&store_id=109"></a>
			</div>
						<div class="swiper-slide" style="background:url('http://localhost/content/uploads/data/cycleimage/1492651353919196607.png') center center no-repeat;">
				<a href="https://cityo2o.ecjia.com/index.php?m=goods&c=index&a=init&cat_id=1033"></a>
			</div>
					</div>
				<div class="swiper-pagination swiper-index-pagination"></div>
			</div>
</div>




<div class="ecjia-no-content">
	<div class="content">
		<div class="content-container">
			<div class="current-city">当前选择城市：深圳</div>
			<p>抱歉！您切换的城市暂时还没有店铺和商品。</p>
			<p>赶快来入驻吧</p>
			<a class="nopjax" href="http://localhost/sites/merchant/index.php?m=franchisee&c=merchant&a=init" target="_blank"><span class="go_settled">去入驻</span></a>
			<p>或者您还可以<span class="choose-city">去其他城市看看哦</span></p>
		</div>
	</div>
</div>
<div class="J_f J_lift lift" id="lift">
	<ul class="lift_list">
							</ul> 
</div>

<div class="ecjia-page-footer">
	<div class="foot-top">
		<p>特色<span class="ecjia-green">到家</span>平台</p>
		<p class="">品类齐全，轻松购物，为您呈现不一样的生活服务平台</p>
		<div class="helper">
			<div class="mod" data-spm-ab="1">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-1"></i>
				        <div>正品保障</div>
				        <div>正品行货，放心选购</div>
			      </h4>
				</div>
			</div>
			
			<div class="mod" data-spm-ab="2">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-2"></i>
				        <div>产地直采</div>
				        <div>100%产地直采，放心低价</div>
			      </h4>
				</div>
			</div>
			
			<div class="mod" data-spm-ab="3">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-3"></i>
				        <div>准时送达</div>
				        <div>收货时间，自主选择</div>
			      </h4>
				</div>
			</div>
			
			<div class="mod" data-spm-ab="4">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-4"></i>
				        <div>售后无忧</div>
				        <div>客服全年无休，用户体验至上</div>
			      </h4>
				</div>
			</div>
		</div>
				<div class="hot-city">
			<div class="hot-city-left">热门城市</div>
			<div class="hot-city-right">
								<li class="position-li" data-id="52">北京</li>
								<li class="position-li" data-id="76">广州</li>
								<li class="position-li" data-id="77">深圳</li>
								<li class="position-li" data-id="180">武汉</li>
								<li class="position-li" data-id="220">南京</li>
								<li class="position-li" data-id="311">西安</li>
								<li class="position-li" data-id="321">上海</li>
								<li class="position-li" data-id="322">成都</li>
								<li class="position-li" data-id="343">天津</li>
								<li class="position-li" data-id="383">杭州</li>
								<li class="position-li" data-id="394">重庆</li>
								<li class="position-li" data-id="3401">合肥</li>
							</div>
		</div>
			</div>
</div>

<div class="page-footer">
	<div class="outlink">
		        <span>
            <a class="blog-ico" href="http://weibo.com/ECMBT" target="_blank"></a>
        </span>
                		<span class="outlink-qrcode">
            <div class="wechar-code">
				<img src="http://localhost/content/uploads/data/assets/ecjia-intro/shop_wechat_qrcode.jpg">
				<span>打开微信扫一扫关注</span>
			</div>
			<a class="wechat" href="javascript:void(0)"></a>
		</span>
        	</div>
	    <p>上海商创网络科技有限公司 版权所有 &nbsp;&nbsp;<a href="http://www.miibeian.gov.cn" target="_blank"> 沪ICP备20170120号</a>&nbsp;&nbsp;Powered&nbsp;by&nbsp;<a href="https:\/\/ecjia.com" target="_blank">ECJia</a></p>
    <p>地址：上海市中山北路3553号伸大厦301   咨询热线：4001-021-758</p>
</div>
	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?45572e750ba4de1ede0e776212b5f6cd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>




<div class="choose-city-div">
	<div class="city-content">
		<div class="header">
			<div class="title">请选择您所在的城市</div>
			<span class="close_div">X</span>
		</div>
		<div class="content">
			<div class="content-position">
				<div class="guess-position">猜你在</div>
				<div class="position">
					<?php if ($_smarty_tpl->tpl_vars['info']->value['location_id']) {?>
						<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['region_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['info']->value['location_id']==$_smarty_tpl->tpl_vars['val']->value['id']) {?>
							<li class="position-li <?php if ($_smarty_tpl->tpl_vars['info']->value['city_id']==$_smarty_tpl->tpl_vars['val']->value['id']) {?>active<?php }?> location-position" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</li>
						<?php }?>
						<?php } ?>
					<?php }?>
				</div>
			</div>
			<div class="content-bottom">
				<div class="title">热门城市</div>
				<div class="position-list">
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['region_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					<li class="position-li <?php if ($_smarty_tpl->tpl_vars['info']->value['city_id']==$_smarty_tpl->tpl_vars['val']->value['id']) {?>active<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</li>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="choose-city-overlay"></div>




<div class="suspension">
	<div class="suspension-box">
				
				<div class="suspension-box-item">
			<a class="a tel j-icon"><i>tel</i></a>
			<div class="tel j-box">
				<strong>服务热线：</strong>
				<p>4001-021-758</p>
				<i></i>
			</div>
		</div>
				
				<div class="suspension-box-item">
			<a class="code j-icon a"><i>code</i></a>
			<div class="code j-box">
				<img src="http://localhost/content/uploads/data/assets/ecjia-intro/shop_wechat_qrcode.jpg">
				<p>
					扫一扫，微信关注EC+到家
				</p>
				<i></i>
			</div>
		</div>
				<a class="back_top j-back-top a"><i>back_top</i></a>
	</div>
</div>
	</div>
	
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/lib/swiper/js/swiper.min.js"></script>
	 <script type="text/javascript">var theme_url = "http://localhost/content/themes/ecjia-pc/";</script>
	 
	
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/js/ecjia.pc.raty.js" ></script>
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/js/ecjia.pc.koala.js" ></script>
	<script type="text/javascript" src="http://localhost/content/themes/ecjia-pc/js/ecjia.pc.js" ></script>
	
<script type="text/javascript">
	sessionStorage.removeItem('index_swiper');
	ecjia.pc.init();
</script>

</body>
</html>
<?php }} ?>
