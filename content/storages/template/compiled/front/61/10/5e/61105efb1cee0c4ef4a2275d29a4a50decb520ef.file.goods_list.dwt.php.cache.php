<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:18:19
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\goods_list.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:1952597d6c1bdaa1d2-16871270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61105efb1cee0c4ef4a2275d29a4a50decb520ef' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\goods_list.dwt.php',
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
  'nocache_hash' => '1952597d6c1bdaa1d2-16871270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'pc_keywords' => 0,
    'pc_description' => 0,
    'theme_url' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6c1ee33834_81333724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6c1ee33834_81333724')) {function content_597d6c1ee33834_81333724($_smarty_tpl) {?><?php if (!is_pjax()) {?>
<?php if (is_ajax()) {?>

<?php } else { ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['pc_keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['pc_description']->value;?>
" />
	<link href="<?php if (ecjia_config::has('wap_logo')) {?><?php echo RC_Upload::upload_url(ecjia::config('wap_logo'));?>
<?php } else { ?>favicon.ico<?php }?>" rel="shortcut icon bookmark">
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
fonts/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/swiper/css/swiper.min.css">
</head>
<body>
	<div class="main_content">
	
<?php /*  Call merged included template "library/page_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1c2d4be0_88144387($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_header.lbi.php" */?>

<?php if ($_smarty_tpl->tpl_vars['has_store']->value) {?>
<div class="ecjia-goods-list">
	<div class="goods-category ecjia-content">
		<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>
			<span class="category-item">搜索结果</span>
			<span class="category-item"><i class="iconfont icon-jiantou-right"></i><span class="ecjia-green">"<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"</span></span>
		<?php } else { ?>
			<span class="category-item">所有分类</span>
			<span class="category-item"><i class="iconfont icon-jiantou-right"></i><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_id'];?>
"><span class="<?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['cat_info']->value['cat_id']) {?>ecjia-green<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'];?>
</span></a></span>
			<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['child_cat']) {?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_info']->value['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['c']->value['cat_id']) {?>
				<span class="category-item"><i class="iconfont icon-jiantou-right"></i><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
"><span class="<?php if (!$_smarty_tpl->tpl_vars['select_id']->value) {?>ecjia-green<?php }?>"><?php echo $_smarty_tpl->tpl_vars['c']->value['cat_name'];?>
</span></a></span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value['children']) {?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['c']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['select_id']->value==$_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>
					<span class="category-item"><i class="iconfont icon-jiantou-right"></i><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><span class="ecjia-green"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</span></a></span>
					<?php }?>
					<?php } ?>
				<?php }?>
				<?php } ?>
			<?php }?>
		<?php }?>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['keywords']->value) {?>
	<div class="goods-category ecjia-content category-list">
		<div class="category-item-list">
			<span class="category-item">分类：</span>
			<span class="category-item <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['cat_info']->value['cat_id']) {?>curr<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_id'];?>
">全部</a></span>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_info']->value['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<span class="category-item <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['val']->value['cat_id']) {?>curr<?php }?>">
				<a class="cat-ul" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</a>
			</span>
			<?php } ?>
		</div>
		<div class="sub-category">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_info']->value['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
			<div class="sub-cat" <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['val']->value['cat_id']) {?>style="display:block;"<?php }?>>
				<a class="cat-li <?php if ($_smarty_tpl->tpl_vars['select_id']->value==0) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
">全部</a>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<a class="cat-li <?php if ($_smarty_tpl->tpl_vars['select_id']->value!=0) {?><?php if ($_smarty_tpl->tpl_vars['select_id']->value==$_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>active<?php }?><?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
&select_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a>
				<?php } ?>
			</div>
			<?php }?>
			<?php } ?>
		</div>
	</div>
	<?php }?>
	
	<div class="ecjia-content goods-list">
		<div class="goods-list-left">
			<div class="f-line">
				<div class="f-sort">
               		<a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?>&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if ($_smarty_tpl->tpl_vars['select_id']->value) {?>&select_id=<?php echo $_smarty_tpl->tpl_vars['select_id']->value;?>
<?php }?><?php }?>&type=hot" class="<?php if ($_smarty_tpl->tpl_vars['type']->value=='hot'||(!$_smarty_tpl->tpl_vars['type']->value&&!$_smarty_tpl->tpl_vars['sort_by']->value)) {?>curr<?php }?>">热门推荐</a>
                	<a class="<?php if (!$_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['sort_by']->value=='sales_volume') {?>curr<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?>&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if ($_smarty_tpl->tpl_vars['select_id']->value) {?>&select_id=<?php echo $_smarty_tpl->tpl_vars['select_id']->value;?>
