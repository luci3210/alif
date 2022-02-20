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
                    <h3>Member Leader</h3>
                    <a href="{{ route('manage-leader.create') }}" class="btn btn-success btn-sm">Add New</a>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dt-mant-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Barangay</th>
                                    <th>Average Target.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td class="text-center">{{ ++ $loop->index }}</td>
                                    <td>{{ $row->ldr_name }}</td>
                                    <td>{{ $row->ldr_contact }}</td>
                                    <td>{{ $row->barangay_description }}</td>
                                    <td>{{ $row->ldr_target_no }}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning btn-sm disabled">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <div class="float-left">{{ $data->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-script')

@endsection
