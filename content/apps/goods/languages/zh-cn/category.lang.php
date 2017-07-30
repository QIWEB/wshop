<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');

/**
 * ECJIA 商品分类管理语言文件
 */
/* 商品分类字段信息 */
$LANG['cat_id'] = '编号';
$LANG['cat_name'] = '分类名称';
$LANG['isleaf'] = '不允许';
$LANG['noleaf'] = '允许';
$LANG['keywords'] = '关键字';
$LANG['cat_desc'] = '分类描述';
$LANG['parent_id'] = '上级分类';
$LANG['sort_order'] = '排序';
$LANG['measure_unit'] = '数量单位';
$LANG['delete_info'] = '删除选中';
$LANG['category_edit'] = '编辑商品分类';
$LANG['move_goods'] = '转移商品';
$LANG['cat_top'] = '顶级分类';
$LANG['show_in_nav'] = '是否显示在导航栏';
$LANG['cat_style'] = '分类的样式表文件';
$LANG['is_show'] = '是否显示';
$LANG['show_in_index'] = '设置为首页推荐';
$LANG['notice_show_in_index'] = '该设置可以在首页的最新、热门、推荐处显示该分类下的推荐商品';
$LANG['goods_number'] = '商品数量';
$LANG['grade'] = '价格区间个数';
$LANG['notice_grade'] = '该选项表示该分类下商品最低价与最高价之间的划分的等级个数，填0表示不做分级，最多不能超过10个。';
$LANG['short_grade'] = '价格分级';

$LANG['nav'] = '导航栏';
$LANG['index_new'] = '最新';
$LANG['index_best'] = '精品';
$LANG['index_hot'] = '热门';

$LANG['back_list'] = '返回分类列表';
$LANG['continue_add'] = '继续添加分类';

$LANG['notice_style'] = '您可以为每一个商品分类指定一个样式表文件。例如文件存放在 themes 目录下则输入：themes/style.css';

/* 操作提示信息 */
$LANG['catname_empty'] = '分类名称不能为空!';
$LANG['catname_exist'] = '已存在相同的分类名称!';
$LANG["parent_isleaf"] = '所选分类不能是末级分类!';
$LANG["cat_isleaf"] = '不是末级分类或者此分类下还存在有商品,您不能删除!';
$LANG["cat_noleaf"] = '底下还有其它子分类,不能修改为末级分类!';
$LANG["is_leaf_error"] = '所选择的上级分类不能是当前分类或者当前分类的下级分类!';
$LANG['grade_error'] = '价格分级数量只能是0-10之内的整数';

$LANG['catadd_succed'] = '新商品分类添加成功!';
$LANG['catedit_succed'] = '商品分类编辑成功!';
$LANG['catdrop_succed'] = '商品分类删除成功!';
$LANG['catremove_succed'] = '商品分类转移成功!';
$LANG['move_cat_success'] = '转移商品分类已成功完成!';

$LANG['cat_move_desc'] = '什么是转移商品分类?';
$LANG['select_source_cat'] = '选择要转移的分类';
$LANG['select_target_cat'] = '选择目标分类';
$LANG['source_cat'] = '从此分类';
$LANG['target_cat'] = '转移到';
$LANG['start_move_cat'] = '开始转移';
$LANG['cat_move_notic'] = '在添加商品或者在商品管理中,如果需要对商品的分类进行变更,那么你可以通过此功能,正确管理你的商品分类。';

$LANG['cat_move_empty'] = '你没有正确选择商品分类!';

$LANG['sel_goods_type'] = '请选择商品类型';
$LANG['sel_filter_attr'] = '请选择筛选属性';
$LANG['filter_attr'] = '筛选属性';
$LANG['filter_attr_notic'] = '筛选属性可在前分类页面筛选商品';
$LANG['filter_attr_not_repeated'] = '筛选属性不可重复';

/*JS 语言项*/
$LANG['js_languages']['catname_empty'] = '分类名称不能为空!';
$LANG['js_languages']['unit_empyt'] = '数量单位不能为空!';
$LANG['js_languages']['is_leafcat'] = '您选定的分类是一个末级分类。\r\n新分类的上级分类不能是一个末级分类';
$LANG['js_languages']['not_leafcat'] = '您选定的分类不是一个末级分类。\r\n商品的分类转移只能在末级分类之间才可以操作。';
$LANG['js_languages']['filter_attr_not_repeated'] = '筛选属性不可重复';
$LANG['js_languages']['filter_attr_not_selected'] = '请选择筛选属性';

// end