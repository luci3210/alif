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
                    <h3>Registered <a class="float-right" href="{{ route('manage-registered.export') }}">Download</a></h3>
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
                                    <th>Address</th>
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
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->idno }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning btn-sm disabled">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin-right: 30px">{{ $data->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')

@endsection
