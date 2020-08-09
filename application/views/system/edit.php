<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/static/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/static/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/static/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/static/images/favicon.png" />
  <script type="text/javascript" src="/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/xadmin.js"></script>
    <script type="text/javascript" src="/static/js/cookie.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:/static/partials/_navbar.html -->
    <?php @$this->load->view("top");?>


    <div class="container-fluid page-body-wrapper">
      <!-- partial:/static/partials/_sidebar.html -->
      <?php @$this->load->view("left");?>

      <!-- partial -->
      <div class="main-panel">
      <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;系统设置&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">系统设置</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <!-- <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button> -->
                  <!-- <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0" onclick="x_admin_show('新增','/user/add?>',600,400)">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button> -->
                  <!-- <button class="btn btn-primary mt-2 mt-xl-0">Download report</button> -->
                </div>
              </div>
            </div>
          </div>
      <div class="row">
            
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">系统设置</h4>
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                  <form class="forms-sample layui-form">
                    <div class="form-group">
                      <label for="exampleInputName1">系统公告</label>
                      <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="系统公告" value='<?=$info->name?>' >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">发帖间隔</label>
                      <input type="text" class="form-control" name="step" id="exampleInputEmail3" placeholder="发帖间隔" value='<?=$info->step?>' >
                    </div>
                    
                    <div class="form-group">
                      <label>Logo</label>
                      <div class="item-thumbnail">
                        <img src="../static/images/logo.svg" alt="image" class="profile-pic">
                        <input type="hidden" name="logo" value="<?=$info->logo?>" id="simg">
                      </div>
                    </div>
                    
                      <div class="form-group">
                        
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>

                    <!-- <div class="form-group">
                      <label>logo</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                    
                      <div class="layui-upload">
                      <input type="file" name="pic" id="test20">
                      <div class="layui-upload-list">
                        <img class="layui-upload-img" width="150" height="150" id="demo1" src="<?=$info->logo?>">
                        <p id="demoText"></p>
                        <input type="hidden" name="logo" value="<?=$info->logo?>" id="simg">
                      </div>
                    </div>
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
                   
                   
                    <button type="submit" class="btn btn-primary mr-2"  lay-filter="add" lay-submit="">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
        <!-- partial:/static/partials/_footer.html -->
        <?php @$this->load->view("footer");?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  

    <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/static/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/static/js/off-canvas.js"></script>
  <script src="/static/js/hoverable-collapse.js"></script>
  <script src="/static/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/static/js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

<script>
		layui.use('upload', function(){
			var $ = layui.jquery
					,upload = layui.upload;
			//绑定原始文件域
			var uploadInst =upload.render({
				elem: '#test20'
				,enctype:'multipart/form-data'
				,url: '/system/upload' //改成您自己的上传接口
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

        //监听提交
        form.on('submit(add)', function(data){
		var param=JSON.stringify(data.field);

         // console.log(param);
          var strObj = eval("(" + param + ")");
          $.ajax({
              url:"/system/update",
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
                  layer.alert("操作成功", {icon: 6});
            	  // layer.alert("操作成功", {icon: 6},function () {
                //       // 获得frame索引
                //       var index = parent.layer.getFrameIndex(window.name);
                //       //关闭当前frame
                //       parent.layer.close(index);
                //   });
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
</html>
