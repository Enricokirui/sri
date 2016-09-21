
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Abstracts
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file-pdf-o"></i>Abstracts</a></li>
        <li class="active">View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
         <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
            <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Abstracts</h3>

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
                  <th>Title</th>
                  <th>Researcher/Scholar</th>
                  <th>Date Uploaded</th>                  
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <td>JKUAT</td>
                  <td>John Doe</td>
                  <td>21/12/2121</td>
                  <td><span class="label label-success">Delivered</span></td>
                  <td>
                    <a href="<?php echo base_url("admin/readabstracts");?>" class="btn btn-info btn-xs" role="button">Read/Review</a>
                    <a href="<?php echo base_url("admin/rejectabstracts");?>" class="btn btn-danger btn-xs" role="button">Reject</a>
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