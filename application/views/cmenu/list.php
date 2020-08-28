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
                    <p class="text-primary mb-0 hover-cursor">菜单管理</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <!-- <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button> -->
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0" onclick="x_admin_show('新增','/cmenu/add?>',600,400)">
                        <i class="mdi mdi-plus text-muted"></i>
                    </button>

                  <!-- <button class="btn btn-primary mt-2 mt-xl-0">Download report</button> -->
                </div>
              </div>
            </div>
          </div>
      
      <div class="row">
            
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">菜单管理</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>菜单名称</th>
                          <th>菜单链接</th>
                          <th>上级菜单</th>
                          <!-- <th>状态</th> -->
                          
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($list_fname as $item): ?>
                        <tr>
                          <td><?=$item['id']?></td>
                          <td><?=$item['name']?></td>
                          
                          <td> <?=$item['url']?></td>
                          <td> <?php if(empty($item['pname'])){ echo" 无"; }else{ echo $item['pname']; }?></td>
                         <td>
                             <label class="badge badge-info" onclick="x_admin_show('编辑','/cmenu/edit?id=<?=$item['id']?>',600,400)">编辑</label>
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


      /*用户-删除*/
      function member_del(obj,id){
          
          layer.confirm('确认要删除吗？',function(index){
        	  strObj={"dellist":id}
              //发异步删除数据
                 $.ajax({
                        url:"/cmenu/delall",
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

    </script>
</html>