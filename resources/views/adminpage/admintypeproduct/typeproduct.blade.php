@extends('layouts.admin')
@section('content')

<style>
.buttonadd {
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    text-align: left;
    text-decoration: none;
    color: black;
    background-color: grey;
    border-radius: 15px;
}
.buttonmodfily {
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    text-align: left;
    text-decoration: none;
    color: black;
    background-color: gold;
    border-radius: 15px;
}
.buttondelete {
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    text-align: left;
    text-decoration: none;
    color: black;
    background-color: red;
    border-radius: 15px;
}
</style>
                  
<div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="{{asset('template/admin/assets/images/avatar-4.jpg')}}"
                                        alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>Noy Klayyam</span>
                                        <span id="more-details">Shop owner<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="ti-layout-sidebar-left">{{ __('Logout') }}</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle"> </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <br>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="{{url ('/admin/home')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{url ('/admin/product')}}">
                                        <span class="pcoded-micon"><i class="ti-archive"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Product</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{url ('/admin/typeproduct')}}">
                                        <span class="pcoded-micon"><i class="ti-package"></i><b>T</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Type Product</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{url ('/admin/user')}}">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>U</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">User</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- <li class="active">
                                    <a href="{{url ('/admin/info')}}">
                                        <span class="pcoded-micon"><i class="ti-info"></i><b>I</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Info</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                            <!-- Data widget start -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <button class="buttonadd"><a href="{{url ('/admin/typeproduct/add')}}">Add</a></button>     
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Product</th>
                                                                        <th>Modify</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead>
                                                                
                                                                <tbody>
                                                                @foreach($typeproduct as $row)
                                                                    <tr>
                                                                        <td>{{$row->id }}</td>
                                                                        <td>{{$row->name }}</td>
                                                                        <td>{{$row->detail }}</td>
                                                                        <td>{{$row->price }}</td>
                                                                        <td><a href="{{url('/admin/typeproduct/edit')}}">
                                                                        <button class="">Modify</button></a></td> 
                                                                        <form><td><button type="delete" class="delete">
                                                                        Delete</button></td></form>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                  
                

@stop