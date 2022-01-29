@extends('layouts.app_public')
@section('extra-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
html,body{
height:100%;"
}
.bg-white {
background: rgb(255,255,255);
}
.login-reg {
display: table;
margin: auto;
}
.vcenter-item{
display: flex;
align-items: center;
}
.wrapper{
min-height: 400px;
}
.box{
padding: 25px;
width: 100%;
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
  }
</style>
@endsection
@section('content')
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col bg-white">
            <div class="wrapper vcenter-item">
                <div class="box">
                    <img src="{{ url('/images/logo/logo.png')}}" class="rounded mx-auto d-block" alt="...">
                </div>
            </div>


            <div class="col-md-6 offset-md-3" style="margin-top: -30px;">
                @if ($message = Session::get('error'))
                {{-- <div class="card-body"> --}}
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! $message !!}</strong>
                </div>
            {{-- </div> --}}
                @endif
    
        <form name="form" method="GET" action="{{ route('post.search') }}">
    @csrf
            <div class="form-group col-md-12 text-center">
                <input type="text" class="form-control " name="search" value="{{ old('search') }}" placeholder="Enter ID No." autofocus="">
                <button type="submit" class="btn btn-danger btn-block m-btn">Search</button>
            </div>
    
        </form>
            </div>

















            {{-- <div class="login-reg">
                <a class="mr-3 btn btn-primary" href="{{ route('login') }}">Login</a>
            </div> --}}
        </div>

        <div class="col align-self-center text-white">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <div class="text-center  m-second-page">
                    <h3  class="mb-2">
                        ALIF Member Update Form                    </h3>
                </div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success text-center">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! $message !!}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('errors'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{!! $message !!}</strong>
                    </div>
                    @endif
                    <form name="form" method="POST" action="{{ route('post.update') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Buong Pangalan</label>
                            <input type="text" class="form-control " name="full_name" value="{{ old('full_name',$id->name) }}" placeholder="Buong Pangalan" autofocus="">
                            <input type="hidden" value="{{ $id->idno }}" name="idno">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputMN">Cellphone Number</label>
                                <input type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number',$id->mobile_no) }}" placeholder="Cellphone Number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputHN">Bilang ng Kasama sa Bahay</label>
                                <select class="form-control" name="household_no" aria-label="Bilang">
                                    <option selected>Bilang ng Kasama sa Bahay</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                  </select>
                            </div>
                        </div>
                        
                        <div class="form-group ">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="2" placeholder="Address">{{ old('address',$id->address) }}</textarea>
                        </div>
                        <button class="btn btn-danger float-right" type="submit">UPDATE</button>
                        <a href="{{ route('welcome') }}" class="btn btn-danger float-right">Back to REGISTRATION</a>
                    </form>

                    
                    <div class="form-row" style="margin-top:5rem">
                            
                        <ul class="list-unstyled" style="margin-bottom: ">
                        
                        <li><span style="font-size: 1.3rem;">Member Benefits</span>
                          <ul class="mt-2" style="margin-left:-1.5rem">
                            <li style="list-style:none;">✓ Libreng Dialysis </li>
                            <li style="list-style:none">✓ Libreng Scholarship</li>
                            <li style="list-style:none">✓ Libreng Puhunan para sa mga MSMEs</li>
                            <li style="list-style:none">✓ Hanap Buhay at Trabaho hatid para sa mga Miyembro ng ALIF</li>
                          </ul>
                        </li>
                      </ul>

                    </div>
                </div>
                
                
                
            </div>
            
            
        </div>
    </div>
</div>
@endsection
@section('extra-script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
flatpickr("input[type=datetime-local]", {});
</script>
@endsection