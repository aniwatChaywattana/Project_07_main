@extends('layouts.admin')
@section('content')

                  
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
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Product</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{url ('/admin/typeproduct')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>T</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Type Product</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{url ('/admin/user')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>U</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">User</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="{{url ('/admin/info')}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>I</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Info</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statestics</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-error close-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Use space</span>
                                                        <h4>49/50GB</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i
                                                                    class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get
                                                                more space
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Revenue</span>
                                                        <h4>$23,589</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i
                                                                    class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last
                                                                24 hours
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i
                                                            class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Fixed issue</span>
                                                        <h4>45</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i
                                                                    class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked
                                                                via microsoft
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i
                                                            class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Followers</span>
                                                        <h4>+562</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i
                                                                    class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just
                                                                update
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Data widget start -->
                                            <div class="col-md-12 col-xl-12">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <!-- <div class="card-header-left ">
                    
                                                        </div> -->
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i>
                                                                </li>
                                                                <li><i class="icofont icofont-error close-card"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Product</th>
                                                                        <th>Type</th>
                                                                        <th>Remaining amount</th>
                                                                        <th>Modify</th>
                                                                        <th>Delete</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">O</h6>
                                                                                <p class="d-inline-block m-l-20">Orange</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">Summer</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">392</p>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Modfily</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                    <td>
                                                                        <div class="task-contain">
                                                                            <h6 class="bg-c-blue d-inline-block text-center">P</h6>
                                                                            <p class="d-inline-block m-l-20">Banana</p>
                                                                        </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">Summer</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">68</p>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Modfily</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="task-contain">
                                                                            <h6 class="bg-c-blue d-inline-block text-center">P</h6>
                                                                            <p class="d-inline-block m-l-20">Watermalon</p>
                                                                        </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">Summer</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">157</p>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Modfily</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="task-contain">                                                                           
                                                                            <h6 class="bg-c-blue d-inline-block text-center">P</h6>
                                                                            <p class="d-inline-block m-l-20">Papaya</p>
                                                                        </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">Summer</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">234</p>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Modfily</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="task-contain">
                                                                            <h6 class="bg-c-blue d-inline-block text-center">A</h6>
                                                                            <p class="d-inline-block m-l-20">Apple</p>
                                                                        </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">Summer</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">53</p>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Modfily</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="" class="d-inline-block m-r-20">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                        <div class="task-contain">
                                                                            <h6 class="bg-c-blue d-inline-block text-center"></h6>
                                                                            <p class="d-inline-block m-l-20">Sum</p>
                                                                        </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">-</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">634</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">-</p>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">-</p>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- social start -->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-facebook"></i>
                                                        <div class="d-inline-block">
                                                            <h5>facebook</h5>
                                                            <span>blog page timeline</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Active</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Comment</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card dribble-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-dribbble"></i>
                                                        <div class="d-inline-block">
                                                            <h5>dribble</h5>
                                                            <span>Product page analysis</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Live</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Message</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card twitter-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-twitter"></i>
                                                        <div class="d-inline-block">
                                                            <h5>twitter</h5>
                                                            <span>current new timeline</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>25</h2>
                                                                <p class="text-muted">new tweet</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>450+</h2>
                                                                <p class="text-muted">Follower</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- social End -->

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