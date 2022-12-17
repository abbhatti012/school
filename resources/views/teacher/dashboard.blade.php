@extends('admin.layout.app')

@section('content')
    <div class="content">
        <div class="row invisible" data-toggle="appear">
            @for($i = 1; $i <= 8; $i++)
            <div class="col-6 col-xl-3">
                <a class="block block-link-shadow text-right" href="{{ route('students') }}">
                    <div class="block-content block-content-full clearfix">
                        <div class="float-left mt-10 d-none d-sm-block">
                            <i class="si si-users fa-3x text-body-bg-dark"></i>
                        </div>
                        <div class="font-size-sm font-w600 text-uppercase text-muted">CLASS {{ $i }}</div>
                    </div>
                </a>
            </div>
           @endfor
        </div>
    </div>
@endsection
