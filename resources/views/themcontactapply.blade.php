@extends('master')
@section('content')

    <!-- Main content -->
    <section class="container">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <br /><br /><br /><br />
            <div class="card card-primary">
             
              <form action="themcontactapply" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    {{-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> --}}
                    <input style="width: 100%;" type="text" pattern=".{3,}" title="Enter at least 3 character" class="form-control" name="c_name" required="required" placeholder="Display name" tabindex="1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input tabindex="1" type="email"  name="c_email" placeholder="Email" class="form-control" required="required" value="">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  @endsection