@extends('layouts.promote')
@section('content')

 <!-- Page Header Start -->
 <div style="background :  url({{asset('images/carousel-1.jpg')}} ) top right no-repeat;" class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 style="font-family:'Sriracha', cursive ;" class="display-3 mb-3 animated slideInDown">เกี่ยวกับพวกเรา</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="#">หน้าแรก</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">เกี่ยวกับพวกเรา</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- About Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{asset('images/about.jpg')}} ">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">คุณน้อยคล้ายแย้ม </h1>
                    <p class="mb-4">คุณน้อยผลไม้เป็นร้านขายผลไม้ ที่สร้างโดยคุณน้อยผลไม้ โดยสินค้าภายในร้านนั้นจะถูกคัดสรรมาเป็นอย่าดีจากสวนที่คุณน้อยนั้นได้นำมาขายและจะถูกคุณน้อยคัดสรรอีกทีเมื่อถึงหน้าร้านเพื่อให้ได้คุณภาพ ตามที่ลูกค้านั้นต้องการ</p>
                    <p><i class="fa fa-check text-primary me-3"></i>สดใหม่</p>
                    <p><i class="fa fa-check text-primary me-3"></i>อร่อยถูกใจ</p>
                    <p><i class="fa fa-check text-primary me-3"></i>ได้คุณภาพ</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">อ่านเพิ่มเติม</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1  class="display-5 text-white mb-3">ติดต่อกับร้าค้า</h1>
                    <p class="text-white mb-0">ร้านค้าของเราตั้งอยู่ที่ 24 ซอย ประชาราษฏร์ 5 ตำบล ตลาดขวัญ อำเภอเมืองนนทบุรี นนทบุรี 11000</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="{{url ('/contact')}}">ติดต่อกับพวกเรา</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">เกี่ยวกับสินค้าของเรา</h1>
                <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{asset('images/icon-1.png')}}" alt="">
                        <h4 class="mb-3">สถานที่นำเข้าผลไม้</h4>
                        <p class="mb-4">ทางร้านค้าของเราได้ทำการคัดสรรคสวนที่ปลูกผลไม้อย่างดีเพื่อให้ได้ผลไม้ที่มีคุณภาพที่สุด</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.talaadthai.com/">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{asset('images/icon-2.png')}} " alt="">
                        <h4 class="mb-3">วิธีที่เราดูแล และ ปลูกผลไม้ </h4>
                        <p class="mb-4">เราได้คัดสรรคและคัดแยกวิธีการปลูกเป็นอย่างดี เพื่อให้ลูกค้าของเราได้ของที่สดใหม่ ปลอดภัยไร้สารพิษ</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.kasetkaoklai.com/home/2019/04/7-%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%94%E0%B8%B9%E0%B9%81%E0%B8%A5%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B2%E0%B9%84%E0%B8%A1%E0%B9%89%E0%B8%9C%E0%B8%A5%E0%B8%8A%E0%B9%88%E0%B8%A7%E0%B8%87/">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="{{asset('images/icon-3.png')}} " alt="">
                        <h4 class="mb-3">วิธีการคัดแยกสินค้า</h4>
                        <p class="mb-4">เราได้คัดสรรคเป็นอย่างดีเพื่อให้ลูกค้าเราพึงพอใจมากที่สุด</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="https://www.foodnetworksolution.com/wiki/word/3240/%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%84%E0%B8%B1%E0%B8%94%E0%B8%82%E0%B8%99%E0%B8%B2%E0%B8%94-sizing">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

@stop