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
            
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">会员管理</h4>
                  <p class="card-description">
                    Add class <code>.table</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>用户名</th>
                          <th>邮箱</th>
                          <th>加入时间</th>
                          <th>状态</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($list as $item): ?>
                        <tr>
                          <td><?= @$i=$i+1 ?></td>
                          <td><?=$item['username']?></td>
                          <td><?=$item['email']?></td>
                          <td> <?=$item['addtime']?></td>
                         
                          <td> <?php if ($item['is_use'] === '0'): ?>

                            <label class="badge badge-danger" onclick="stop(this,<?=$item['id']?>)">停用</label>

<?php elseif ($item['is_use'] === '1'): ?>

  <label class="badge badge-danger" onclick="stop(this,<?=$item['id']?>)">启用</label>

<?php else: ?>
  <label class="badge badge-danger" >未知</label>

<?php endif; ?>
</td>


<td>
              <label class="badge badge-info" onclick="x_admin_show('编辑','/member/edit?id=<?=$item['id']?>',600,400)">编辑</label>

              <label class="badge badge-success" onclick="x_admin_show('修改密码','/member/cpass?id=<?=$item['id']?>',600,400)">修改密码</label>

              <label class="badge badge-warning" onclick="member_del(this,<?=$item['id']?>)">删除</label>


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
                  url:"/member/setuse",
                  type:'get',//method请求方式，get或者post
                  dataType:'json',//预期服务器返回的数据类型
                  data:strObj,//表格数据序列化
                  contentType: "application/json; charset=utf-8",
              success:function(data){//res为相应体,function为回调函数
                  
                   
                  if(data.status=="true"){
                  	 	
                	  if($(obj).html()=='启用'){

                        

                          $(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('停用');
                          layer.msg('已停用!',{icon: 5,time:1000});

                        }else{
                       

                          $(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('启用');
                          layer.msg('已启用!',{icon: 5,time:1000});
                        }

                	  
                   
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
                        url:"/member/delall",
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
                        url:"/member/delall",
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