<?php }?><?php }?>&sort_by=sales_volume&sort_order=desc">
           				销量<i class="iconfont icon-jiantou-bottom"></i>
					</a>
                   	<a class="<?php if (!$_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['sort_by']->value=='shop_price') {?>curr<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?>&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if ($_smarty_tpl->tpl_vars['select_id']->value) {?>&select_id=<?php echo $_smarty_tpl->tpl_vars['select_id']->value;?>
<?php }?><?php }?>&sort_by=shop_price&sort_order=<?php if ($_smarty_tpl->tpl_vars['sort_order']->value=='desc') {?>asc<?php } else { ?>desc<?php }?>">
                   		价格<i class="iconfont <?php if ($_smarty_tpl->tpl_vars['sort_order']->value=='desc') {?>icon-jiantou-bottom<?php } else { ?>icon-jiantou-top<?php }?>"></i>
					</a>
				</div>
			</div>
			<div class="f-list">
				<?php if ($_smarty_tpl->tpl_vars['goods_list']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
					<div class="goods-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['goods_info_url']->value;?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_id'];?>
">
							<img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['goods_img']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['goods_img'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/default/default_goods.png<?php }?>" />
							<div class="goods-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['goods_name'];?>
</div>
							<div class="shop-name">
								<i class="icon-merchant"></i>
								<span class="name"><?php echo $_smarty_tpl->tpl_vars['val']->value['store_name'];?>
</span>								
							</div>
							<div class="item-list">
								<span class="goods-price"><?php if ($_smarty_tpl->tpl_vars['val']->value['unformatted_promote_price']!=0) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
<?php }?></span>
								<span class="view-detail">查看详情</span>
							</div>
						</a>
					</div>
					<?php } ?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

				<?php } else { ?>
				<p class="no_goods">很抱歉，没有找到相关的商品</p>
				<?php }?>
			</div>
		</div>
		<div class="goods-list-right">
			<div class="right-title">推荐商家</div>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="store-item">
				<a href="<?php echo RC_Uri::url('merchant/goods/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['store_id'];?>
">
					<img class="store-logo" src="<?php if ($_smarty_tpl->tpl_vars['val']->value['store_info']['shop_logo']) {?><?php echo RC_Upload::upload_url($_smarty_tpl->tpl_vars['val']->value['store_info']['shop_logo']);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default_store.png<?php }?>" />
					<div class="shop-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['store_info']['merchants_name'];?>
</div>
				</a>
				<div class="score-val" data-val="<?php echo $_smarty_tpl->tpl_vars['val']->value['comment_rank'];?>
"></div>
			
				<div class="info">
					<span class="orders-num">成功接单：<span class="ecjia-red"><?php echo $_smarty_tpl->tpl_vars['val']->value['order_amount'];?>
</span></span>
					<span class="praise-num">好评率：<span class="ecjia-red"><?php echo $_smarty_tpl->tpl_vars['val']->value['comment_percent'];?>
%</span></span>
				</div>
			</div>
			<?php }
if (!$_smarty_tpl->tpl_vars['val']->_loop) {
?>
			<p class="no_store">很抱歉，没有找到相关的商家</p>
			<?php } ?>
		</div>
	</div>
</div>
<?php } else { ?>
<div class="m_t80">
<?php /*  Call merged included template "library/no_content.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/no_content.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1d5077f3_75294520($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/no_content.lbi.php" */?>
</div>
<?php }?>

