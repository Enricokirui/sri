
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <small><a href="<?php echo base_url("admin/addusers");?>" class="btn btn-info btn-xs" role="button">Add New</a></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i>Users</a></li>
        <li class="active">View</li>
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
                    <a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#myModal">Edit</a>
                    <a href="<?php echo base_url("admin/deletenews");?>" class="btn btn-danger btn-xs" role="button">Delete</a>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Modal -->
         <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit User</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">First Name</label>
                  <input type="sname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <!-- select -->
                <div class="form-group">
                  <label>Role</label>
                  <select class="form-control">
                    <option>Admin</option>
                    <option>User</option>
                    <option>Student</option>
                  </select>
                </div>

              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-info">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 

      </div>
    </div>
  </section>
  </div>