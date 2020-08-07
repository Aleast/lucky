<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="static/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="static/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="static/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="static/images/favicon.png" />
  <script type="text/javascript" src="static/js/jquery.min.js"></script>
    <script src="static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="static/js/xadmin.js"></script>
    <script type="text/javascript" src="static/js/cookie.js"></script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="static/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3 layui-form" >
                <div class="form-group">
                  <input name="username" type="text" lay-verify="required" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" >
                </div>
                <div class="form-group">
                  <input name="password" type="password" lay-verify="required"  class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                <input value="登录" lay-submit lay-filter="login" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" />
                </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="static/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="static/js/off-canvas.js"></script>
  <script src="static/js/hoverable-collapse.js"></script>
  <script src="static/js/template.js"></script>
  <!-- endinject -->
</body>

<script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              // layer.msg('玩命卖萌中', function(){
              //   //关闭后的操作
              //   });
              //监听提交
              form.on('submit(login)', function(data){
              //   console.warn("Data:"+data.field);
               var param=JSON.stringify(data.field);
             //console.log(param);
              var strObj = eval("(" + param + ")");

             //console.log(strObj);
             // var dataString = {"username":param.username,"password":param.password};
              //console.log(dataString);
            //{"username":param.username,"password":param.password}
           
                $.ajax({
                        url:"/login/gotoc",
                        type:'get',//method请求方式，get或者post
                        dataType:'json',//预期服务器返回的数据类型
                        data:strObj,//表格数据序列化
                        contentType: "application/json; charset=utf-8",
                    success:function(data){//res为相应体,function为回调函数
                        
                         //return false;
                        if(data.status=="true"){
                            location.href='/main'
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



                /*
                layer.msg(JSON.stringify(data.field),function(){
                    console.log();
                    location.href='/main'
                });
                 //*/
                return false;
              });
            });
        })

        
    </script>

</html>
