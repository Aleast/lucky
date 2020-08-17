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
  <link rel="stylesheet" href="/static/css/xadmin.css">

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
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;系统管理&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">管理员信息</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <!-- <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button> -->

                  <?php if($_SESSION['is_manager']==1){?>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0" onclick="x_admin_show('新增','/manager/add?>',600,400)">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <?php }?>

                  <!-- <button class="btn btn-primary mt-2 mt-xl-0">Download report</button> -->
                </div>
              </div>
            </div>
          </div>
      
      <div class="row">
            
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">管理员信息</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>用户名</th>
                          <th>昵称</th>
                         
                          <th>加入时间</th>
                          <th>注册链接</th>
                          <th>所属部门</th>
                          <th>查看范围</th>
                          <th>状态</th>
                          
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($list as $item): ?>
                        <tr>
                          <td><?=$item['id']?></td>
                          <td><?=$item['username']?></td>
                          <td><?=$item['nickname']?></td>

                         
                          <td> <?=$item['addtime']?></td>
                          <td> https://www.lucky-shop.in/?/mobile/user/register&invite_code=<?=$item['id']?></td>
                          <td><?=$item['deptname']?></td>
                          <td><?php if ($item['is_manager'] === '1'): ?>部门<?php else: ?>个人<?php endif; ?></td>
                          
                          <td> 
                          <?php if($_SESSION['is_manager']==1 && $item['id']!=$_SESSION['mid']){?>
                          
                          
                          <?php if ($item['is_use'] === '0'): ?>

                            <label class="badge badge-danger" onclick="stop(this,<?=$item['id']?>)">已停用</label>

<?php elseif ($item['is_use'] === '1'): ?>

  <label class="badge badge-success" onclick="stop(this,<?=$item['id']?>)">已启用</label>

<?php else: ?>
  <label class="badge badge-danger" >未知</label>

<?php endif; ?>

<?php }else{?>

--
<?php }?>
</td>


<td>
<label class="badge badge-success" onclick="x_admin_show('修改密码','/manager/cpass?id=<?=$item['id']?>',600,400)">修改密码</label>

<?php if($_SESSION['is_manager']==1 && $item['id']!=$_SESSION['mid']){?>

  <label class="badge badge-info" onclick="x_admin_show('编辑','/manager/edit?id=<?=$item['id']?>',600,400)">编辑</label>

              <label class="badge badge-warning" onclick="member_del(this,<?=$item['id']?>)">删除</label>
<?php }?>

            </td>
                        </tr>
 <?php endforeach;?>           
                        
                      </tbody>
                    </table>
                    <div id="pages"></div>
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
 
 layui.use(['laypage', 'layer'], function(){
   var laypage = layui.laypage
       ,layer = layui.layer;

   //只显示上一页、下一页
   //完整功能
   laypage.render({
 elem: 'pages'
 ,count: <?=$total_rows?>

 ,curr: function(){
   var page = <?=$_GET['pages']?>; // 当前页(后台获取到的)
   return page ? page : 1; // 返回当前页码值
 }()
 ,limit:function(){
   var lim = <?=$_GET['limit']?>; // 当前页(后台获取到的)
   return lim ? lim : 10; // 返回当前页码值
 }()
 ,layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
 ,jump: function(obj,first){
   currentPage = obj.curr; 
   if(!first){
     
     location.href = '?pages='+obj.curr+'&limit='+obj.limit;
     
   }
 }
});
});
</script>
    <script>
      layui.use('laydate', function(){
        var laydate = layui.laydate;
        
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });

        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

       /*用户-停用*/
      function stop(obj,id){
          layer.confirm('确认要操作吗？',function(index){

			  //var strObj = eval("(" + {"id":id} + ")");
			  var strObj={"id":id}

			  console.log(strObj);
        	  $.ajax({
                  url:"/manager/setuse",
                  type:'get',//method请求方式，get或者post
                  dataType:'json',//预期服务器返回的数据类型
                  data:strObj,//表格数据序列化
                  contentType: "application/json; charset=utf-8",
              success:function(data){//res为相应体,function为回调函数
                  
                   
                  if(data.status=="true"){
                  	 	
                	  if($(obj).html()=='已启用'){

                        

                          $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('停用');
                         // layer.msg('已停用!',{icon: 5,time:1000});

                        }else{
                       

                          $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('启用');
                         // layer.msg('已启用!',{icon: 5,time:1000});
                        }
                      location.reload();
                	  
                   
                  }else{
                       layer.alert(data.status,{icon: 5});
                  }
              },
              error:function(){

                  layer.alert('操作失败！！！',{icon:5});
              }
       });


              
              


              
              
          });
      }

      /*用户-删除*/
      function member_del(obj,id){
          
          layer.confirm('确认要删除吗？',function(index){
        	  strObj={"dellist":id}
              //发异步删除数据
                 $.ajax({
                        url:"/manager/delall",
                        type:'get',//method请求方式，get或者post
                        dataType:'json',//预期服务器返回的数据类型
                        data:strObj,//表格数据序列化
                        contentType: "application/json; charset=utf-8",
                    success:function(data){//res为相应体,function为回调函数
                        
                         //return false;
                        if(data.status=="true"){
                        	  $(obj).parents("tr").remove();
                              layer.msg(id+'已删除!',{icon:1,time:1000});
                         
                        }else{
                             layer.alert(data.status,{icon: 5});
                        }
                    },
                    error:function(){
                        layer.alert('操作失败！！！',{icon:5});
                    }
             });
            
              
          });
      }



      function delAll (argument) {

        var data = tableCheck.getData();
        strObj={"dellist":data}
        
        layer.confirm('确认要删除吗？'+data,function(index){
            //捉到所有被选中的，发异步进行删除
            
             $.ajax({
                        url:"/manager/delall",
                        type:'get',//method请求方式，get或者post
                        dataType:'json',//预期服务器返回的数据类型
                        data:strObj,//表格数据序列化
                        contentType: "application/json; charset=utf-8",
                    success:function(data){//res为相应体,function为回调函数
                        
                         //return false;
                        if(data.status=="true"){
                        	 layer.msg('删除成功', {icon: 1});
                             $(".layui-form-checked").not('.header').parents('tr').remove();
                         
                        }else{
                             layer.alert(data.status,{icon: 5});
                        }
                    },
                    error:function(){
                        layer.alert('操作失败！！！',{icon:5});
                    }
             });
            
            
           



            
        });
      }
    </script>
</html>