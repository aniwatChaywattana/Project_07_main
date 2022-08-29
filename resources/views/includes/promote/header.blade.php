<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <!-- <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small> -->
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{url ('/')}}" class="nav-item nav-link active">หน้าแรก</a>
                    <a href="{{url ('/about')}}" class="nav-item nav-link">เกี่ยวกับ</a>
                
                    <div class="nav-item dropdown">
                        <a href="product.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">สินค้า</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url ('/product')}}" class="dropdown-item">สินค้าทั้งหมด</a>
                            <a href="product02.php" class="dropdown-item">สินค้าฤดู</a>
                            <a href="product03.php" class="dropdown-item">สินค้าฤดู</a>
                            <a href="product04.php" class="dropdown-item">สินค้าฤดู</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">อื่นๆ</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.php" class="dropdown-item">บทความน่าสนใจอื่นๆ</a>
                            <a href="feature.php" class="dropdown-item">เกี่ยวกับสินค้าของเรา</a>
                            <a href="testimonial.php" class="dropdown-item">ความคิดเห็นจากผู้ใช้บริการ</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{url ('/contact')}}" class="nav-item nav-link">ติดต่อ</a>
                </div>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/admin/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">admin</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
                
                @endif
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="about.php">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="{{url ('/login')}}">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="product.php">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>