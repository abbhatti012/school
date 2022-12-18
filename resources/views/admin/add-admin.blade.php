@extends('admin.layout.app')
@section('custom-style')

@endsection
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add Admin</h3>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-6">
                        <form class="js-validation-material" action="validation.html" method="post">
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-username2" name="val-username2" placeholder="Enter a username..">
                                    <label for="val-username2">Full Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-email2" name="val-email2" placeholder="Your valid email..">
                                    <label for="val-email2">Email</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="text" class="form-control" id="val-phoneus2" name="val-phoneus2" placeholder="212-999-0000">
                                    <label for="val-phoneus2">Phone (US)</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="val-password2" name="val-password2" placeholder="Choose a safe one..">
                                    <label for="val-password2">Password</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-material">
                                    <input type="password" class="form-control" id="val-confirm-password2" name="val-confirm-password2" placeholder="..and confirm it!">
                                    <label for="val-confirm-password2">Confirm Password</label>
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