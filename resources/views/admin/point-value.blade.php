@extends('admin.layout.app')
@section('custom-style')

@endsection
@section('content')
    <div class="content">
        <div class="block">
            @if(Auth::user()->hasRole('ADMIN') || Auth::user()->hasRole('SUPER_ADMIN'))
            <div class="block-header block-header-default">
                <h3 class="block-title">Add Instructions regarding points and gifts for teachers</h3>
            </div>
            <div class="block-content">
                <form action="be_forms_editors.html" method="post" onsubmit="return false;">
                    <div class="form-group row">
                        <div class="col-12">
                            <textarea id="js-ckeditor" name="ckeditor"></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div class="block-header block-header-default">
                <h3 class="block-title">Add Instructions regarding points and gifts for students</h3>
            </div>
            <div class="block-content">
                <form action="be_forms_editors.html" method="post" onsubmit="return false;">
                    <div class="form-group row">
                        <div class="col-12">
                            <textarea id="js-ckeditor" name="ckeditor"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            @elseif(Auth::user()->hasRole('TEACHER'))
                <div class="block-header block-header-default">
                    <h3 class="block-title">Please follow below instructions</h3>
                </div>
            <h1>Some Instructions Here</h1>
            @elseif(Auth::user()->hasRole('STUDENT'))
                <div class="block-header block-header-default">
                    <h3 class="block-title">Please follow below instructions</h3>
                </div>
                <h1>Some Instructions Here</h1>
            @endif
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>jQuery(function(){ Codebase.helpers(['ckeditor']); });</script>
@endsection