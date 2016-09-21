
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Call to Action
        <small><a href="<?php echo base_url("admin/callaction");?>" class="btn btn-info btn-xs" role="button">Add New</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Call to Action</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Add Call to Action</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                 <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter title">
                </div>
                <!-- texteditor -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="editor2" name="editor1" rows="10" cols="80"></textarea>
                </div>
              <!-- Date -->
                <div class="form-group">
                  <label>Date:</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- link -->
                  <div class="form-group">
                  <label>Link</label>
                  <input type="text" class="form-control" placeholder="Enter Link">
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    </div>
