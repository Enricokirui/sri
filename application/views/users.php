
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small><button type="button" href="<?php echo site_url("welcome/addnews");?>" class="btn btn-block btn-primary btn-xs">Add New</button></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
            <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Username</th>
                  <th>Names</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>EnricoKirui</td>
                  <td>Enrico Kirui</td>
                  <td>Enricokirui@gmail.com</td>
                  <td><span class="label label-success">Admin</span></td>
                  <td>
                    <button type="button" href="<?php echo site_url("welcome/editusers");?>" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Edit</button>
                    <button type="button" href="<?php echo site_url("welcome/editusers");?>" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Delete</button>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    </div>