@extends('layouts.app_public')
@section('extra-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>

form label {
    color:#fff;
    font-weight: 800;
}
ol.list {
    list-style-type: none;
    font-size: 1.1rem;
    color:#fff;
}
h3 {
    color: #fff;
    font-weight: 900;
}
h4 {
    color: #fff;
    font-weight: 900;
}
.mrt {
    margin-top: 3rem;
}
hr { display: block; height: 1px;
    border-top: 2px solid #ccc;
    margin: 1em 0; padding: 0; 
}
.center-block {
   margin-left:auto;
   margin-right:auto;
   display:block;
   margin-top: 15px;
}

.text-center {
   text-align:center;
   margin-top: 40px;
}
.hr-mrg {
    margin-top: 3rem;
    margin-bottom: 3rem;
}

/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.benefits-img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    /*padding:25px 25px 0; */
    border-radius:10% 0 0 0; 
    border: 1px solid #fff;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
  .m-btn{
        margin-bottom: 60px;
    }
    .m-second-page {
        margin-top: 60px;
    }

    .benefits-img {
        padding:0px 0px 0px; 
        border-radius:0px 0px 0px 0px;
    }
  }
/* 
  .container {
  display: grid; 
  grid-template-columns: 0.5fr 5fr 0.5fr; 
  gap: 0px 0px; 
} */

