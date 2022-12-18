<?php 
    $route = \Request::route()->getName();
    $role = auth()->user()->roles->pluck('name')[0];
?>

<aside id="side-overlay">
    <div class="content-header content-header-fullrow">
        <div class="content-header-section align-parent">
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times text-danger"></i>
            </button>

            <div class="content-header-item">
                <a class="img-link mr-5" href="#">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                </a>
                <a class="align-middle link-effect text-primary-dark font-w600" href="#">{{ auth()->user()->name }}</a>
            </div>
        </div>
    </div>
</aside>
<nav id="sidebar">
    <div class="sidebar-content">
        <div class="content-header content-header-fullrow px-15">
            <div class="content-header-section sidebar-mini-visible-b">
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
            </div>

            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="#">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">School</span><span class="font-size-xl text-primary">base</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
            </div>
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="#">
                    <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                </a>
                <ul class="list-inline mt-10">
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="javascript:void(0)">{{ auth()->user()->name }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="link-effect text-dual-primary-dark" href="{{ route('logout') }}">
                            <i class="si si-logout"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                @if($role == 'SUPER_ADMIN' || $role == 'ADMIN' || $role == 'TEACHER')
                    @if($role == 'ADMIN' || $role == 'SUPER_ADMIN')
                        <li><a class="<?php if($route == 'admin-dashboard'){echo 'active';} ?>" href="{{ route('admin-dashboard') }}"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Dashboard</span></a></li>
                        <li><a class="<?php if($route == 'teachers'){echo 'active';} ?>" href="{{ route('teachers') }}"><i class="fa fa-user"></i><span class="sidebar-mini-hide">Teachers</span></a></li>
                        <li><a class="<?php if($route == 'categories'){echo 'active';} ?>" href="{{ route('categories') }}"><i class="fa fa-list-alt"></i><span class="sidebar-mini-hide">Point Category</span></a></li>
                    @endif
                    @if($role == 'SUPER_ADMIN')
                    <li><a class="<?php if($route == 'admins'){echo 'active';} ?>" href="{{ route('admins') }}"><i class="fa fa-users"></i><span class="sidebar-mini-hide">Admins</span></a></li>
                    @endif
                    @if($role == 'TEACHER')
                    <li><a class="<?php if($route == 'teacher-dashboard'){echo 'active';} ?>" href="{{ route('teacher-dashboard') }}"><i class="fa fa-dashboard"></i><span class="sidebar-mini-hide">Classrooms</span></a></li>
                    @endif
                    <li><a class="<?php if($route == 'students'){echo 'active';} ?>" href="{{ route('students') }}"><i class="fa fa-user"></i><span class="sidebar-mini-hide">Students</span></a></li>
                    <li><a class="<?php if($route == 'classes'){echo 'active';} ?>" href="{{ route('classes') }}"><i class="fa fa-bars"></i><span class="sidebar-mini-hide">Classes</span></a></li>
                    <li><a class="<?php if($route == 'gifts'){echo 'active';} ?>" href="{{ route('gifts') }}"><i class="fa fa-gift"></i><span class="sidebar-mini-hide">Store / Gifts</span></a></li>
                    @endif
                    @if($role == 'STUDENT')
                        <li><a class="<?php if($route == 'student-dashboard'){echo 'active';} ?>" href="{{ route('student-dashboard') }}"><i class="fa fa-bars"></i><span class="sidebar-mini-hide">Store</span></a></li>
                    @endif
                    <li><a class="<?php if($route == 'point-value'){echo 'active';} ?>" href="{{ route('point-value') }}"><i class="fa fa-dot-circle-o"></i><span class="sidebar-mini-hide">Point Value</span></a></li>
            </ul>
        </div>
    </div>
</nav>