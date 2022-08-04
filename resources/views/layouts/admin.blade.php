<!DOCTYPE html>
<html>
<head>
   @include('includes.admin.head')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded"> 
        <div class="pcoded-overlay-box">
        </div>
        <div class="pcoded-container navbar-wrapper">
            @include('includes.admin.header_sidebar')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('includes.admin.header_navbar') 
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
 
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->

    <script type="text/javascript" src="{{asset('template/admin/assets/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/admin/assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/admin/assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/admin/assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('template/admin/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('template/admin/assets/js/modernizr/modernizr.js')}}"></script>
    <!-- am chart -->
    <script src="{{asset('template/admin/assets/pages/widget/amchart/amcharts.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/pages/widget/amchart/serial.min.js')}}"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="{{asset('template/admin/assets/pages/todo/todo.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('template/admin/assets/pages/dashboard/custom-dashboard.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/admin/assets/js/script.js')}}"></script>
    <script type="text/javascript " src="{{asset('template/admin/assets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/demo-12.js')}}"></script>
    <script src="{{asset('template/admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function () {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            }
            else {
                nav.removeClass('active');
            }
        });
    </script>


</body>

</html>