</style>
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="mt-4">
			<img class="center-block text-center" alt="Alif-Logo" src="{{ url('/images/logo/logo-b.png')}}" />
            </div>
            <h3 class="text-center">
				ALIF Member Registration Form
			</h3>

            <div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success text-center">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <span style="margin-top:1em;"><strong>{!! $message !!}</strong></span>
            </div>
            @endif

            @if ($message = Session::get('errors'))
            <div class="alert alert-danger" style="border: 1px solid #b90f22;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ol class="list" style="margin-left: -1.5em;">

                    @php $i = 0 @endphp

                    @foreach ($errors->all() as $error)
                        <span style="display: none;">{{ $i++ }}
                    </span>
                    @endforeach

                    @if($i >= 2)
                        <span><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kulang ang iyong impormasyon. Pakipunan ng wastong impormasyon ang lahat ng datos bago isumite ang inyong pagpaparehistro.
                    </span>
                    @else
                        @foreach ($errors->all() as $error)
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{ $error }}
                        @endforeach
                    @endif


                </ol> 
            </div>
            @endif





            </div>

            <form name="form" class="mrt" method="POST" action="{{ route('post.register') }}">
                    @csrf


                <div class="form-row">

                    <div class="form-group col-md-3">
                        <label>Pangalan</label>
                        <input type="text" class="form-control" name="pangalan" value="{{ old('pangalan') }}" placeholder="Pangalan" autofocus>
                    </div>

                    <div class="form-group col-md-3">
                        <label class="form-label">Gitnang Pangalan</label>
                        <input type="text" class="form-control " name="gpangalan" value="{{ old('gpangalan') }}" placeholder="Gitnang Pangalan">
                    </div>

                    <div class="form-group col-md-3">
                        <label class="form-label">Apelyido</label>
                        <input type="text" class="form-control " name="apelyido" value="{{ old('apelyido') }}" placeholder="Apelyido">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputHN">Bilang ng Kasama sa Bahay</label>
                        <select class="form-control" name="household_no" aria-label="Bilang">
                            <option selected disabled>Bilang ng Kasama sa Bahay</option>
                            <option value="1" {{ old('household_no') == '1' ? 'selected':''}}>1</option>
                            <option value="2" {{ old('household_no') == '2' ? 'selected':''}}>2</option>
                            <option value="3" {{ old('household_no') == '3' ? 'selected':''}}>3</option>
                            <option value="4" {{ old('household_no') == '4' ? 'selected':''}}>4</option>
                            <option value="5" {{ old('household_no') == '5' ? 'selected':''}}>5</option>
                            <option value="6" {{ old('household_no') == '6' ? 'selected':''}}>6</option>
                            <option value="7" {{ old('household_no') == '7' ? 'selected':''}}>7</option>
                            <option value="8" {{ old('household_no') == '8' ? 'selected':''}}>8</option>
                            <option value="9" {{ old('household_no') == '9' ? 'selected':''}}>9</option>
                            <option value="10" {{ old('household_no') == '10' ? 'selected':''}}>10</option>
                            <option value="11" {{ old('household_no') == '11' ? 'selected':''}}>11</option>
                            <option value="12" {{ old('household_no') == '12' ? 'selected':''}}>12</option>
                            <option value="13" {{ old('household_no') == '13' ? 'selected':''}}>13</option>
                            <option value="14" {{ old('household_no') == '14' ? 'selected':''}}>14</option>
                            <option value="15" {{ old('household_no') == '15' ? 'selected':''}}>15</option>
                            <option value="16" {{ old('household_no') == '16' ? 'selected':''}}>16</option>
                            <option value="17" {{ old('household_no') == '17' ? 'selected':''}}>17</option>
                            <option value="18" {{ old('household_no') == '18' ? 'selected':''}}>18</option>
                            <option value="19" {{ old('household_no') == '19' ? 'selected':''}}>19</option>
                            <option value="20" {{ old('household_no') == '20' ? 'selected':''}}>20</option>
                          </select> 
                    </div>

                </div>


                <div class="form-row mt-3">

                    <div class="form-group col-md-3">
                        <label class="form-label">Cellphone Number</label>
                        <input type="input" id="cpno" maxlength="11" class="form-control " name="mobile_number" value="{{ old('mobile_number') }}" placeholder="Cellphone Number">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputHN">Probinsya</label>
                        <select class="form-control" name="province" aria-label="province" id="provinceid">
                            <option value="" selected="true" disabled>-Select Probinsya-</option>
                            @forelse ($provices as $province)
                                <option value="{{$province->province_code}}" {{-- {{ old('province') == $province->province_code ? 'selected':''}} --}}>{{ $province->province_description }}</option>
                            @empty
                            <option value="" disabled="true">-no data found-</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="inputHN">City/Munisipalidad</label>
                        <select class="form-control" name="city" aria-label="city" id="cityid">
                            <option value="" selected="true" disabled>-Select City/Munisipalidad-</option>

                        </select>
                    </div>

                    
                    <div class="form-group col-md-3">
                        <label for="inputHN">Barangay</label>
                        <select class="form-control" name="barangay" aria-label="barangay" id="brgyid">
                            <option value="" selected="true" disabled>-Select Barangay-</option>
                        </select>
                    </div>

                </div>

                <div class="form-row mt-4">
                    <button type="submit" class="btn btn-primary btn-block">Isumite</button>
                </div>



			</form> 




<hr class="hr-mrg">

        </div>
    </div>
</div>




<div style="background-color: #CE1126;">
<img src="{{ url('/images/other/memberbenefits-a.jpg')}}" class="benefits-img">
<br>
</div>



<div class="container">
<div class="row">
        <div class="col-md-12">


 <hr class="hr-mrg">







			<h4 class="text-center mt-4">
				Miyembro na? Hanapin ang ID No.
			</h4>

        <form name="form" method="GET" action="{{ route('post.search') }}">
            @csrf

                    <div class="form-group">
                        <label class="form-label">ID Number</label>
                        <input type="text" class="form-control " name="search" value="{{ old('search') }}" placeholder="Ilagay ang ID No. upang baguhin ang impormasyon. (hal. OO.202101222046X411)">
                    </div>
                
            
			<button type="submit" class="btn btn-primary btn-block mt-3">Hanapin</button>
        </form>


 <footer class="footer">



    {{-- <div class="col-md-12"> --}}
        <div class="row">
            <div class="col-md-6">
                <p style="color: #670813">© Alif Partylist 2022</p>      
            </div>
            <div class="col-md-6">
                <p></p>
            </div>
        </div>
    {{-- </div> --}}

      </footer>

		</div>
	</div>
</div>

@endsection
@section('extra-script')
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
@endsection