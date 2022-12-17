@extends('admin.layout.app')
@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
@endsection
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Gifts</h3>
            @if(Auth::user()->hasRole('ADMIN') || Auth::user()->hasRole('SUPER_ADMIN'))
            <div class="block-options">
                <a href="{{ route('add-gift') }}" class="btn btn-success btn-block-option">
                    <i class="fa fa-plus mr-5"></i>Add Gift
                </a>
            </div>
            @endif
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="d-none d-sm-table-cell">Image</th>
                        <th class="d-none d-sm-table-cell">Gift Name</th>
                        <th class="d-none d-sm-table-cell">Point Assigned</th>
                        <th class="d-none d-sm-table-cell">Point Name</th>
                        <th class="d-none d-sm-table-cell">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 20; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td><img width="50" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="Gift"></td>
                        <td class="font-w600">Pencil</td>
                        <td class="font-w600">3</td>
                        <td class="font-w600">Kindness</td>
                        <td>
                        @if(Auth::user()->hasRole('ADMIN') || Auth::user()->hasRole('SUPER_ADMIN'))
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Gift">
                                <i class="fa fa-trash"></i>
                            </button>
                        @else
                            ---
                        @endif
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