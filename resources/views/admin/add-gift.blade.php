@extends('admin.layout.app')
@section('custom-style')

@endsection
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add Gift</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                        <form class="js-validation-material" action="validation.html" method="post">
                            <div class="form-group">
                                <div class="form-material">
                                    <select class="js-select2 form-control" id="val-select22" name="val-select22" style="width: 100%;" multiple data-placeholder="Choose one..">
                                        <option></option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                        <option value="html">PBIS Skills</option>
                                    </select>
                                    <label for="val-select2">Select Category</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                    <label for="val-username2">Point Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                    <label for="val-username2">Assign Point</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                    <label for="val-username2">Gift Name</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12">Gift Image</label>
                                <div class="col-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="example-file-input-custom" name="example-file-input-custom" data-toggle="custom-file-input">
                                        <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                    </div>
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
@endsection