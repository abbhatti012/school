@extends('admin.layout.app')
@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Teachers</h3>
            <div class="block-options">
                <a href="{{ route('add-teacher') }}" class="btn btn-success btn-block-option">
                    <i class="fa fa-plus mr-5"></i>Add Teacher
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Teacher Name</th>
                        <th class="d-none d-sm-table-cell">Teacher Email</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Teacher Phone</th>
                        <th class="text-center" style="width: 15%;">Profile</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 20; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td class="font-w600">John Doe</td>
                        <td class="d-none d-sm-table-cell"><a href="mailto:john@example.com">john@example.com</a></td>
                        <td class="d-none d-sm-table-cell">
                            <a href = "tel:1234567890">1234567890</a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Approve Teacher">
                                <i class="fa fa-check"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Teacher">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('custom-script')
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
@endsection