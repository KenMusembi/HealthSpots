@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('adminlte_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@stop
@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
          </div>
          <div class="box-body">
            <table id="laravel_datatable" class="table table-bordered table-striped table-sm" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Keph_level</th>
                  <th>Facility_type</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->Name }}</td>
                    <td>{{ $user->Keph_level }}</td>
                    <td>{{ $user->Facility_type }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
@stop


@section('js')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

<script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable(
      'paging'      : true,
'lengthChange': false,
'searching'   : true, // change this one
'ordering'    : true,
'info'        : true,
'autoWidth'   : false
    );
  });
</script>
@stop
