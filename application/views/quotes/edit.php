<!DOCTYPE html>
<html class="x-admin-sm">
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.1</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="/static/css/font.css">
    <link rel="stylesheet" href="/static/css/xadmin.css">
    <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/xadmin.js"></script>
    <script type="text/javascript" src="/static/js/cookie.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
    <div class="x-body">
        <form class="layui-form">
			<div class="layui-form-item">
				<label for="L_email" class="layui-form-label">
					<span class="x-red">*</span>图片
				</label>
				<div class="layui-input-inline">

					<div class="layui-upload">
						<input type="file" name="pic" id="test20">
						<div class="layui-upload-list">
							<img class="layui-upload-img" width="150" height="150" id="demo1" src="<?=$info->img?>">
							<p id="demoText"></p>
							<input type="hidden" name="img" value="<?=$info->img?>" id="simg">
						</div>
					</div>
				</div>

			</div>

			<div class="layui-form-item">
				<label for="L_username" class="layui-form-label">
					<span class="x-red">*</span>年份
				</label>
				<div class="layui-input-inline">
					<input type="text" id="L_year" name="year" required="" lay-verify="year"
						   autocomplete="off" class="layui-input" value='<?=$info->year?>'  placeholder="yyyy">
				</div>
			</div>

          <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>名称
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_name" name="name" required="" lay-verify="name"
                  autocomplete="off" class="layui-input" value='<?=$info->name?>' >
              </div>

          </div>
			<div class="layui-form-item">
				<label for="L_username" class="layui-form-label">
					<span class="x-red">*</span>类别
				</label>
				<div class="layui-input-inline">
					<select name="classid">

						<?php foreach ($list as $item): ?>


							<?php if ($info->classid == $item['id']): ?>

								<option value="<?=$item['id']?>" selected><?=$item['name']?></option>
							<?php else: ?>

								<option value="<?=$item['id']?>" ><?=$item['name']?></option>



							<?php endif; ?>




						<?php endforeach;?>
					</select>
				</div>

			</div>
          <div class="layui-form-item">
              <label for="L_username" class="layui-form-label">
                  <span class="x-red">*</span>价格
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_price" name="price" required="" lay-verify="price"
                  autocomplete="off" class="layui-input" value='<?=$info->price?>'>
              </div>
          </div>
			<div class="layui-form-item">
				<label for="L_username" class="layui-form-label">
					<span class="x-red">*</span>规格
				</label>
				<div class="layui-input-inline">
					<input type="text" id="L_volume" name="volume" required="" lay-verify="volume"
						   autocomplete="off" class="layui-input" value='<?=$info->volume?>'>
				</div>
			</div>

			<div class="layui-form-item">
				<label for="L_username" class="layui-form-label">
					<span class="x-red">*</span>排序
				</label>
				<div class="layui-input-inline">
					<input type="text" id="L_sort" name="sort" required="" lay-verify="sort"
						   autocomplete="off" class="layui-input" value='<?=$info->sort?>'>
				</div>
			</div>





			<div class="layui-form-item">
              <input type="hidden" name="id" value="<?=$info->id?>">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  修改
              </button>
          </div>
      </form>
    </div>
	<script>
		layui.use('laydate', function(){
			var laydate = layui.laydate;

			//常规用法
			laydate.render({
				elem: '#L_year'
				,type: 'year'
			});
		});
	</script>
	<script>
		layui.use('upload', function(){
			var $ = layui.jquery
					,upload = layui.upload;


			//绑定原始文件域
			var uploadInst =upload.render({
				elem: '#test20'
				,enctype:'multipart/form-data'
				,url: '/quotes/upload' //改成您自己的上传接口
				,before: function(obj){
					//预读本地文件示例，不支持ie8
					obj.preview(function(index, file, result){
						$('#demo1').attr('src', result); //图片链接（base64）
					});
				}
				,done: function(res){
					layer.msg('上传成功');
					$("#simg").val(res.data.src);
					console.log(res.data.src)
				}
				,error: function(){
					//演示失败状态，并实现重传
					var demoText = $('#demoText');
					demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
					demoText.find('.demo-reload').on('click', function(){
						uploadInst.upload();
					});
				}
			});


		});
	</script>

	<script>
      layui.use(['form','layer'], function(){
          $ = layui.jquery;
        var form = layui.form
        ,layer = layui.layer;
      
        //自定义验证规则
        /*
        form.verify({
          nikename: function(value){
            if(value.length < 5){
              return '昵称至少得5个字符啊';
            }
          }
          ,pass: [/(.+){6,12}$/, '密码必须6到12位']
          ,repass: function(value){
              if($('#L_pass').val()!=$('#L_repass').val()){
                  return '两次密码不一致';
              }
          }
        });
        //*/

        //监听提交
        form.on('submit(add)', function(data){
         

          var param=JSON.stringify(data.field);
          console.log(param);
          var strObj = eval("(" + param + ")");
          $.ajax({
              url:"/quotes/update",
              type:'get',//method请求方式，get或者post
              dataType:'json',//预期服务器返回的数据类型
              data:strObj,//表格数据序列化
              contentType: "application/json; charset=utf-8",
          success:function(data){//res为相应体,function为回调函数
              
               //return false;
              if(data.status=="true"){
                  //location.href='/main'
                  //layer.alert(data.msg,{icon: 5});
                  //$("#res").click();//调用重置按钮将表单数据清空

            	  layer.alert("操作成功", {icon: 6},function () {
                      // 获得frame索引
                      var index = parent.layer.getFrameIndex(window.name);
                      //关闭当前frame
                      parent.layer.close(index);
                      // 可以对父窗口进行刷新
                      x_admin_father_reload();
                  });
              }else{
                   layer.alert(data.status,{icon: 5});
              }
          },
          error:function(){
              layer.alert('操作失败！！！',{icon:5});
          }
  		 });


          /*
          //发异步，把数据提交给php
          layer.alert("增加成功", {icon: 6},function () {
              // 获得frame索引
              var index = parent.layer.getFrameIndex(window.name);
              //关闭当前frame
              parent.layer.close(index);
          });

          //*/



          
          return false;
        });
        
        
      });
  </script>
   
  </body>

</html>
