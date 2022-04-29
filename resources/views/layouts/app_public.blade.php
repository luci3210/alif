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

  .alif-address {
    font-size: 14px;
    color: #000000;
    font-weight: bold;
  }
  .alif-holine {
    font-size: 12px;
    color: #0038a9;
    font-weight: bold;
  }
  .container-footer {
    height: 230px;
    background-color:#fff;
  }
  .row-footer {
    margin-top: 20px;
  }
  .container-footer h4 {
    font-size: 1.1rem;
  }
  .container-footer  {
    font-size: .8rem;
    color: #e2e0e0;*/
  }
  .container-footer .icn {
    color: #0038a9;
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
    background-color: #fdd116 ;
    color: #000;
  }
  
  .btn-primary:hover {
    background-color: #ba9701 !important;
    color: #1a1a1a !important;
  }

  .visually-hidden {
    font-size: .8rem;
  }
  .br-btm {
    border-bottom: solid 15px #fff !important;
  }
  .frm-title {
    font-size: 25px;
    font-weight: 700;
    color: #fdd116;
    font-style: italic;
    text-transform: uppercase;
  }
  .alif-title{
    font-size: 18px;
    font-weight: 700;
    color: #fff;
  }
  .alif-about{
    font-size: 15px;
    font-weight: 500;
    color: #fff;
  }
  .alert.alert-danger {
    margin-top: 25px;
  }
  .alert.alert-success {

      background-color: #fcd116 !important;
      color: #0038a9 !important;
  }
   .alert.alert-success h3 {

      color: #0038a9;
  }
  .close {
    color: #000 !important;
  }
  </style>
  

  @yield('extra-css')

</head>

<body class="" style="background-color:#0038a9;">


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