<?php /*  Call merged included template "library/page_footer.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_footer.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1d5a3c14_16251651($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_footer.lbi.php" */?>
<?php /*  Call merged included template "library/choose_city.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/choose_city.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1daa8fc6_40134815($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/choose_city.lbi.php" */?>
<?php /*  Call merged included template "library/nav.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/nav.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1dd2d8e6_79202575($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/nav.lbi.php" */?>

	</div>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/swiper/js/swiper.min.js"></script>
	 <script type="text/javascript">var theme_url = "<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
";</script>
	 
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.pc.raty.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.pc.koala.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.pc.js" ></script>
	
<script type="text/javascript">
	ecjia.pc.init();
</script>

</body>
</html>
<?php }?>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>


<?php /*  Call merged included template "library/page_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1c2d4be0_88144387($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_header.lbi.php" */?>

<?php if ($_smarty_tpl->tpl_vars['has_store']->value) {?>
<div class="ecjia-goods-list">
	<div class="goods-category ecjia-content">
		<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>
			<span class="category-item">搜索结果</span>
			<span class="category-item"><i class="iconfont icon-jiantou-right"></i><span class="ecjia-green">"<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"</span></span>
		<?php } else { ?>
			<span class="category-item">所有分类</span>
			<span class="category-item"><i class="iconfont icon-jiantou-right"></i><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_id'];?>
"><span class="<?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['cat_info']->value['cat_id']) {?>ecjia-green<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_name'];?>
</span></a></span>
			<?php if ($_smarty_tpl->tpl_vars['cat_info']->value['child_cat']) {?>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_info']->value['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['c']->value['cat_id']) {?>
				<span class="category-item"><i class="iconfont icon-jiantou-right"></i><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['cat_id'];?>
"><span class="<?php if (!$_smarty_tpl->tpl_vars['select_id']->value) {?>ecjia-green<?php }?>"><?php echo $_smarty_tpl->tpl_vars['c']->value['cat_name'];?>
</span></a></span>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value['children']) {?>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['c']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['select_id']->value==$_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>
					<span class="category-item"><i class="iconfont icon-jiantou-right"></i><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><span class="ecjia-green"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</span></a></span>
					<?php }?>
					<?php } ?>
				<?php }?>
				<?php } ?>
			<?php }?>
		<?php }?>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['keywords']->value) {?>
	<div class="goods-category ecjia-content category-list">
		<div class="category-item-list">
			<span class="category-item">分类：</span>
			<span class="category-item <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['cat_info']->value['cat_id']) {?>curr<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_info']->value['cat_id'];?>
">全部</a></span>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_info']->value['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<span class="category-item <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['val']->value['cat_id']) {?>curr<?php }?>">
				<a class="cat-ul" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</a>
			</span>
			<?php } ?>
		</div>
		<div class="sub-category">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_info']->value['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
			<div class="sub-cat" <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['val']->value['cat_id']) {?>style="display:block;"<?php }?>>
				<a class="cat-li <?php if ($_smarty_tpl->tpl_vars['select_id']->value==0) {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
">全部</a>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<a class="cat-li <?php if ($_smarty_tpl->tpl_vars['select_id']->value!=0) {?><?php if ($_smarty_tpl->tpl_vars['select_id']->value==$_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>active<?php }?><?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
&select_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a>
				<?php } ?>
			</div>
			<?php }?>
			<?php } ?>
		</div>
	</div>
	<?php }?>
	
	<div class="ecjia-content goods-list">
		<div class="goods-list-left">
			<div class="f-line">
				<div class="f-sort">
               		<a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?>&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if ($_smarty_tpl->tpl_vars['select_id']->value) {?>&select_id=<?php echo $_smarty_tpl->tpl_vars['select_id']->value;?>
<?php }?><?php }?>&type=hot" class="<?php if ($_smarty_tpl->tpl_vars['type']->value=='hot'||(!$_smarty_tpl->tpl_vars['type']->value&&!$_smarty_tpl->tpl_vars['sort_by']->value)) {?>curr<?php }?>">热门推荐</a>
                	<a class="<?php if (!$_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['sort_by']->value=='sales_volume') {?>curr<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?>&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if ($_smarty_tpl->tpl_vars['select_id']->value) {?>&select_id=<?php echo $_smarty_tpl->tpl_vars['select_id']->value;?>
