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


<div class="container mt-5">
<div class="col-md-12">
    <h5 class="text-center">Generate Graph Report</h5>
</div>


<form name="form" class="mrt" method="POST" action="{{ route('post.register') }}">
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
          <option value="" selected="true" disabled>-Select City/Munisipalidad-</option>

      </select>
  </div>

  <div class="form-group mt-4 col-md-2">
      <input type="submit" name="Generate" value="submit" class="btn btn-primary btn-sm">
  </div>


</div>
</form>

</div> 


</body>

</html>
