<!DOCTYPE html>
<html>
<head>
    <title>Hospitals Kenya</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>Hospitals Kenya</strong></h3>
                </div>
            </div>
            <table class="table table-bordered table-striped data-table hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th>Name</th>
                        <th>Keph_level</th>
                        <th>Facility_type</th>
                        <th>Owner</th>
                        <th>County</th>
                        <th>Beds</th>
                        <th>Cots</th>
                        <th>Open 24Hrs</th>
                        <th>Open Weekends</th>
                        <th>Open on Holidays</th>
                        <th>Open Late Night</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('hospitals.getBasicData') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'Name', name: 'Name'},
            {data: 'Keph_level', name: 'Keph_level'},
              {data: 'Facility_type', name: 'Facility_type'},
                {data: 'Owner_type', name: 'Owner'},
                {data: 'County', name: 'County'},
                {data: 'Beds', name: 'Beds'},
                {data: 'Cots', name: 'Cots'},
                {data: 'Open_whole_day', name: 'Open 24Hrs'},
                {data: 'Open_public_holidays', name: 'Open Holidays'},
                {data: 'Open_weekends', name: 'Open Weekends'},
                {data: 'Open_late_night', name: 'Open Late Night'},
        ]
    });
  });
</script>
</html>
