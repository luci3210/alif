<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ALIF Graph&Chart
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('dashboard/assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
  
  <link href="{{ asset('dashboard/assets/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />

  <!-- <link href="{{ asset('dashboard/assets/datatable/rowReorder.dataTables.min.css') }}" rel="stylesheet" /> -->
  <link href="{{ asset('dashboard/assets/datatable/responsive.dataTables.min.css') }}" rel="stylesheet" />


  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('dashboard/assets/demo/demo.css')}}" rel="stylesheet" />
  <!--  -->
  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>


<div class="row mt-2" style="padding-right: 10px; padding-left:10px">
<div class="col-md-12">
<div class="card ">
  <div class="card-header ">
    <h5 class="card-title">Alif Membership Graph (Province of <b>{{ $data[0]->province_description }}</b> and City/Munisipalidad of <b>{{ $data[0]->city_municipality_description }})</b></h5>
  </div>
  <div class="card-body ">
    <canvas id=chartHours width="300" height="100"></canvas>
  </div>
  <div class="card-footer ">
    <div class="legend">
      <i class="fa fa-circle text-primary"></i> Number of members
      <i class="fa fa-circle text-danger"></i> Target number
      </B>
    </div>
    
    <div class="legend mt-2">
      <i class="fa fa-circle text-danger"></i> 
      New Member registered
        <b><span style="font-size:20px;">{{ $countNewmember }}</span></b>
    </div>

    <div class="legend mt-2">
      <i class="fa fa-circle text-danger"></i> 
      Total members registered 
        <b><span style="font-size:20px;">{{ $countAll }}</span></b>
    </div>

    <div class="legend mt-2">
      <i class="fa fa-circle text-danger"></i> 
      Over All registered
        <b><span style="font-size:20px;">{{ $overAll }}</span></b>
    </div>

    <div class="legend mt-2">
      <i class="fa fa-circle text-danger"></i> 
      Over All new registered as of today
        <b><span style="font-size:20px;">{{ $overAllNewmember }}</span></b>
    </div>

    <hr>
    {{-- <div class="stats">
      <i class="fa fa-calendar"></i> Number of emails sent
    </div> --}}
  </div>
</div>
</div>
</div> 


{{--      <div class="row" style="padding-right: 10px; padding-left:10px">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Philippines Barangay Voters Statistics</h5>

              </div>
              <div class="card-body ">
                <canvas id="chartEmail"></canvas>
              </div>
                <hr>
            </div>
          </div>

         
        </div>  --}}

<!-- <div class="row mt-2" style="padding-right: 10px; padding-left:10px">
<div class="col-md-12">
<div class="card ">
  <div class="card-header ">
    <h5 class="card-title">ByDate Membership Statistics </h5>
  </div>
  <div class="card-body ">
    <canvas id=chartline width="400" height="100"></canvas>
  </div>

  <div class="card-footer ">
   
    <hr>
  </div>
</div>
</div>
</div>  -->




  <script src="{{asset('dashboard/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('dashboard//assets/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('dashboard/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('dashboard/assets/js/paper-dashboard.min.js?v=2.0.0')}}"></script>

  <script src="{{asset('dashboard/assets/datatable/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/datatable/dataTables.bootstrap4.min.js')}}"></script>
  <!-- <script src="{{asset('dashboard/assets/datatable/dataTables.rowReorder.min.js')}}"></script> -->
  <script src="{{asset('dashboard/assets/datatable/dataTables.responsive.min.js')}}"></script>

  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('dashboard/assets/demo/demo.js')}}"></script>  
  <!-- Scripts -->
  <script src="{{ asset('js/main.js') }}" defer></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

 
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
   
  
   {{--  <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script> --}}

  <script>

  
      var ydata = JSON.parse('{!! json_encode($barangay) !!}');
      var zdata = JSON.parse('{!! json_encode($target_member) !!}');
      var xdata = JSON.parse('{!! json_encode($members) !!}');




    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
      demo.initDocChart();

    });

    $(document).ready(function() {
      $('#dt-mant-table').DataTable({
        //"dom": 'lfrtip'
        "dom": 'frti',       
        //responsive: true
      });
    });


    </script>


</body>

</html>