<?php }?><?php }?>&sort_by=sales_volume&sort_order=desc">
           				销量<i class="iconfont icon-jiantou-bottom"></i>
					</a>
                   	<a class="<?php if (!$_smarty_tpl->tpl_vars['type']->value&&$_smarty_tpl->tpl_vars['sort_by']->value=='shop_price') {?>curr<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php } else { ?>&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
<?php if ($_smarty_tpl->tpl_vars['select_id']->value) {?>&select_id=<?php echo $_smarty_tpl->tpl_vars['select_id']->value;?>
<?php }?><?php }?>&sort_by=shop_price&sort_order=<?php if ($_smarty_tpl->tpl_vars['sort_order']->value=='desc') {?>asc<?php } else { ?>desc<?php }?>">
                   		价格<i class="iconfont <?php if ($_smarty_tpl->tpl_vars['sort_order']->value=='desc') {?>icon-jiantou-bottom<?php } else { ?>icon-jiantou-top<?php }?>"></i>
					</a>
				</div>
			</div>
			<div class="f-list">
				<?php if ($_smarty_tpl->tpl_vars['goods_list']->value) {?>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
					<div class="goods-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['goods_info_url']->value;?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_id'];?>
">
							<img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['goods_img']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['goods_img'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
/images/default/default_goods.png<?php }?>" />
							<div class="goods-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['goods_name'];?>
</div>
							<div class="shop-name">
								<i class="icon-merchant"></i>
								<span class="name"><?php echo $_smarty_tpl->tpl_vars['val']->value['store_name'];?>
</span>								
							</div>
							<div class="item-list">
								<span class="goods-price"><?php if ($_smarty_tpl->tpl_vars['val']->value['unformatted_promote_price']!=0) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
<?php }?></span>
								<span class="view-detail">查看详情</span>
							</div>
						</a>
					</div>
					<?php } ?>
					<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

				<?php } else { ?>
				<p class="no_goods">很抱歉，没有找到相关的商品</p>
				<?php }?>
			</div>
		</div>
		<div class="goods-list-right">
			<div class="right-title">推荐商家</div>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="store-item">
				<a href="<?php echo RC_Uri::url('merchant/goods/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['store_id'];?>
">
					<img class="store-logo" src="<?php if ($_smarty_tpl->tpl_vars['val']->value['store_info']['shop_logo']) {?><?php echo RC_Upload::upload_url($_smarty_tpl->tpl_vars['val']->value['store_info']['shop_logo']);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default_store.png<?php }?>" />
					<div class="shop-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['store_info']['merchants_name'];?>
</div>
				</a>
				<div class="score-val" data-val="<?php echo $_smarty_tpl->tpl_vars['val']->value['comment_rank'];?>
"></div>
			
				<div class="info">
					<span class="orders-num">成功接单：<span class="ecjia-red"><?php echo $_smarty_tpl->tpl_vars['val']->value['order_amount'];?>
</span></span>
					<span class="praise-num">好评率：<span class="ecjia-red"><?php echo $_smarty_tpl->tpl_vars['val']->value['comment_percent'];?>
%</span></span>
				</div>
			</div>
			<?php }
if (!$_smarty_tpl->tpl_vars['val']->_loop) {
?>
			<p class="no_store">很抱歉，没有找到相关的商家</p>
			<?php } ?>
		</div>
	</div>
</div>
<?php } else { ?>
<div class="m_t80">
<?php /*  Call merged included template "library/no_content.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/no_content.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1d5077f3_75294520($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/no_content.lbi.php" */?>
</div>
<?php }?>

