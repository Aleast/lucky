<!DOCTYPE html>
<html class="x-admin-sm">
  
  <head>
    <meta charset="UTF-8">
    <title>欢迎页面</title>
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
          <label for="M_name" class="layui-form-label">
              权限名称:
          </label>
          <div class="layui-input-inline">
                <input type="text"  name="name" autocomplete="off"  class="layui-input" value=''>
          </div>
          <?php foreach ($menu as $item): ?>
              <div class="layui-form-item">
                  <label for="M_name" class="layui-form-label">
                      <?=$item['name']?>:
                  </label>
                  <input type="hidden" name="M_id[]" value="<?=$item['id']?>">
                  <div class="layui-input-block">
                      <?php $role = str_split($item['role'])?>
                      <input type="checkbox" name="M_menu[]" value="<?=$role['0']?>"
                          <?php if ($role['0'] === "1"): ?>
                              checked="checked"
                          <?php endif; ?>
                      /> 添加
                      <input type="checkbox" name="M_menu[]" value="<?=$role['1']?>"
                          <?php if ($role['1'] === "1"): ?>
                              checked="checked"
                          <?php endif; ?>
                      /> 删除
                      <input type="checkbox" name="M_menu[]" value="<?=$role['2']?>"
                          <?php if ($role['2'] === "1"): ?>
                              checked="checked"
                          <?php endif; ?>
                      /> 修改
                      <input type="checkbox" name="M_menu[]" value="<?=$role['3']?>"
                          <?php if ($role['3'] === "1"): ?>
                              checked="checked"
                          <?php endif; ?>
                      /> 查看
                  </div>
              </div>
          <?php endforeach;?>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  修改
              </button>
          </div>
      </form>
  </div>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          // form.verify({
          //   nikename: function(value){
          //     if(value.length < 4){
          //       return '昵称至少得4个字符啊';
          //     }
          //   }
          //   ,pass: [/(.+){6,12}$/, '密码必须6到12位']
          //   ,repass: function(value){
          //       if($('#L_pass').val()!=$('#L_repass').val()){
          //           return '两次密码不一致';
          //       }
          //   }
          // });

          //监听提交
          form.on('submit(add)', function(data){
        	  var param=JSON.stringify(data.field);
        	  console.log(param);
        	  var strObj = eval("(" + param + ")");

              

        	  $.ajax({
                  url:"/role/addone",
                  type:'get',//method请求方式，get或者post
                  dataType:'json',//预期服务器返回的数据类型
                  data:strObj,//表格数据序列化
                  contentType: "application/json; charset=utf-8",
              success:function(data){//res为相应体,function为回调函数
                  
                   //return false;
                  if(data.status=="true"){

                	//发异步，把数据提交给php
                      layer.alert("操作成功", {icon: 6},function () {
                          //关闭当前frame
                          x_admin_close();

                          // 可以对父窗口进行刷新 
                          x_admin_father_reload();
                      });

                      
                      //location.href='/main'
                      //layer.alert(data.msg,{icon: 5});
                      //$("#res").click();//调用重置按钮将表单数据清空
                  }else{
                       layer.alert(data.status,{icon: 5});
                  }
              },
              error:function(){
                  layer.alert('操作失败！！！',{icon:5});
              }
       });
              
            
            return false;
          });
          
          
        });
    </script>
   
  </body>

</html>