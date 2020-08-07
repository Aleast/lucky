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
                <span class="x-red">*</span>名称
            </label>
            <div class="layui-input-inline">
                <input type="text" id="L_name" name="name" required="" lay-verify="name"
                       autocomplete="off" class="layui-input" value='<?=$info->name?>' >
            </div>

        </div>

        <div class="layui-form-item">
            <label for="L_username" class="layui-form-label">
                <span class="x-red">*</span>数量
            </label>
            <div class="layui-input-inline">
                <input type="text" id="L_volume" name="volume" required="" lay-verify="volume"
                       autocomplete="off" class="layui-input" value='<?=$info->volume?>'>
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
                <span class="x-red">*</span>地区
            </label>
            <div class="layui-input-inline">
                <input type="text" id="L_area" name="area" required="" lay-verify="area"
                       autocomplete="off" class="layui-input" value='<?=$info->area?>'>
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
    layui.use(['form','layer'], function(){
        $ = layui.jquery;
        var form = layui.form
            ,layer = layui.layer;


        //监听提交
        form.on('submit(add)', function(data){


            var param=JSON.stringify(data.field);
            console.log(param);
            var strObj = eval("(" + param + ")");
            $.ajax({
                url:"/addchu/update",
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







            return false;
        });


    });
</script>

</body>

</html>
