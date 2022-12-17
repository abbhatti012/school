@extends('admin.layout.app')
@section('custom-style')
    <style>
        .student-points{
            display: none;
        }
        .btn-second{
            color: black;
            background: white;
            border: 1px solid black !important;
        }
        .selected-class{
            color: white !important;
            background: grey !important;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">Assign Points To Selected Students</h3>
                <div class="block-options">
                <div class="student-points">
                    <a href="javascript:void(0)" class="btn btn-success btn-block-option">
                        <i class="fa fa-plus mr-5"></i>Add Points to Student(s)
                    </a>
                    (<small class="points"></small>)
                </div>
            </div>
            </div>
            <div class="block-content">
                <div class="row justify-content-center py-20">
                    <div class="col-xl-12">
                        <form class="js-validation-material" action="validation.html" method="post">
                            <div class="form-group">
                                <input type="button" class="btn btn-second" value="Going Above and Beyond">
                                <input type="button" class="btn btn-second" value="Kindness">
                                <input type="button" class="btn btn-second" value="Accepting Criticism/Consequences">
                                <input type="button" class="btn btn-second" value="Accepting No for an answer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script>
        $('.btn-second').on('click',function(){
            $('.btn-second').removeClass('selected-class');
            $(this).addClass('selected-class');
            $('.student-points').css('display','block');
            $('.points').html('10 Points');
        });
    </script>
@endsection