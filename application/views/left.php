<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/main">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">客户管理</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="/rl?pages=1&limit=10">客户信息</a></li>
            <!-- <li class="nav-item"> <a class="nav-link" href="/member?pages=1&limit=10">管理员信息</a></li> -->
          
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-circle-outline menu-icon"></i>
          <span class="menu-title">系统管理</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
          <!-- <li class="nav-item"> <a class="nav-link" href="/user?pages=1&limit=10">客户信息</a></li> -->
            <li class="nav-item"> <a class="nav-link" href="/manager?pages=1&limit=10">管理员信息</a></li>
            <li class="nav-item"> <a class="nav-link" href="/dept">部门管理</a></li>
          
          </ul>
        </div>
      </li>
      
      <!-- <li class="nav-item">
        <a class="nav-link" href="/wxuser?pages=1&limit=10">
          <i class="mdi mdi-view-headline menu-icon"></i>
          <span class="menu-title">会员信息</span>
        </a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="/static/pages/charts/chartjs.html">
          <i class="mdi mdi-chart-pie menu-icon"></i>
          <span class="menu-title">Charts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/static/pages/tables/basic-table.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Tables</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/static/pages/icons/mdi.html">
          <i class="mdi mdi-emoticon menu-icon"></i>
          <span class="menu-title">Icons</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="mdi mdi-account menu-icon"></i>
          <span class="menu-title">系统设置</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/system/index"> 系统设置 </a></li>
            <li class="nav-item"> <a class="nav-link" href="/message?pages=1&limit=10"> 消息列表 </a></li>
            <!-- <li class="nav-item"> <a class="nav-link" href="/static/pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="/static/pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="/static/pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul> -->
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">接口文档</span>
        </a>
      </li>
    </ul>
  </nav>