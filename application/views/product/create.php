  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin/index') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('admin/product') ?>">Product List</a></li>
        <li class="active">Create Product</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Form Create Product</h3><br><br>
              <?php if($this->session->flashdata('warning')){ ?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fa fa-check"></i>  <?= $this->session->flashdata('warning'); ?>              
                </div>              
              <?php } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="<?= base_url('admin/store_product') ?>">                              
                <div class="form-group">
                  <label>Nama Product</label>
                  <input type="text" class="form-control" name="product_name" placeholder="Enter ..." required>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="number" min="0" class="form-control" name="price" placeholder="Enter ..." required>
                </div>                   
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="6" name="description"> </textarea>
                </div>                                                                                                                                                       
                <br>
                <button type="submit" class="btn btn-success">Save</button>
                <a href="<?php echo base_url('admin/product') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->    