<?php /*  Call merged included template "library/page_footer.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_footer.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1d5a3c14_16251651($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_footer.lbi.php" */?>
<?php /*  Call merged included template "library/choose_city.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/choose_city.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1daa8fc6_40134815($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/choose_city.lbi.php" */?>
<?php /*  Call merged included template "library/nav.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/nav.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1952597d6c1bdaa1d2-16871270');
content_597d6c1dd2d8e6_79202575($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/nav.lbi.php" */?>


<script type="text/javascript">
	ecjia.pc.init();
</script>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:18:20
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\page_header.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6c1c2d4be0_88144387')) {function content_597d6c1c2d4be0_88144387($_smarty_tpl) {?> 

<div class="ecjia-header fixed">
	<div class="ecjia-content">
		<div class="ecjia-fl ecjia-logo">
			<a href="<?php echo RC_Uri::home_url();?>
"><img class="wt-10" src="<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_logo']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['shop_logo'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/shop_logo.png<?php }?>"></a>
			<div class="select-location">
				<i class="icon-position"></i>
				<span class="current-position"><?php echo $_smarty_tpl->tpl_vars['info']->value['city_name'];?>
</span>
				<span class="choose-city">切换城市</span>
			</div>
		</div>
		<div class="ecjia-fl search" data-url="<?php echo RC_Uri::url('main/index/search');?>
">
			<input type="text" placeholder="搜索商品名称或商家" name="keywords" value="<?php echo $_GET['keywords'];?>
" autocomplete="off"/>
			<button class="button search-button" data-url="<?php echo RC_Uri::url('goods/index/init');?>
"><i class="iconfont"></i></button>
			<ul class="shelper"></ul>
		</div>
		<div class="ecjia-fr">
			<ul class="nav">
				<li <?php if ($_smarty_tpl->tpl_vars['active']->value=='main') {?>class="active"<?php }?>><a href="<?php echo RC_Uri::home_url();?>
">首页</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['active']->value=='category') {?>class="active"<?php }?>><a class="merchant-list" href="<?php echo RC_Uri::url('merchant/store/category');?>
">商家</a></li>
				<li><a class="nopjax" href="<?php echo RC_Uri::site_url('/sites/app/');?>
">下载APP</a></li>
				<li><a class="nopjax" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['merchant_url'];?>
" target="_blank">商家入驻</a></li>
				<li><a class="nopjax ecjia-back-green" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['merchant_login'];?>
" target="_blank">商家登录</a></li>
			</ul>
		</div>
	</div>
</div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:18:21
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\no_content.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6c1d5077f3_75294520')) {function content_597d6c1d5077f3_75294520($_smarty_tpl) {?>



<div class="ecjia-no-content">
	<div class="content">
		<div class="content-container">
			<div class="current-city">当前选择城市：<?php echo $_smarty_tpl->tpl_vars['info']->value['city_name'];?>
</div>
			<p>抱歉！您切换的城市暂时还没有店铺和商品。</p>
			<p>赶快来入驻吧</p>
			<a class="nopjax" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['merchant_url'];?>
" target="_blank"><span class="go_settled">去入驻</span></a>
			<p>或者您还可以<span class="choose-city">去其他城市看看哦</span></p>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:18:21
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\page_footer.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6c1d5a3c14_16251651')) {function content_597d6c1d5a3c14_16251651($_smarty_tpl) {?><div class="ecjia-page-footer">
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
		<?php if ($_smarty_tpl->tpl_vars['info']->value['region_list']) {?>
		<div class="hot-city">
			<div class="hot-city-left">热门城市</div>
			<div class="hot-city-right">
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['region_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<li class="position-li" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</li>
				<?php } ?>
			</div>
		</div>
		<?php }?>
	</div>
</div>

<div class="page-footer">
	<div class="outlink">
		<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_weibo_url']) {?>
        <span>
            <a class="blog-ico" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_weibo_url'];?>
" target="_blank"></a>
        </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode']) {?>
		<span class="outlink-qrcode">
            <div class="wechar-code">
				<img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode'];?>
