<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('dashboard/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('dashboard/assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ALIF Over All Membership status
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



<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Alif PartyList</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <!-- <a class="p-2 text-dark" href="#">Genearate Graph Report</a> -->
      </nav>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Over All Membership status</h1>
      
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">ToDay</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">{{ $overAllNewmember }}</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>New registered</li>
            </ul>
          </div>
        </div>

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Last 5 Days</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">{{ $countdays }}</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Registered</li>
            </ul>
          </div>
        </div>

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Over All</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">{{ $overAll }}</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Registered</li>
              <li style="font-size:17px;"><b>? Encoded / From Manual</b></li>
            </ul>
          </div>
        </div>

      </div>


<div class="card-deck mb-3 text-center">

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Top 10 Provinces with highest registered numbers</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled text-muted mt-3 mb-4">
              @foreach($topProvinces as $city)
              <li style="font-size:17px;"> {{ $loop->index + 1 }}.
                <b>{{ $city->province_description = !$city->province_description ? 'Old Registration Form' : $city->province_description }}</b> 
                - <b>{{ $city->members }}</b></li>
              @endforeach
            </ul>
          </div>
        </div>
        </div>



<div class="card-deck mb-3 text-center">

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Top 15 City/Munisipalidad with highest registered numbers</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled text-muted mt-3 mb-4">
              @foreach($topCityMunisipality as $city)
              <li style="font-size:17px;"> {{ $loop->index + 1 }}.
                <b>{{ $city->city_municipality_description = !$city->city_municipality_description ? 'Old Registration Form' : $city->city_municipality_description }}</b>
                <span style="font-style: italic;">({{ $city->province_description }} </span> 
                - <b>{{ $city->members }}</b></li>
              @endforeach
            </ul>
          </div>
        </div>
        </div>



      <div class="card-deck mb-3 text-center">

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Top 20 Barangay with highest registered numbers</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled text-muted mt-3 mb-4">
              @foreach($topBrgy as $brgy)
              <li style="font-size:17px;"> {{ $loop->index + 1 }}.
                <b>{{ $brgy->barangay_description = !$brgy->barangay_description ? 'Old Registration Form' : $brgy->barangay_description }}</b>
                <span style="font-style: italic;">({{ $brgy->province_description }} -- 
                 {{ $brgy->city_municipality_description }})</span> 
                - <b>{{ $brgy->members }}</b></li>
              @endforeach
            </ul>
          </div>
        </div>
        </div>

      <b><hr></b>

    </div>




<div class="container mt-5 mb-4">
<div class="col-md-12">
    <h5 class="text-center">Generate Graph Report</h5>
</div>


<form name="form" class="mrt" method="get" action="{{ route('chart.graph') }}">
@csrf
 <div class="form-row mt-3">


  <div class="form-group col-md-5">
      <label for="inputHN">Probinsya</label>
      <select class="form-control" name="province" aria-label="province" id="provinceid">
          <option value="" selected="true" disabled>-Select Probinsya-</option>
          @forelse ($provices as $province)
              <option value="{{$province->province_code}}">{{ $province->province_description }}</option>
          @empty
          <option value="" disabled="true">-no data found-</option>
          @endforelse
      </select>
  </div>

  <div class="form-group col-md-5">
      <label for="inputHN">City/Munisipalidad</label>
      <select class="form-control" name="city" aria-label="city" id="cityid">
          <option value="ssss" selected="true" disabled>-Select City/Munisipalidad-</option>

      </select>
  </div>

  <div class="form-group mt-3">
      <input type="submit" name="Generate" value="Generate graph" class="btn btn-primary" style="margin-top: 13px;">
  </div>


</div>
</form>

</div> 


</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
flatpickr("input[type=datetime-local]", {});

$('.selectservices').select2( {
  allowClear:true
});



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
   url: 'alif/location/barangay/' + city_municipality_code,
   
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


});


</script>

</html>
