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
                        <img class="img-40 img-radius" src="{{asset('template/admin/assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
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
                            <!-- Data widget start -->
                            <div class="col-md-12 col-xl-12">
                                <div class="card project-task">

                                    <div class="card-block p-b-10">
                                        <div class="table-responsive">
                                            <tbody>
                                                <!-- Main-body start -->
                                                <div class="main-body">
                                                    <div class="page-wrapper">
                                                        <!-- Page-header start -->
                                                        <div class="page-header card">
                                                            <div class="row align-items-end">
                                                                <div class="col-lg-8">
                                                                    <div class="page-header-title">
                                                                        <i class="icofont icofont-file-code bg-c-blue"></i>
                                                                        <div class="d-inline">
                                                                            <h4>Basic Form Inputs</h4>
                                                                            <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="page-header-breadcrumb">
                                                                        <ul class="breadcrumb-title">
                                                                            <li class="breadcrumb-item">
                                                                                <a href="index.html">
                                                                                    <i class="icofont icofont-home"></i>
                                                                                </a>
                                                                            </li>
                                                                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                                            </li>
                                                                            <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Page-header end -->

                                                        <!-- Page body start -->
                                                        <div class="page-body">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <!-- Basic Form Inputs card start -->
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Basic Form Inputs</h5>
                                                                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

                                                                            <div class="card-header-right">
                                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                                            </div>

                                                                        </div>
                                                                        <div class="card-block">
                                                                            <h4 class="sub-title">Basic Inputs</h4>
                                                                            <form>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Simple Input</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Placeholder</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" placeholder="Type your title in Placeholder">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="password" class="form-control" placeholder="Password input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Read only</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" placeholder="You can't change me" readonly>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Disable Input</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" placeholder="Disabled text" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Predefine
                                                                                        Input</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" value="Enter yout content after me">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Select Box</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select name="select" class="form-control">
                                                                                            <option value="opt1">Select One Value Only</option>
                                                                                            <option value="opt2">Type 2</option>
                                                                                            <option value="opt3">Type 3</option>
                                                                                            <option value="opt4">Type 4</option>
                                                                                            <option value="opt5">Type 5</option>
                                                                                            <option value="opt6">Type 6</option>
                                                                                            <option value="opt7">Type 7</option>
                                                                                            <option value="opt8">Type 8</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Round Input</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control form-control-round" placeholder=".form-control-round">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Maximum
                                                                                        Length</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" placeholder="Content must be in 6 characters" maxlength="6">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Disable
                                                                                        Autocomplete</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" placeholder="Autocomplete Off" autocomplete="off">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Static Text</label>
                                                                                    <div class="col-sm-10">
                                                                                        <div class="form-control-static">Hello !... This is
                                                                                            static text
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Color</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="color" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Upload File</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="file" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2 col-form-label">Textarea</label>
                                                                                    <div class="col-sm-10">
                                                                                        <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Basic Form Inputs card end -->
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