@extends('admin.layout.app')
@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <style>
        .student-points{
            display: none;
        }
    </style>
@endsection
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Students</h3>
            <div class="block-options">
                <div class="student-points">
                    <a href="{{ route('assign-point') }}" class="btn btn-success btn-block-option">
                        <i class="fa fa-plus mr-5"></i>Add Points to Student(s)
                    </a>
                </div>
                <a href="{{ route('add-student') }}" class="btn btn-success btn-block-option">
                    <i class="fa fa-plus mr-5"></i>Add Student
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th></th>
                        <th></th>
                        <th class="text-center" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 20; $i++)
                    <tr>
                        <td class="text-center">
                            <label class="css-control css-control-primary css-checkbox">
                                <input type="checkbox" class="css-control-input checkbox" id="row_1">
                                <span class="css-control-indicator"></span>
                            </label>
                        </td>
                        <td class="font-w600">ID#{{ $i }}</td>
                        <td class="font-w600">John Doe</td>
                        <td></td>
                        <td></td>
                        <td class="text-center">
                            <a href="{{ route('assign-point') }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Assign Points">
                                <i class="fa fa-tasks"></i>
                            </a>
                            @if(Auth::user()->hasRole('ADMIN') || Auth::user()->hasRole('SUPER_ADMIN'))
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Student">
                                <i class="fa fa-trash"></i>
                            </button>
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

    <script>
        $('.checkbox').on('change',function(){
            if($('.checkbox').is(':checked')){
                $('.student-points').css('display','inline-block');
            } else {
                $('.student-points').css('display','none');
            }
        })
    </script>
@endsection