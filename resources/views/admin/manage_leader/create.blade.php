@extends('home')

@section('title')
	Permission
@endsection

@section('extra-css')

@endsection


@section('title')
    Permission
@endsection

@section('index')
        <div class="content">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="">
                            <h3>
                                Add New Leader
                            </h3>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('manage-leader.store') }}">
                                @csrf

        <div class="form-row">
        <div class="form-group  col-md-6">
            <label class="form-label">Name (leader name)</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Full Name" required>
           
        </div>

        <div class="form-group col-md-6">
            <label class="form-label">Cellphone Number</label>
            <input type="input" id="cpno" maxlength="11" class="form-control " name="mobile_number" value="{{ old('mobile_number') }}" placeholder="Cellphone Number" required>
        </div>

        </div>




                    


                    <div class="form-row mt-3">


                    <div class="form-group col-md-4">
                        <label for="inputHN">Probinsya</label>
                        <select class="form-control" name="province" aria-label="province" id="provinceid" required>
                            <option value="" selected="true" disabled>-Select Probinsya-</option>
                            @forelse ($provices as $province)
                                <option value="{{$province->province_code}}">{{ $province->province_description }}</option>
                            @empty
                            <option value="" disabled="true">-no data found-</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputHN">City/Munisipalidad</label>
                        <select class="form-control" name="city" aria-label="city" id="cityid" required>
                            <option value="" selected="true" disabled>-Select City/Munisipalidad-</option>

                        </select>
                    </div>

                    
                    <div class="form-group col-md-4">
                        <label for="inputHN">Barangay</label>
                        <select class="form-control" name="barangay" aria-label="barangay" id="brgyid" required>
                            <option value="" selected="true" disabled>-Select Barangay-</option>
                        </select>
                    </div>

                </div>

        <div class="form-row mt-3">

        <div class="form-group col-md-12">
            <label class="form-label">Target No. (Number of person)</label>
            <input type="input" id="cpno" maxlength="5" class="form-control " name="tno" value="{{ old('tno') }}" placeholder="Target No." required>
        </div>

        </div>

                                
                                <button class="btn btn-primary btn-sm" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      
@endsection

@section('extra-script')

@endsection
