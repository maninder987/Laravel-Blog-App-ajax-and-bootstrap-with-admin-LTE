@extends('layouts.admin')


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header" align='center'>
      <h1>
        Welcome To Dashboard <?php echo ucfirst(Auth::user()->name); ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <!-- Main content -->
      <section class="content">
        <div class="callout callout-info">
          <h4>Tip!</h4>

          <p>Use sidebar menu to add and edit content in this dashboard.</p>
            <button type="button" class='btn btn-info' name="button">Add Your First Post</button>
        </div>
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            Start creating your amazing application!
          </div>
          <!-- /.box-body -->

          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->

@endsection
