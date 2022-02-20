@extends('home')

@section('title')
	User
@endsection

@section('extra-css')

@endsection

@section('index')
<div class="content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="">
                    <h3>membership</h3>
                    <a class="float-left" href="{{ route('manage-registered.export') }}">Export (Download)</a><br>
                    
                    <form method="post" action="{{ route('manage-registered.import') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Import excel File</label>
                        <input type="file" class="form-control-file" name="file">
                      </div>
                      <button type="submit" class="btn btn-primary">
                                        Parse CSV
                                    </button>
                    </form>
                
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dt-mant-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Household</th>
                                    <th>Barangay</th>
                                    <th>Id-No.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td class="text-center">{{ ++ $loop->index }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->mobile_no }}</td>
                                    <td class="text-center">{{ $row->household_no }}</td>
                                    <td>{{ $row->barangay_description }}</td>
                                    <td>{{ $row->idno }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning btn-sm disabled">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="float-left" style="margin-left:-133px;margin-top: 5px;">{{ $data->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')

@endsection
