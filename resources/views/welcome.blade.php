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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Hospitals Kenya</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact_us">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>View all Health Facilities in Kenya</strong></h3>
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
    <br>
    <div class="card text-center" id="contact_us">
      <div class="card-header">
        Contact Us
      </div>
      <div class="card-body">
        <h5 class="card-title">Get in touch with us for feedback</h5>
        <p class="card-text">Email: kemusmebi21@gmail.com.</p>
        <p class="card-text">Phone: +254 748 050 434.</p>
      </div>
    </div>
</div>
<br>

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
