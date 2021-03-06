<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:126:"F:\xampp-win32-5.6.3-0-VC11-installerroot\xammp\htdocs\www\www.public.devp\public/../application/backend\view\fan\fan_add.html";i:1545209363;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport"
	content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico">
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/lib/html5shiv.js"></script>
<script type="text/javascript" src="/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css"
	href="/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css"
	href="/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css"
	href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css"
	href="/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css"
	href="/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>添加粉丝数据</title>
<meta name="keywords"
	content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description"
	content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
	<article class="page-container">
		<form action="" method="post" class="form form-horizontal"
			id="form-fan-add">
			<div class="row cl">
				<label class="form-label col-xs-3 col-sm-3"><span
					class="c-red">*</span>公众号：</label>
				<div class="formControls col-xs-4 col-sm-9">
					<span class="select-box"> <select class="select" size="1"
						name="vipcn_id" id="vipcn_id">							
							<option value="0">请选择</option>
							<?php if(is_array($vipcn_list) || $vipcn_list instanceof \think\Collection || $vipcn_list instanceof \think\Paginator): $i = 0; $__LIST__ = $vipcn_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<option value="<?php echo $vo['vipcn_id']; ?>-<?php echo $vo['name']; ?>-<?php echo $vo['type']; ?>" <?php if($info['vipcn_id'] == $vo['vipcn_id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
							<?php endforeach; endif; else: echo "" ;endif; ?>				
					</select>
					</span>
				</div>
			</div>	
			<div class="row cl">
				<label class="form-label col-xs-3 col-sm-3"><span
					class="c-red">*</span>总粉丝数量：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="<?php echo $info['total_fan_num']; ?>"
						placeholder="请输入总粉丝数量" id="total_fan_num" name="total_fan_num">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-3 col-sm-3"><span
					class="c-red">*</span>今日新增：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="<?php echo $info['today_new_num']; ?>"
						placeholder="请输入今日新增数量" id="today_new_num" name="today_new_num">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-3 col-sm-3"><span
					class="c-red">*</span>今日删除：</label>
				<div class="formControls col-xs-8 col-sm-9">
					<input type="text" class="input-text" value="<?php echo $info['today_delete_num']; ?>"
						placeholder="请输入今日删除数量" id="today_delete_num" name="today_delete_num">
				</div>
			</div>
			<div class="row cl">
				<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
					<input class="btn btn-primary radius" type="submit"
						value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				</div>
			</div>
			<input type="hidden" id="id" name="id" value="<?php echo $info['id']; ?>" />
			<input type="hidden" id="status" name="status" value="<?php echo $info['status']; ?>" />
		</form>
	</article>

	<!--_footer 作为公共模版分离出去-->
	<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>
	<script type="text/javascript" src="/static/h-ui/js/H-ui.min.js"></script>
	<script type="text/javascript"
		src="/static/h-ui.admin/js/H-ui.admin.js"></script>
	<!--/_footer 作为公共模版分离出去-->

	<!--请在下方写此页面业务相关的脚本-->
	<script type="text/javascript"
		src="/lib/My97DatePicker/4.8/WdatePicker.js"></script>
	<script type="text/javascript"
		src="/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
	<script type="text/javascript"
		src="/lib/jquery.validation/1.14.0/validate-methods.js"></script>
	<script type="text/javascript"
		src="/lib/jquery.validation/1.14.0/messages_zh.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.skin-minimal input').iCheck({
				checkboxClass : 'icheckbox-blue',
				radioClass : 'iradio-blue',
				increaseArea : '20%'
			});
			//validation rules
			$("#form-fan-add").validate({
				debug : false,
				rules : {
					total_fan_num : {
						required : true,
					},
					today_new_num : {
						required : true,
					},
					today_delete_num : {
						required : true,
					},
				},
				messages : {
					total_fan_num : {
						required : "请填写总粉丝数量",
					},
					today_new_num : {
						required : "请填写今日新增数量",
					},
					today_delete_num : {
						required : "请填写今日删除数量",
					},
				},
				onkeyup : false,
				focusCleanup : true,
				success : 'valid',
			});
			//submit form
			$('#form-fan-add').on(
					'submit',
					function() {
						if ($('#vipcn_id').val() == 0) {
							layer.msg('请选择所属公众号!');
							return false;
						}
						if (!$('#total_fan_num').val() || !$('#today_new_num').val()|| !$('#today_delete_num').val()) {
							return false;
						}						
						var options = {
							url : "<?php echo url('fan/fan_submit'); ?>",
							dataType : "json",
							type : "post",
							clearForm : true,
							resetForm : true,
							timeout : 3000,
							success : ResponseAfterSuccess,
							error : function() {
								alert('error!');
							},
						};
						$('#form-fan-add').ajaxSubmit(options);
					});
		});
		//form submit callback
		function ResponseAfterSuccess(data) {
			if (data == 1) {
				var index = parent.layer.getFrameIndex(window.name);
				parent.$('.btn-refresh').click();
				parent.layer.close(index);
			} else {
				layer.msg('提交失败!', {
					icon : 5,
					time : 1000
				});
			}
		}
	</script>
	<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>