<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/alif-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ALIF Form
    @yield('title')
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
  
  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <style>

  .container-footer {
    margin-top: 40px;
    height: 230px;
    background-color:#02285c;
  }
  .row-footer {
    margin-top: 20px;
  }
  .container-footer h4 {
    font-size: 1.1rem;
  }
  .container-footer p {
    font-size: .8rem;
    color: #e2e0e0;
  }
  .container-footer .icn {
    color: #e2e0e0;
    padding-left: .4rem;
  }
  .p-address {
    color: #e2e0e0;
    font-size: .8rem;
    margin-left: 14px;
    margin-top: -35px;
  }

  .p-contact{
    color: #e2e0e0;
    font-size: .8rem;
    /*margin-left: 19px;*/
    margin-top: -50px;
  }
  .v-contact {
    color: #e2e0e0;
    font-size: .8rem;
    margin-left: 19px;
    margin-top: -36px;
  }

  .btn-primary {
    background-color: #34527c ;
  }
  .visually-hidden {
    font-size: .8rem;
  }
  </style>
  

  @yield('extra-css')

</head>

<body class="" style="background-color:#CE1126;">


@yield('content')  
  <!--   Core JS Files   -->
  <script src="{{asset('dashboard/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
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

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });

    $(document).ready(function() {
      $('#dt-mant-table').DataTable({
        //"dom": 'lfrtip'
        "dom": 'frti',       
        //responsive: true
      });
    });
  </script>
  @yield('extra-script')
</body>

</html>
