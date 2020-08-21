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
            <div class="layui-form-item">
                <label for="L_cphone" class="layui-form-label">
                    <span class="x-red">*</span>电话
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_cphone" name="cphone" required="" lay-verify="cphone"
                    autocomplete="off" class="layui-input">
                </div>
            </div>
        
            <div class="layui-form-item">
                <label for="L_cid" class="layui-form-label">
                    <span class="x-red">*</span>商城ID
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_cid" name="cid" required="" lay-verify="cid"
                    autocomplete="off" class="layui-input">
                </div>
                <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>请输入客户在商城系统内的ID，可为空
              </div>
             
            </div>  
          <div class="layui-form-item">
              <label for="L_mid" class="layui-form-label">
                  <span class="x-red">*</span>归属员工
              </label>
              <div class="layui-input-inline">
                  <!-- <input type="text" id="L_mid" name="mid" required="" lay-verify="mid"
                  autocomplete="off" class="layui-input"> -->

                  <select name="mid" id="L_mid" lay-verify="required" lay-search class="layui-input">
                        <option value="">请选择客户归属</option>
                        
                        <?php foreach ($mids as $item): ?>
                        <option value="<?=$item['id']?>"><?=$item['username']?></option>
                        <?php endforeach;?>  
                      
                  </select>

              </div>
              
             
          </div>
         
           <!-- <div class="layui-form-item">
              <label for="L_email" class="layui-form-label">
                  <span class="x-red">*</span>邮箱
              </label>
              <div class="layui-input-inline">
                  <input type="text" id="L_email" name="email" required="" lay-verify="email"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  <span class="x-red">*</span>将会成为您唯一的登入名
              </div>
          </div>
          
          <div class="layui-form-item">
              <label for="L_pass" class="layui-form-label">
                  <span class="x-red">*</span>密码
              </label>
              <div class="layui-input-inline">
                  <input type="password" id="L_pass" name="pass" required="" lay-verify="pass"
                  autocomplete="off" class="layui-input">
              </div>
              <div class="layui-form-mid layui-word-aux">
                  6到16个字符
              </div>
          </div>
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
                  <span class="x-red">*</span>确认密码
              </label>
              <div class="layui-input-inline">
                  <input type="password" id="L_repass" name="repass" required="" lay-verify="repass"
                  autocomplete="off" class="layui-input">
              </div>
          </div> -->
          <div class="layui-form-item">
              <label for="L_repass" class="layui-form-label">
              </label>
              <button  class="layui-btn" lay-filter="add" lay-submit="">
                  增加
              </button>
          </div>
      </form>
    </div>
    <script>
        layui.use(['form','layer'], function(){
            $ = layui.jquery;
          var form = layui.form
          ,layer = layui.layer;
        
          //自定义验证规则
          form.verify({
            nikename: function(value){
              if(value.length < 4){
                return '昵称至少得4个字符啊';
              }
            }
            ,pass: [/(.+){6,12}$/, '密码必须6到12位']
            ,repass: function(value){
                if($('#L_pass').val()!=$('#L_repass').val()){
                    return '两次密码不一致';
                }
            }
          });

          //监听提交
          form.on('submit(add)', function(data){
        	  var param=JSON.stringify(data.field);
        	  console.log(param);
        	  var strObj = eval("(" + param + ")");

              

        	  $.ajax({
                  url:"/rl/addone",
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