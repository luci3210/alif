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
                                Add numbers of voter for barangay.
                            </h3>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('manage-voters.store') }}">
                                @csrf


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
            <label class="form-label">Statistic Voters</label>
            <input type="input" id="cpno" maxlength="5" class="form-control " name="vno" value="{{ old('vno') }}" placeholder="Number of voters in the barangay" required>
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
