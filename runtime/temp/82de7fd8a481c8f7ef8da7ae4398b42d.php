<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:129:"F:\xampp-win32-5.6.3-0-VC11-installerroot\xammp\htdocs\www\www.public.devp\public/../application/backend\view\test\test_list.html";i:1545043306;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/lib/html5shiv.js"></script>
<script type="text/javascript" src="/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>测试管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 
    测试管理 <span class="c-gray en">&gt;</span> 测试列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <form action="<?php echo url('test/test_list'); ?>" method="post"> 
	<div class="text-c"> 
	     日期范围：
		<input type="text" onfocus="selecttime(1)" name="datemin" id="datemin" value="<?php echo $filter['datemin']; ?>" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="selecttime(2)" name="datemax" id="datemax" value="<?php echo $filter['datemax']; ?>" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入标题、内容" id="keywords" name="keywords" value="<?php echo $filter['keywords']; ?>">
		<button type="submit" class="btn btn-success radius" id="search" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
	              <span class="l">
	                <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
	                <a href="javascript:;" onclick="test_add('添加测试','<?php echo url('test/test_add'); ?>','700','350')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加测试</a>
	                </span>
	                <span class="r">共有数据：<strong><?php echo (isset($filter['total']) && ($filter['total'] !== '')?$filter['total']:0); ?></strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="250">标题</th>
				<th width="400">内容</th>				
				<th width="150">创建时间</th>
				<th width="150">状态</th>			
				<th width="300">操作</th>
			</tr>
		</thead>
		<tbody>
          <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<tr class="text-c"> 
				<td><input type="checkbox" name="checkbox" value="<?php echo $vo['id']; ?>"/></td>
				<td><?php echo $vo['id']; ?></td>
				<td><u style="cursor:pointer" class="text-primary" onclick="test_show('张三','<?php echo url('test/test_show'); ?>','<?php echo $vo['title']; ?>','850','500')"><?php echo $vo['title']; ?></u></td>
				<td><?php echo $vo['content']; ?></td>				
				<td><?php echo $vo['create_time']; ?></td>
				<td class="td-status">
                <?php if($vo['status']==1): ?>
				     <span class="label label-success radius">已启用</span>
                 <?php else: ?>
				    <span class="label label-defaunt radius">已停用</span>
				 <?php endif; ?>
				</td>
				<td class="td-manage">
				        <?php if($vo['status']==-1): ?>
				        <a style="text-decoration:none" onClick="test_start(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe631;</i></a>
				        <?php else: ?>
				        <a style="text-decoration:none" onClick="test_stop(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>
				         <?php endif; ?>
				        <a title="编辑" href="javascript:;" onclick="test_edit('编辑','<?php echo url('test/test_add'); ?>','<?php echo $vo['id']; ?>','700','350')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> 				          
				        <a title="删除" href="javascript:;" onclick="test_del(this,'<?php echo $vo['id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
				</td>
			</tr>
	       <?php endforeach; endif; else: echo "" ;endif; ?> 	
		</tbody>
	</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,2,3,4,5,6]}// 制定列不参与排序
		]
	});
	
});
/*测试-添加*/
function test_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*测试-查看*/
function test_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*测试-停用*/
function test_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo url("test/switch_state"); ?>',
			dataType: 'json',
			data:{"id":id,"status":-1},
			success: function(data){
				if(data==1){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="test_start(this,'+id+')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
					$(obj).remove();
					layer.msg('已停用!',{icon: 5,time:1000});
				}else{
					layer.msg('停用失败!',{icon: 5,time:1000});
				}				
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
/*测试-启用*/
function test_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo url("test/switch_state"); ?>',
			dataType: 'json',
			data:{"id":id,"status":1},
			success: function(data){					
				if(data==1){
					$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="test_stop(this,'+id+')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
					$(obj).remove();
					layer.msg('已启用!',{icon: 6,time:1000});
				}else{
					layer.msg('启用失败!',{icon: 5,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}
/*测试-编辑*/
function test_edit(title,url,id,w,h){
	var url = url +'?id='+id;
	layer_show(title,url,w,h);
}
/*测试-删除*/
function test_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '<?php echo url("test/test_del"); ?>',
			dataType: 'json',
			data:{"ids":id},
			success: function(data){
				if(data==1){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}else{
					layer.msg('删除失败!',{icon: 5,time:1000});
				}
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}
/*测试-批量删除*/
 function datadel(){
	var ids = [];
	 $.each($('input[name=checkbox]:checked'),function(){
		 ids.push($(this).val());
     });
	 if(!ids.join(',')){
		 layer.msg('请勾选操作项!');return false;
	 }
	 layer.confirm('确认要批量删除吗？',function(index){
			$.ajax({
				type: 'POST',
				url: '<?php echo url("test/test_del"); ?>',
				dataType: 'json',
				data:{"ids":ids.join(',')},
				success: function(data){
					if(data==1){						
						layer.msg('已删除!',{icon:1,time:1000});
						location.reload();
					}else{
						layer.msg('删除失败!',{icon: 5,time:1000});
					}
				},
				error:function(data) {
					console.log(data.msg);
				},
			});		
		});
}
/* 关于日期插件My97 DatePicker与Think php模版标签冲突的解决方法*/
function selecttime(flag){
    if(flag==1){
        var endTime = $("#datemin").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }else{
        var startTime = $("#datemax").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }
 }
</script> 
</body>
</html>