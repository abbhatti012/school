@extends('admin.layout.app')
@section('custom-style')
@endsection
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">All Categories</h3>
            <div class="block-options">
                <a href="{{ route('add-category') }}" class="btn btn-success btn-block-option">
                    <i class="fa fa-plus mr-5"></i>Add Category
                </a>
            </div>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Category Name</th>
                        <th class="text-center" style="width: 15%;">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 10; $i++)
                    <tr>
                        <td class="text-center">{{ $i }}</td>
                        <td class="d-none d-sm-table-cell">PBIS Skills</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Category">
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
@endsection