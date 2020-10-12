@extends('adminlte::page')
@section('title', 'Users | Lara Admin')
@section('adminlte_css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
@stop

@section('content_header')
    <h1>Users</h1>
@stop

  @section('content')
  <body class="hold-transition layout-top-nav">
<h1>HealthSpots Kenya</h1>

<p>Level 6 Hospitals</p>
              @foreach($users as $user)
              @if ($user->Keph_level == 'Level 6')
    <div class="card" style="width: 26rem;">

      <!--  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/15.jpg" alt="Card image cap"> -->
      <div class="card-body">
    <h5 class="card-title">{{$user->Name}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{$user->Keph_level}} Hospital</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">See More</a>
  </div>
    </div>
    &nbsp&nbsp
@endif
    @endforeach


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
  
