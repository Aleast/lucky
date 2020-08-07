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
    <div class="x-nav">
      <span class="layui-breadcrumb">
        <a>
          <cite>类别管理</cite></a>
      </span>
      <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新">
        <i class="layui-icon" style="line-height:30px">ဂ</i></a>
    </div>
    <div class="x-body">
        <!--<div class="layui-row">
        <form class="layui-form layui-col-md12 x-so">
         <input class="layui-input"  autocomplete="off" placeholder="开始日" name="start" id="start">
          <input class="layui-input"  autocomplete="off" placeholder="截止日" name="end" id="end">
          <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
          <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
        </form>
      </div> -->
      <xblock>
<!--        <button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>-->
<!--        <button class="layui-btn" onclick="x_admin_show('添加','/addbuy/add',600,400)"><i class="layui-icon"></i>添加</button>-->
       <!-- <span class="x-right" style="line-height:40px">共有数据：88 条</span>  -->
      </xblock>
      <table class="layui-table x-admin">
        <thead>
          <tr>
<!--            <th>-->
<!--              <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>-->
<!--            </th>-->
			  <th>ID</th>
			  <th>名称</th>
			  <th>数量</th>
			  <th>价格</th>
			  <th>地区</th>
			  <th>时间</th>
        <th>用户</th>
			  <th>操作</th>
			  <th>状态</th>
		  </tr>
        </thead>
        <tbody>



		<?php foreach ($list as $item): ?>

          <tr>
<!--            <td>-->
<!--              <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='--><?//=$item['id']?><!--'><i class="layui-icon">&#xe605;</i></div>-->
<!--            </td>-->

            <td><?= @$i=$i+1 ?></td>
            <td><?=$item['name']?></td>
              <td><?=$item['volume']?></td>

<!--              <td>--><?//=$item['type']?><!--</td>-->
<!--              <td>--><?//=$item['hot']?><!--</td>-->
            <td><?=$item['price']?></td>
			  <td><?=$item['area']?></td>
			  <td><?=$item['addtime']?></td>

        <td><?=$item['username']?></td>

            <td class="td-manage">


				<span onclick="x_admin_show('编辑','/addbuy/edit?id=<?=$item['id']?>',600,400)" class="layui-btn layui-btn-normal layui-btn-mini"  >
					编辑</span>



				<button type="button" onclick="member_del(this,<?=$item['id']?>)" class="layui-btn layui-btn-sm layui-btn-normal" ><i class="layui-icon"></i> 删除</button>



			</td>
			  <td class="td-status">

				  <?php if ($item['is_use'] === '0'): ?>

					  <span class="layui-btn layui-btn-normal layui-btn-mini" onclick="stop(this,<?=$item['uid']?>)">禁用用户</span>

				  <?php elseif ($item['is_use'] === '1'): ?>

					  <span class="layui-btn layui-btn-normal layui-btn-disabled" onclick="stop(this,<?=$item['uid']?>)">启用用户</span>

				  <?php else: ?>

					  <span class="layui-btn layui-btn-normal layui-btn-mini" >未知</span>

				  <?php endif; ?>






			  </td>
          </tr>


 <?php endforeach;?>

     
        </tbody>
      </table>
    <!--   <div class="page">
        <div>
          <a class="prev" href="">&lt;&lt;</a>
          <a class="num" href="">1</a>
          <span class="current">2</span>
          <a class="num" href="">3</a>
          <a class="num" href="">489</a>
          <a class="next" href="">&gt;&gt;</a>
        </div>
      </div>-->
      <div id="pages"></div>
    </div>
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
		/*用户-停用*/
		function stop(obj,id){
			layer.confirm('确认要操作吗？',function(index){

				//var strObj = eval("(" + {"id":id} + ")");
				var strObj={"id":id}

				//console.log(strObj);
				$.ajax({
					url:"/wxuser/setuse",
					type:'get',//method请求方式，get或者post
					dataType:'json',//预期服务器返回的数据类型
					data:strObj,//表格数据序列化
					contentType: "application/json; charset=utf-8",
					success:function(data){//res为相应体,function为回调函数


						if(data.status=="true"){

							if($(obj).html()=='启用用户'){



								$(obj).parents("tr").find(".td-status").find('span').addClass('layui-btn-disabled').html('禁用用户');
								layer.msg('已停用!',{icon: 5,time:1000});

							}else{


								$(obj).parents("tr").find(".td-status").find('span').removeClass('layui-btn-disabled').html('启用用户');
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
      function member_stop(obj,id){
          layer.confirm('确认要停用吗？',function(index){
              
        	  strObj={"list":id}
        	  $.ajax({
                  url:"/addbuy/setuse",
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
                        url:"/addbuy/delall",
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
                        url:"/addbuy/delall",
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
  
  </body>

</html>
