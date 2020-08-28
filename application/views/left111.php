<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <?php
        $CI=&get_instance();
        $CI->load->model('cmenu_model');
        $menu_f_list = $CI->cmenu_model->get_order_f_list();
        $menu_s_list = $CI->cmenu_model->get_order_s_list();
//        var_dump($menu_f_list);
//        echo "<br/>";
//        echo "<br/>";
//        echo "<br/>";
//        var_dump($menu_s_list);
//        die();
        ?>
        <?php foreach ($menu_f_list as $item_f): ?>
            <?php if ($item_f['pid'] == 0): ?>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="<?=$item_f['url']?>" aria-expanded="false" aria-controls="auth">
<!--                        <i class="mdi mdi-circle-outline menu-icon"></i>-->
                        <span class="menu-title"><?=$item_f['name']?></span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <?php foreach ($menu_s_list as $item_s): ?>
                            <?php if ($item_s['pid'] == $item_f['id']): ?>
                            <li class="nav-item"> <a class="nav-link" href="<?=$item_s['url']?>"><?=$item_s['name']?></a></li>
                            <?php endif; ?>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
        <?php endforeach;?>


        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">接口文档2</span>
            </a>
        </li>
    </ul>
</nav>