<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/apple-icon.png')}}">
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
  {{-- <link href="{{asset('dashboard/assets/demo/demo.css')}}" rel="stylesheet" /> --}}
  
  <!-- Styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  @yield('extra-css')

</head>
<body class="">
    @yield('content')  
  <!--   Core JS Files   -->
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

 
  <div id="chart" style="height: 300px;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
   
  
   {{--  <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script> --}}

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

    //   const chart = new Chartisan({
    //     el: '#chart',
    //     url: "@chart('alif_chart')", 
    //      hooks: new ChartisanHooks()
    // .colors(['#ECC94B', '#4299E1'])
    // .responsive()
    // .beginAtZero()
    // .legend({ position: 'top' })
    // .title('Alif Registered Member')
    // .datasets([{ type: 'line', fill: false }, 'bar']),
    //   });

    </script>

<script type="text/javascript">


$(document).ready(function () {
      
$('#provinceid').on('change', function () {

        let province_code = $(this).val();
        
        $('#cityid').empty();
        $('#cityid').append(`<option value="" disabled selected>Searching . . .</option>`);
        $.ajax( {
           type: 'GET',
           url: '/alif/location/cities/' + province_code,
           
            success: function (response) {
            var response = JSON.parse(response);
            console.log(response);   
            
            $('#cityid').empty();
      
            $('#cityid').append(`<option value="" disabled selected>-Select City/Munisipalidad-</option>`);
            response.forEach(element => {
            $('#cityid').append(`<option value="${element['city_municipality_code']}">${element['city_municipality_description']}</option>`);
          });
      
      }
  });
});


$('#cityid').on('change', function () {

let city_municipality_code = $(this).val();

$('#brgyid').empty();
$('#brgyid').append(`<option value="" disabled selected>Searching . . .</option>`);
$.ajax( {
   type: 'GET',
   url: '/alif/location/barangay/' + city_municipality_code,
   
    success: function (response) {
    var response = JSON.parse(response);
    console.log(response);   
    
    $('#brgyid').empty();

    $('#brgyid').append(`<option value="" disabled selected>-Select Barangay-</option>`);
    response.forEach(element => {
    $('#brgyid').append(`<option value="${element['barangay_code']}">${element['barangay_description']}</option>`);
  });

}
});
});


$('[id^=cpno]').keypress(validateNumber);

});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};

</script>
@yield('extra-script')
</body>

</html>