">
				<span>打开微信扫一扫关注</span>
			</div>
			<a class="wechat" href="javascript:void(0)"></a>
		</span>
        <?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_info']) {?>
    <div class="footer-links">
        <p>
            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['shop_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
            <a class="nopjax" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
</a>
            <?php } ?>
        </p>
    </div>
    <?php }?>
    <p><?php if ($_smarty_tpl->tpl_vars['info']->value['company_name']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['company_name'];?>
 版权所有<?php }?> <?php if (ecjia::config('icp_number')) {?>&nbsp;&nbsp;<a href="http://www.miibeian.gov.cn" target="_blank"> <?php echo ecjia::config('icp_number');?>
</a><?php }?>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['powered'];?>
</p>
    <p><?php if ($_smarty_tpl->tpl_vars['info']->value['shop_address']) {?>地址：<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_address'];?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['info']->value['service_phone']) {?> 咨询热线：<?php echo $_smarty_tpl->tpl_vars['info']->value['service_phone'];?>
<?php }?></p>
</div>
<?php if (ecjia::config('stats_code')) {?>
	<?php echo stripslashes(ecjia::config('stats_code'));?>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:18:21
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\choose_city.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6c1daa8fc6_40134815')) {function content_597d6c1daa8fc6_40134815($_smarty_tpl) {?>




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
					<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'location_id\']) {?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

						<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'info\']->value[\'region_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

						<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'location_id\']==$_smarty_tpl->tpl_vars[\'val\']->value[\'id\']) {?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

							<li class="position-li <?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'city_id\']==$_smarty_tpl->tpl_vars[\'val\']->value[\'id\']) {?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
active<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php }?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
 location-position" data-id="<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
"><?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
</li>
						<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php }?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

						<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php } ?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

					<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php }?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

				</div>
			</div>
			<div class="content-bottom">
				<div class="title">热门城市</div>
				<div class="position-list">
					<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'info\']->value[\'region_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

					<li class="position-li <?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'city_id\']==$_smarty_tpl->tpl_vars[\'val\']->value[\'id\']) {?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
active<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php }?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
" data-id="<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
"><?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>
</li>
					<?php echo '/*%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/<?php } ?>/*/%%SmartyNocache:1952597d6c1bdaa1d2-16871270%%*/';?>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="choose-city-overlay"></div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:18:21
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\nav.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6c1dd2d8e6_79202575')) {function content_597d6c1dd2d8e6_79202575($_smarty_tpl) {?>



<div class="suspension">
	<div class="suspension-box">
		<?php if ($_smarty_tpl->tpl_vars['info']->value['kf_qq']!='') {?>
		<div class="suspension-box-item">
			<a id="webqq" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['info']->value['kf_qq'];?>
&site=<?php echo $_smarty_tpl->tpl_vars['info']->value['http_host'];?>
&menu=yes" target="_blank" class="qq j-icon a"><i>qq</i></a>
			<div class="tencent j-tencent j-box">
				<a id="webqqf" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['info']->value['kf_qq'];?>
&site=<?php echo $_smarty_tpl->tpl_vars['info']->value['http_host'];?>
&menu=yes" target="_blank">
				<i class="tencent-i">tencent</i>
				<b class="tencent-b"><span class="tencent-span"><img class="tencent-qq" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/nav/qq-tencent.png" alt=""></span></b>
				<p class="tencent-p">
					在线客服<br>
					点击交谈
				</p>
				</a>
			</div>
		</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['info']->value['service_phone']) {?>
		<div class="suspension-box-item">
			<a class="a tel j-icon"><i>tel</i></a>
			<div class="tel j-box">
				<strong>服务热线：</strong>
				<p><?php echo $_smarty_tpl->tpl_vars['info']->value['service_phone'];?>
</p>
				<i></i>
			</div>
		</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode']) {?>
		<div class="suspension-box-item">
			<a class="code j-icon a"><i>code</i></a>
			<div class="code j-box">
				<img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode'];?>
">
				<p>
					扫一扫，微信关注EC+到家
				</p>
				<i></i>
			</div>
		</div>
		<?php }?>
		<a class="back_top j-back-top a"><i>back_top</i></a>
	</div>
</div><?php }} ?>
