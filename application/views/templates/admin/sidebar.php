  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>tmp/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment(2) == 'index') {echo 'active';} ?>">
          <a href="<?php echo base_url('admin/index') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(2) == 'cust_order') {echo 'active';} ?>">
          <a href="<?php echo base_url('admin/cust_order') ?>">
            <i class="fa fa-files-o"></i>
            <span>Customers Order</span>            
          </a>         
        </li>
        <li class="<?php if($this->uri->segment(2) == 'supp_order') {echo 'active';} ?>">
          <a href="<?php echo base_url('admin/supp_order') ?>">
            <i class="fa fa-files-o"></i>
            <span>Suppliers Order</span>            
          </a>         
        </li>        
        <li class="header">MASTER DATA</li>      
        <li class="<?php if($this->uri->segment(2) == 'product') {echo 'active';} ?>">
          <a href="<?php echo base_url('admin/product') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Products</span>
          </a>
        </li>         
        <li class="<?php if($this->uri->segment(2) == 'komposisi') {echo 'active';} ?>">
          <a href="<?php echo base_url('admin/komposisi') ?>">
            <i class="fa fa-pie-chart"></i>
            <span>Komposisi</span>      
          </a>
        </li>       
        <li class="header">SYSTEM CONFIGURATON</li>        
        <li class="<?php if($this->uri->segment(2) == 'user') {echo 'treeview active';} else {echo 'treeview';} ?>">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>System</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(2) == 'user') {echo 'active';} ?>"><a href="<?php echo base_url('admin/user') ?>"><i class="fa fa-circle-o"></i> Users</a></li>
          </ul>
        </li>      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
