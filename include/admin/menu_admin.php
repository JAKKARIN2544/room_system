<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>OK</span>
    <!-- logo for regular state and mobile devices -->

    <span class="logo-lg"><b>BOOKING.COM</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="../src/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">super admin</span>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../src/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <p>
                super admin
                <small>Level : admin</small>
                <small>Member ID : MB05243</small>
              </p>
            </li>
            <!-- Menu Body -->

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">ข้อมูลส่วนตัว</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat bg-red">ออกจากระบบ</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->

<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../src/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header text-black"><i class="header-main">MAIN</i> (หน้าหลัก)</li>

      <li><a href="../admin/index_admin.php"><i class="fa fa-dashboard"></i> <span>dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>รายการจอง</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="#">
              <i class="fa fa-circle-o text-green"></i> <span class="text-green">จองแล้ว</span> <small class="label pull-right bg-green">20 รายการ</small>
            </a>
          </li>
          <li>
              <a href="#">
                <i class="fa fa-circle-o text-yellow"></i> <span class="text-yellow">รออนุมัติ</span> <small class="label pull-right bg-yellow">10 รายการ</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-red"></i> <span class="text-red">ยกเลิกจอง</span> <small class="label pull-right bg-red">5 รายการ</small>
              </a>
            </li>
        </ul>
      </li>
      <li class="header text-black"><i class="header-main">MANAGEMENT</i> (การจัดการ)</li>
      <li><a href="#"><i class="fa fa-home"></i> <span>จัดการ ห้องประชุม</span></a></li>
      <li><a href="#"><i class="fa fa-user"></i> <span>จัดการ พนักงาน</span></a></li>
      <li><a href="#"><i class="fa fa-users"></i> <span>จัดการ ผู้ใช้งาน</span></a></li>
      <li class="header text-black"><i class="header-main">REPORT</i> (รายงาน)</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>รายงาน</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o text-red"></i> ChartJS</a></li>
          <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o text-red"></i> Morris</a></li>
          <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o text-red"></i> Flot</a></li>
          <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o text-red"></i> Inline charts</a></li>
        </ul>
      </li>
  </section>
  <!-- /.sidebar -->
</aside>