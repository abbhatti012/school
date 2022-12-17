@extends('admin.layout.app')
@section('custom-style')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.css')}}">
@endsection
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add Teacher</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                        <form class="js-validation-material" action="validation.html" method="post">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                    <label for="val-username2">Class Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="Your valid email..">
                                    <label for="val-email2">Points</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="val-select22" name="val-select22" style="width: 100%;" multiple data-placeholder="Choose one..">
                                        <option></option>
                                        <option value="html">Student 1</option>
                                        <option value="html">Student 2</option>
                                        <option value="html">Student 3</option>
                                        <option value="html">Student 4</option>
                                        <option value="html">Student 5</option>
                                        <option value="html">Student 6</option>
                                        <option value="html">Student 7</option>
                                        <option value="html">Student 8</option>
                                    </select>
                                    <label for="val-select2">Select Student</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/additional-methods.js')}}"></script>
    <script src="{{asset('assets/js/pages/be_forms_validation.min.js')}}"></script>

    <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>jQuery(function(){ Codebase.helpers('select2'); });</script>
@endsection