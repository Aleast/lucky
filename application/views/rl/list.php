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
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;客户管理&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">客户信息</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <!-- <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button> -->
                  <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0" onclick="x_admin_show('新增','/rl/add?>',600,400)">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0" onclick="exportData();">导出数据</button>
                </div>
              </div>
            </div>
          </div>
      <div class="row">
            
      <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">


                    <!-- <h4 class="card-title">客户信息</h4> -->
                    <!-- <form class="layui-form" id="filterZone" action="">

                    <div class="layui-form-item">
                      <div class="layui-inline">

                        <div class="layui-input-inline">
                          <select lay-verify="required" lay-search="">
                            <option value="0">商城ID</option>

                          </select>
                        </div>
                      </div>
                      <div class="layui-inline">
                        <div class="layui-input-inline">
                          <input type="text" name="cid" value=" <?=$_GET['cid']?>" autocomplete="off" class="layui-input">
                        </div>
                      </div>
                      <div class="layui-inline">
                      <button type="button" class="btn btn-light bg-white btn-icon" onclick="filterZoneSubmit()">
                      <i class="mdi mdi-account-search text-muted"></i>
                      </button>
                    </div>
                    </div>
                  </form> -->

                    <div id="simple-query">
                        <!-- <h1>简单查询</h1> -->
                        <div id="msg"></div>

                        <!-- <div>请求参数json：</div>
                        <div id="result1" style="word-break:break-all;height:60px;width:500px;padding-left:50px;"></div> -->
                    </div>
                    <script type="text/html" id="selectSex">
                        <select>
                            <option value=""></option>
                            <option value="1">男</option>
                            <option value="0">女</option>
                        </select>
                    </script>




                    <!--                  <h4 class="card-title">客户信息</h4>-->
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>

                          <th>电话</th>
                          <th>商城ID</th>
                          <th>归属员工</th>
                          <th>员工昵称</th>
                          <th>归属部门</th>
                          <th>创建时间</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>

                      <?php foreach ($list as $item): ?>
                        <tr>
                          <td><?=$item['id']?></td>

                          <td><?=$item['cphone']?></td>
                          <td><?=$item['cid']?></td>
                          <td>
                          <?php if ($item['m_is_del'] == '0'): ?>
                            <?=$item['username']?>
                          <?php else: ?>
                            未分配
                          <?php endif; ?>
                          </td>
                          <td>
                          <?php if ($item['m_is_del'] == '0'): ?>
                            <?=$item['nickname']?>
                          <?php else: ?>
                            未分配
                          <?php endif; ?>
                          </td>
                          <td><?=$item['deptname']?></td>


                          <td><?=date("Y-m-d H:i:s",$item['addtime'])?></td>
                         
                   


<td>
              <label class="badge badge-info" onclick="x_admin_show('编辑','/rl/edit?id=<?=$item['id']?>',600,400)">编辑</label>

              <!-- <label class="badge badge-success" onclick="x_admin_show('修改密码','/rl/cpass?id=<?=$item['id']?>',600,400)">修改密码</label> -->

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
 
 // layui.use(['laypage', 'layer'], function(){
 //   var laypage = layui.laypage
 //       ,layer = layui.layer;
 layui.config({
     base: '/static/lib/layui/lay/modules/' //设定扩展的Layui模块的所在目录，一般用于外部模块扩展
 }).extend({
     dynamicCondition: 'dynamicCondition/dynamicCondition'
 }).use(['laypage', 'layer','dynamicCondition'], function(){
     var laypage = layui.laypage
         ,layer = layui.layer,dynamicCondition = layui.dynamicCondition;
     var dataFields = [{field:"cid",title:"商城ID",edit:"text",layVerify:"number"}
         ,{field:"username",title:"归属员工",edit:"text"}
         ,{field:"deptname",title:"归属部门",edit:"text"}
         //  ,{field:"dept",title:"性别",edit:"select", templet:"#selectSex"}
         //  ,{field:"birthday",title:"出生日期",edit:"date"}
         ,{field:"cphone",title:"手机号码",edit:"text"}
         // ,{field:"email",title:"邮箱",layVerify:"email"}
     ];
     //初始化动态条件查询实例
     var dcInstance = dynamicCondition.create({fields : dataFields //通过json对象传入
         //,tableId:"listTable"  //静态页面不好演示table数据表格更新
         ,type:"simple"  //type:"simple"/"complex"
         ,conditionTextId:"#msg"
         ,extendBtns:function(btnDivJq, instance){  //扩展添加按钮
             btnDivJq.append($('<a class="layui-btn " href="/rl?pages=1&limit=10">重置</a>'));
         }
         ,popupBtnsWidth: 350
         ,popupShowQueryBtn: true
         ,unpopupBtnswidth: 410
         ,unpopupShowAddBtn: true
         ,queryCallBack:function(requestData){
             filterZoneSubmit(requestData);
             // $("#result1").html(JSON.stringify(requestData));
         }
     });
     <?php
     $get = $_GET;
     unset($get['pages']);
     unset($get['limit']);
     $condition='';
     if(empty($get)){
         $condition = '["cid",null,""]';
     }else{
         foreach($get as $k =>$v){
             $condition = $condition?$condition.',["'.$k.'",null,"'.$v.'"]':'["'.$k.'",null,"'.$v.'"]';
         }
     }
     // var_dump($get);
     ?>
     dcInstance.setCondition([<?=$condition?>]);
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
                        url:"/rl/delall",
                        type:'get',//method请求方式，get或者post
                        dataType:'json',//预期服务器返回的数据类型
                        data:strObj,//表格数据序列化
                        contentType: "application/json; charset=utf-8",
                    success:function(data){//res为相应体,function为回调函数
                        
                         //return false;
                        if(data.status=="true"){
                        	  $(obj).parents("tr").remove();
                              layer.msg('ID:'+id+'客户已删除!',{icon:1,time:1000});
                         
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
                        url:"/rl/delall",
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

      function exportData () {
        var data = tableCheck.getData();
        strObj={"dellist":data}
        console.log(strObj);
        if(data==""){
          layer.confirm('没有选中任何数据，是否导出全部数据？',function(index){
            window.location.href= "/rl/exportdata";
          });
        }else{
          layer.confirm('是否导出选中的数据？',function(index){
            window.location.href= "/rl/exportdata"+"?ids = aaa";
          });
        }
      }
      function filterZoneSubmit(t){

          var params = getParams(window.location.href);

          // console.log(params);
          var suburl = window.location.protocol+"//"+window.location.host+window.location.port+window.location.pathname;
          var desurl = "";
          // console.log(suburl);
          // return false;

          if(params.limit!==undefined){
              t["limit"] = params.limit;
          }
          if(params.pages!==undefined){
              t["pages"] = params.pages;
          }
          console.log(t);
          var d = "";
          $.each(t, function(i,v) {
              if(d==""){
                  d +=i+"="+v;
              }else{
                  d +="&"+i+"="+v;
              }

          });
          desurl = suburl + "?" + d;


          console.log(desurl);
          window.location.href = desurl;


      }

      function getParams(url){
          var params = {};
          if(url.indexOf("?")===-1){
              return "";
          }
          var urls = url.split("?");
          var arr = urls[1].split("&");
          for (var i = 0, l = arr.length; i < l; i++) {
              var a = arr[i].split("=");
              params[a[0]] = a[1];
          }
          return params;
      }
    </script>
</html>