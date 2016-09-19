
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News & Events
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit News & Events</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 		  <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Events & News</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>

                <!-- textarea -->
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="editor2" name="editor1" rows="10" cols="80"></textarea>
                </div>

                <!-- radio -->
                <div class="form-group">
                <label>Categories</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      News
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Events
                    </label>
                  </div>
                </div>

                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
    </div>