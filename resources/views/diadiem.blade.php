@extends('layout.app')

@section('header')
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#000000">

{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('css/slick-theme.min.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('css/diadiem.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Source+Sans+Pro:400,700&amp;subset=vietnamese">

{{--    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('js/diadiem.js') }}"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-shim.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-sham.js"></script>

@endsection
@section('content')
    <section class="main-ct">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-left">
                        <div class="main-title"><span>Enterprises</span>
                            <h2>Connected to BBi Mall</h2></div>
                        <form class="col-md-11 px-0">
                            <div class="search-tool">
                                <div class="input-group">
                                    <div class="input-group-prepend ico-search">
                                        <div class="city-filter">
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="city-filter-ct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hà Nội</button>
                                                <div class="dropdown-menu default-menu main-menu sm-main-menu animation" aria-labelledby="dropdownMenuButton3"><a class="dropdown-item d-flex justify-content-between" href="/province/4"><span>Thành phố Hà Nội</span><span class="text-muted">257<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/5"><span>Thành phố Hải Phòng</span><span class="text-muted">45<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/9"><span>Tỉnh Bắc Giang</span><span class="text-muted">43<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/57"><span>Tỉnh Thanh Hóa</span><span class="text-muted">37<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/3"><span>Thành phố Đà Nẵng</span><span class="text-muted">26<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/55"><span>Tỉnh Thái Bình</span><span class="text-muted">26<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/56"><span>Tỉnh Thái Nguyên</span><span class="text-muted">25<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/6"><span>Thành phố Hồ Chí Minh</span><span class="text-muted">24<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/12"><span>Tỉnh Bắc Ninh</span><span class="text-muted">22<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/42"><span>Tỉnh Nghệ An</span><span class="text-muted">22<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/29"><span>Tỉnh Hải Dương</span><span class="text-muted">21<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/2"><span>Thành phố Cần Thơ</span><span class="text-muted">18<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/50"><span>Tỉnh Quảng Ninh</span><span class="text-muted">18<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/31"><span>Tỉnh Hoà Bình</span><span class="text-muted">10<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/27"><span>Tỉnh Hà Nam</span><span class="text-muted">8<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/28"><span>Tỉnh Hà Tĩnh</span><span class="text-muted">6<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/63"><span>Tỉnh Vĩnh Phúc</span><span class="text-muted">6<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/38"><span>Tỉnh Lạng Sơn</span><span class="text-muted">4<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/48"><span>Tỉnh Quảng Nam</span><span class="text-muted">4<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/7"><span>Tỉnh An Giang</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/24"><span>Tỉnh Đồng Tháp</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/34"><span>Tỉnh Kiên Giang</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/39"><span>Tỉnh Lào Cai</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/53"><span>Tỉnh Sơn La</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/54"><span>Tỉnh Tây Ninh</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/62"><span>Tỉnh Vĩnh Long</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/64"><span>Tỉnh Yên Bái</span><span class="text-muted">3<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/26"><span>Tỉnh Hà Giang</span><span class="text-muted">2<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/32"><span>Tỉnh Hưng Yên</span><span class="text-muted">2<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/45"><span>Tỉnh Phú Thọ</span><span class="text-muted">2<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/52"><span>Tỉnh Sóc Trăng</span><span class="text-muted">2<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/13"><span>Tỉnh Bến Tre</span><span class="text-muted">1<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/20"><span>Tỉnh Đắk Lắk</span><span class="text-muted">1<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/30"><span>Tỉnh Hậu Giang</span><span class="text-muted">1<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/33"><span>Tỉnh Khánh Hòa</span><span class="text-muted">1<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/36"><span>Tỉnh Lai Châu</span><span class="text-muted">1<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/41"><span>Tỉnh Nam Định</span><span class="text-muted">1<span>Locations</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/49"><span>Tỉnh Quảng Ngãi</span><span class="text-muted">1<span>Locations</span></span></a></div>
                                            </div>
                                        </div>
                                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                                    </div>
                                    <input type="search" class="form-control" id="inlineFormInputGroup" placeholder="Location">
                                    <div class="input-group-prepend ico-send">
                                        <div class="input-group-text"><a><i class="fa fa-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="tag col-md-11 px-0">
                            <ul>
                                <li><a href="all/9">làm đẹp</a></li>
                                <li><a href="all/2">nhà hàng</a></li>
                                <li><a href="all/2">coffee</a></li>
                                <li><a href="all/9">spa</a></li>
                                <li><a href="all/24">khách sạn</a></li>
                                <li><a href="all/3">cafe</a></li>
                                <li><a href="all/1">quán ăn</a></li>
                                <li><a href="all/2">ăn uống</a></li>
                            </ul>
                        </div>
                        <div class="col-md-9 px-0 download">
                            <p class="text-center">Earning points up to 100% when consumption via BBi Mall</p>
                            <div class="row">
                                <div class="col-6 pr-1">
                                    <a href="https://itunes.apple.com/us/app/bbi-mall/id1407571710" class="d-block" rel="noopener noreferrer" target="_blank"><img src="images/btn-ios.png" alt="iOS" class="w-100"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="col-right">
                        <div class="category thumbnail-slide mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>Featured</span></h4><a href="/list-all?status=featured" class="align-self-center"><span>View all</span> (10)</a></div>
                            </div>
                            <div class="list-ct resCarousel">
                                <div class="list-wrap resCarousel-inner">
                                    <div class="slick-slider home-slider hidden-sm-down slick-initialized" dir="ltr">
                                        <button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
                                        <div class="slick-list">
                                            <div class="slick-track" style="width: 3772px; opacity: 1; transform: translate3d(-492px, 0px, 0px);">
                                                <div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/3/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9cdac798-2e8f-431b-b7ae-2917b7a0dd25.jpg" alt="DINH HOTEL" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>DINH HOTEL</h5>
                                                                <p class="card-text"><small class="text-muted">Số 2, ngõ 248 Hoàng Ngân, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/515/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9b1658a3-93f5-4315-ad9c-e0aff653b1ec.jpg" alt="Huy Mobile" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Huy Mobile</h5>
                                                                <p class="card-text"><small class="text-muted">Hữu Ái, Xã Tân Lãng, Huyện Lương Tài, Tỉnh Bắc Ninh</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/4/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/e21f2ddd-c8a1-4cf4-b0fe-2b8d2260b49d.jpg" alt="Elodie Nail &amp; Spa Relax" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Elodie Nail &amp; Spa Relax</h5>
                                                                <p class="card-text"><small class="text-muted">Ngõ 90, số nhà 12 Ngụy Như Kon tum, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/256/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/aae830d3-3ab7-4fef-aebc-813a13715351.jpg" alt="Gà không lối thoát" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Gà không lối thoát</h5>
                                                                <p class="card-text"><small class="text-muted">Số nhà 5B, ngõ 5, Ao Sen, Phường Mộ Lao, Quận Hà Đông, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/512/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/99d2deda-d203-43a6-aa4f-d38c74ca9f75.jpg" alt="Nội thất ô tô Qúy Hùng" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Nội thất ô tô Qúy Hùng</h5>
                                                                <p class="card-text"><small class="text-muted">Khu 1, phường Yên Thanh, TP Uông Bí, tỉnh Quảng Ninh, Phường Yên Thanh, Thành phố Uông Bí, Tỉnh Quảng Ninh</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/1/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/74f270b9-94de-44f1-9a97-3999e9a9d449.jpg" alt="AMARONE COFFEE" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>AMARONE COFFEE</h5>
                                                                <p class="card-text"><small class="text-muted">AMARONE COFFEE. Tầng 1,tòa nhà 17T11 Nguyễn Thị Định, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/257/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/42ed4209-a894-44a8-afe3-bb02a862accc.jpeg" alt="Siêu thị điện máy Minh Quân" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Siêu thị điện máy Minh Quân</h5>
                                                                <p class="card-text"><small class="text-muted">Đường Nguyễn Du, thị trấn Quỳnh Côi, huyện Quỳnh Phụ, tỉnh Thái Bình, Thị trấn Quỳnh Côi, Huyện Quỳnh Phụ, Tỉnh Thái Bình</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/513/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/51a6eb69-4648-448f-b895-433dde79fe77.jpg" alt="Joys Coffee" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Joys Coffee</h5>
                                                                <p class="card-text"><small class="text-muted">Số 81/343 Đội Cấn, Ba Đình, HN, Phường Đội Cấn, Quận Ba Đình, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/2/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/395154e9-19d7-451b-801c-e7c006146aa0.jpg" alt="Máy tính Việt Nhật" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Máy tính Việt Nhật</h5>
                                                                <p class="card-text"><small class="text-muted">Số 307 Cát Bi, Phường Cát Bi, Quận Hải An, Thành phố Hải Phòng</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="6" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/514/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/d84cec42-c937-4ffe-85a3-ee94b932e3fe.jpg" alt="Công ty TNHH Thương mại An Chuẩn" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty TNHH Thương mại An Chuẩn</h5>
                                                                <p class="card-text"><small class="text-muted">Số 195/193 Văn Cao, Phường Đằng Lâm, Quận Hải An, Thành phố Hải Phòng</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/3/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9cdac798-2e8f-431b-b7ae-2917b7a0dd25.jpg" alt="DINH HOTEL" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>DINH HOTEL</h5>
                                                                <p class="card-text"><small class="text-muted">Số 2, ngõ 248 Hoàng Ngân, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="8" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/515/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9b1658a3-93f5-4315-ad9c-e0aff653b1ec.jpg" alt="Huy Mobile" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Huy Mobile</h5>
                                                                <p class="card-text"><small class="text-muted">Hữu Ái, Xã Tân Lãng, Huyện Lương Tài, Tỉnh Bắc Ninh</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="9" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/4/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/e21f2ddd-c8a1-4cf4-b0fe-2b8d2260b49d.jpg" alt="Elodie Nail &amp; Spa Relax" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Elodie Nail &amp; Spa Relax</h5>
                                                                <p class="card-text"><small class="text-muted">Ngõ 90, số nhà 12 Ngụy Như Kon tum, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/256/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/aae830d3-3ab7-4fef-aebc-813a13715351.jpg" alt="Gà không lối thoát" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Gà không lối thoát</h5>
                                                                <p class="card-text"><small class="text-muted">Số nhà 5B, ngõ 5, Ao Sen, Phường Mộ Lao, Quận Hà Đông, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/512/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/99d2deda-d203-43a6-aa4f-d38c74ca9f75.jpg" alt="Nội thất ô tô Qúy Hùng" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Nội thất ô tô Qúy Hùng</h5>
                                                                <p class="card-text"><small class="text-muted">Khu 1, phường Yên Thanh, TP Uông Bí, tỉnh Quảng Ninh, Phường Yên Thanh, Thành phố Uông Bí, Tỉnh Quảng Ninh</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/1/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/74f270b9-94de-44f1-9a97-3999e9a9d449.jpg" alt="AMARONE COFFEE" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>AMARONE COFFEE</h5>
                                                                <p class="card-text"><small class="text-muted">AMARONE COFFEE. Tầng 1,tòa nhà 17T11 Nguyễn Thị Định, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/257/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/42ed4209-a894-44a8-afe3-bb02a862accc.jpeg" alt="Siêu thị điện máy Minh Quân" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Siêu thị điện máy Minh Quân</h5>
                                                                <p class="card-text"><small class="text-muted">Đường Nguyễn Du, thị trấn Quỳnh Côi, huyện Quỳnh Phụ, tỉnh Thái Bình, Thị trấn Quỳnh Côi, Huyện Quỳnh Phụ, Tỉnh Thái Bình</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="14" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/513/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/51a6eb69-4648-448f-b895-433dde79fe77.jpg" alt="Joys Coffee" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Joys Coffee</h5>
                                                                <p class="card-text"><small class="text-muted">Số 81/343 Đội Cấn, Ba Đình, HN, Phường Đội Cấn, Quận Ba Đình, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="15" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/2/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/395154e9-19d7-451b-801c-e7c006146aa0.jpg" alt="Máy tính Việt Nhật" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Máy tính Việt Nhật</h5>
                                                                <p class="card-text"><small class="text-muted">Số 307 Cát Bi, Phường Cát Bi, Quận Hải An, Thành phố Hải Phòng</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="16" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/514/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/d84cec42-c937-4ffe-85a3-ee94b932e3fe.jpg" alt="Công ty TNHH Thương mại An Chuẩn" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty TNHH Thương mại An Chuẩn</h5>
                                                                <p class="card-text"><small class="text-muted">Số 195/193 Văn Cao, Phường Đằng Lâm, Quận Hải An, Thành phố Hải Phòng</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="17" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/3/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9cdac798-2e8f-431b-b7ae-2917b7a0dd25.jpg" alt="DINH HOTEL" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>DINH HOTEL</h5>
                                                                <p class="card-text"><small class="text-muted">Số 2, ngõ 248 Hoàng Ngân, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="18" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/515/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9b1658a3-93f5-4315-ad9c-e0aff653b1ec.jpg" alt="Huy Mobile" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Huy Mobile</h5>
                                                                <p class="card-text"><small class="text-muted">Hữu Ái, Xã Tân Lãng, Huyện Lương Tài, Tỉnh Bắc Ninh</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="19" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/4/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/e21f2ddd-c8a1-4cf4-b0fe-2b8d2260b49d.jpg" alt="Elodie Nail &amp; Spa Relax" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Elodie Nail &amp; Spa Relax</h5>
                                                                <p class="card-text"><small class="text-muted">Ngõ 90, số nhà 12 Ngụy Như Kon tum, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category thumbnail-slide mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>New enterprises</span></h4><a href="/list-all?status=new" class="align-self-center"><span>View all</span> (10)</a></div>
                            </div>
                            <div class="list-ct resCarousel">
                                <div class="list-wrap resCarousel-inner">
                                    <div class="slick-slider home-slider hidden-sm-down slick-initialized" dir="ltr">
                                        <button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
                                        <div class="slick-list">
                                            <div class="slick-track" style="width: 3772px; opacity: 1; transform: translate3d(-1148px, 0px, 0px);">
                                                <div data-index="-3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/688/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/4dbd5d0c-1bbf-4155-beec-adc6946b4970.jpg" alt="Siêu thị Gốm Sứ Bát Tràng - Family Mart" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Siêu thị Gốm Sứ Bát Tràng - Family Mart</h5>
                                                                <p class="card-text"><small class="text-muted">Số 248+ 250 đường Nguyễn Công Hãng, Phường Trần Nguyên Hãn, Thành phố Bắc Giang, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="-2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/687/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9a8bce59-56eb-496d-bbc7-d1f834128dd0.jpg" alt="Dịch vụ xây dựng Nguyễn Văn Hải" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Dịch vụ xây dựng Nguyễn Văn Hải</h5>
                                                                <p class="card-text"><small class="text-muted">Thôn Kép, Xã Hương Gián, Huyện Yên Dũng, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/686/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/f493ab00-95cb-431c-ba03-da7f037081aa.jpg" alt="TTPP gas và bếp gas Trường Giang" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>TTPP gas và bếp gas Trường Giang</h5>
                                                                <p class="card-text"><small class="text-muted">Lô số 65B đường Trần Quang Khải, Phường Thọ Xương, Thành phố Bắc Giang, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/696/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/d6badccf-a528-4650-9482-7bab311fc2f4.jpg" alt="Công ty Cổ phần Nội thất nhỏ Yourmini" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty Cổ phần Nội thất nhỏ Yourmini</h5>
                                                                <p class="card-text"><small class="text-muted">Số 45 phố Hàng Bài, Phường Hàng Bài, Quận Hoàn Kiếm, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/694/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/0ee04d68-d67c-4614-9249-b070a12066c1.jpg" alt="Trung Tâm Phối Và Pha Màu Sơn Tự Động Hưng Liễu" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Trung Tâm Phối Và Pha Màu Sơn Tự Động Hưng Liễu</h5>
                                                                <p class="card-text"><small class="text-muted">Thôn Đông Định, Xã Thái Hòa, Huyện Lập Thạch, Tỉnh Vĩnh Phúc</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/693/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/3d2c3892-34ff-4d6e-9f0d-7600b0d6c9ac.jpg" alt="Học việnThẩm Mỹ Dontra" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Học việnThẩm Mỹ Dontra</h5>
                                                                <p class="card-text"><small class="text-muted">Số 42 đường Nguyễn Hoàng, Phường Mỹ Đình 2, Quận Nam Từ Liêm, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/692/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/562d03f5-8778-444f-83f0-eaa7948af6f4.jpg" alt="Công ty Cổ Phần INCA Việt Nam" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty Cổ Phần INCA Việt Nam</h5>
                                                                <p class="card-text"><small class="text-muted">Số 89B, Đường Bùi Thị Xuân, Tổ 24, Phường Hữu Nghị, Thành phố Hòa Bình, Tỉnh Hoà Bình</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="4" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/691/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/da0b0fe1-8a0e-4455-96e5-f54c351c313c.jpg" alt="SHOP HUYỀN" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>SHOP HUYỀN</h5>
                                                                <p class="card-text"><small class="text-muted">số 112 Phú Thọ 3, Phường Phú Sơn, Thành phố Thanh Hóa, Tỉnh Thanh Hóa</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="5" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/690/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/50241173-bbbd-4b05-87d0-c45e65a0b04d.jpg" alt="Công ty Cổ phần Giáo dục Kila" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty Cổ phần Giáo dục Kila</h5>
                                                                <p class="card-text"><small class="text-muted">Số 64 đường Bắc Sơn, Phường Hoàng Văn Thụ, Thành phố Thái Nguyên, Tỉnh Thái Nguyên</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="6" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/689/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/afe4652d-f437-4165-90f8-f319d76b50cf.jpg" alt="Công ty TNHH Thương Mại Đỗ Thắng" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty TNHH Thương Mại Đỗ Thắng</h5>
                                                                <p class="card-text"><small class="text-muted">Số 9 Hoàng Hoa Thám, TP Hải Dương, Phường Nguyễn Trãi, Thành phố Hải Dương, Tỉnh Hải Dương</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="7" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/688/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/4dbd5d0c-1bbf-4155-beec-adc6946b4970.jpg" alt="Siêu thị Gốm Sứ Bát Tràng - Family Mart" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Siêu thị Gốm Sứ Bát Tràng - Family Mart</h5>
                                                                <p class="card-text"><small class="text-muted">Số 248+ 250 đường Nguyễn Công Hãng, Phường Trần Nguyên Hãn, Thành phố Bắc Giang, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="8" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/687/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9a8bce59-56eb-496d-bbc7-d1f834128dd0.jpg" alt="Dịch vụ xây dựng Nguyễn Văn Hải" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Dịch vụ xây dựng Nguyễn Văn Hải</h5>
                                                                <p class="card-text"><small class="text-muted">Thôn Kép, Xã Hương Gián, Huyện Yên Dũng, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="9" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/686/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/f493ab00-95cb-431c-ba03-da7f037081aa.jpg" alt="TTPP gas và bếp gas Trường Giang" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>TTPP gas và bếp gas Trường Giang</h5>
                                                                <p class="card-text"><small class="text-muted">Lô số 65B đường Trần Quang Khải, Phường Thọ Xương, Thành phố Bắc Giang, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/696/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/d6badccf-a528-4650-9482-7bab311fc2f4.jpg" alt="Công ty Cổ phần Nội thất nhỏ Yourmini" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty Cổ phần Nội thất nhỏ Yourmini</h5>
                                                                <p class="card-text"><small class="text-muted">Số 45 phố Hàng Bài, Phường Hàng Bài, Quận Hoàn Kiếm, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/694/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/0ee04d68-d67c-4614-9249-b070a12066c1.jpg" alt="Trung Tâm Phối Và Pha Màu Sơn Tự Động Hưng Liễu" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Trung Tâm Phối Và Pha Màu Sơn Tự Động Hưng Liễu</h5>
                                                                <p class="card-text"><small class="text-muted">Thôn Đông Định, Xã Thái Hòa, Huyện Lập Thạch, Tỉnh Vĩnh Phúc</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="12" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/693/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/3d2c3892-34ff-4d6e-9f0d-7600b0d6c9ac.jpg" alt="Học việnThẩm Mỹ Dontra" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Học việnThẩm Mỹ Dontra</h5>
                                                                <p class="card-text"><small class="text-muted">Số 42 đường Nguyễn Hoàng, Phường Mỹ Đình 2, Quận Nam Từ Liêm, Thành phố Hà Nội</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="13" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/692/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/562d03f5-8778-444f-83f0-eaa7948af6f4.jpg" alt="Công ty Cổ Phần INCA Việt Nam" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty Cổ Phần INCA Việt Nam</h5>
                                                                <p class="card-text"><small class="text-muted">Số 89B, Đường Bùi Thị Xuân, Tổ 24, Phường Hữu Nghị, Thành phố Hòa Bình, Tỉnh Hoà Bình</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="14" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/691/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/da0b0fe1-8a0e-4455-96e5-f54c351c313c.jpg" alt="SHOP HUYỀN" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>SHOP HUYỀN</h5>
                                                                <p class="card-text"><small class="text-muted">số 112 Phú Thọ 3, Phường Phú Sơn, Thành phố Thanh Hóa, Tỉnh Thanh Hóa</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="15" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/690/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/50241173-bbbd-4b05-87d0-c45e65a0b04d.jpg" alt="Công ty Cổ phần Giáo dục Kila" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty Cổ phần Giáo dục Kila</h5>
                                                                <p class="card-text"><small class="text-muted">Số 64 đường Bắc Sơn, Phường Hoàng Văn Thụ, Thành phố Thái Nguyên, Tỉnh Thái Nguyên</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="16" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/689/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/afe4652d-f437-4165-90f8-f319d76b50cf.jpg" alt="Công ty TNHH Thương Mại Đỗ Thắng" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Công ty TNHH Thương Mại Đỗ Thắng</h5>
                                                                <p class="card-text"><small class="text-muted">Số 9 Hoàng Hoa Thám, TP Hải Dương, Phường Nguyễn Trãi, Thành phố Hải Dương, Tỉnh Hải Dương</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="17" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/688/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/4dbd5d0c-1bbf-4155-beec-adc6946b4970.jpg" alt="Siêu thị Gốm Sứ Bát Tràng - Family Mart" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Siêu thị Gốm Sứ Bát Tràng - Family Mart</h5>
                                                                <p class="card-text"><small class="text-muted">Số 248+ 250 đường Nguyễn Công Hãng, Phường Trần Nguyên Hãn, Thành phố Bắc Giang, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="18" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/687/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9a8bce59-56eb-496d-bbc7-d1f834128dd0.jpg" alt="Dịch vụ xây dựng Nguyễn Văn Hải" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>Dịch vụ xây dựng Nguyễn Văn Hải</h5>
                                                                <p class="card-text"><small class="text-muted">Thôn Kép, Xã Hương Gián, Huyện Yên Dũng, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-index="19" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 164px;">
                                                    <div>
                                                        <div class="item" tabindex="-1" style="width: 100%; display: inline-block;">
                                                            <a class="home-banner" href="/agency/686/detail/"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/f493ab00-95cb-431c-ba03-da7f037081aa.jpg" alt="TTPP gas và bếp gas Trường Giang" style="height: 144px; width: 100%; padding-right: 5px;">
                                                                <h5>TTPP gas và bếp gas Trường Giang</h5>
                                                                <p class="card-text"><small class="text-muted">Lô số 65B đường Trần Quang Khải, Phường Thọ Xương, Thành phố Bắc Giang, Tỉnh Bắc Giang</small></p>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>Connected enterprises</span></h4><a href="/list-all"><span>View all</span> (661)</a></div>
                            </div>
                            <div class="list-ct">
                                <div class="row no-gutters list-wrap">
                                    <div class="col-md-4 item">
                                        <a href="/agency/256/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/aae830d3-3ab7-4fef-aebc-813a13715351.jpg&quot;);"></div>
                                            <h5>Gà không lối thoát</h5>
                                            <p class="card-text"><small class="text-muted">Số nhà 5B, ngõ 5, Ao Sen, Phường Mộ Lao, Quận Hà Đông, Thành phố Hà Nội</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/512/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/99d2deda-d203-43a6-aa4f-d38c74ca9f75.jpg&quot;);"></div>
                                            <h5>Nội thất ô tô Qúy Hùng</h5>
                                            <p class="card-text"><small class="text-muted">Khu 1, phường Yên Thanh, TP Uông Bí, tỉnh Quảng Ninh, Phường Yên Thanh, Thành phố Uông Bí, Tỉnh Quảng Ninh</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/1/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/74f270b9-94de-44f1-9a97-3999e9a9d449.jpg&quot;);"></div>
                                            <h5>AMARONE COFFEE</h5>
                                            <p class="card-text"><small class="text-muted">AMARONE COFFEE. Tầng 1,tòa nhà 17T11 Nguyễn Thị Định, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/257/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/42ed4209-a894-44a8-afe3-bb02a862accc.jpeg&quot;);"></div>
                                            <h5>Siêu thị điện máy Minh Quân</h5>
                                            <p class="card-text"><small class="text-muted">Đường Nguyễn Du, thị trấn Quỳnh Côi, huyện Quỳnh Phụ, tỉnh Thái Bình, Thị trấn Quỳnh Côi, Huyện Quỳnh Phụ, Tỉnh Thái Bình</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/513/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/51a6eb69-4648-448f-b895-433dde79fe77.jpg&quot;);"></div>
                                            <h5>Joys Coffee</h5>
                                            <p class="card-text"><small class="text-muted">Số 81/343 Đội Cấn, Ba Đình, HN, Phường Đội Cấn, Quận Ba Đình, Thành phố Hà Nội</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/2/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/395154e9-19d7-451b-801c-e7c006146aa0.jpg&quot;);"></div>
                                            <h5>Máy tính Việt Nhật</h5>
                                            <p class="card-text"><small class="text-muted">Số 307 Cát Bi, Phường Cát Bi, Quận Hải An, Thành phố Hải Phòng</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/514/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/d84cec42-c937-4ffe-85a3-ee94b932e3fe.jpg&quot;);"></div>
                                            <h5>Công ty TNHH Thương mại An Chuẩn</h5>
                                            <p class="card-text"><small class="text-muted">Số 195/193 Văn Cao, Phường Đằng Lâm, Quận Hải An, Thành phố Hải Phòng</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/3/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/9cdac798-2e8f-431b-b7ae-2917b7a0dd25.jpg&quot;);"></div>
                                            <h5>DINH HOTEL</h5>
                                            <p class="card-text"><small class="text-muted">Số 2, ngõ 248 Hoàng Ngân, Phường Trung Hoà, Quận Cầu Giấy, Thành phố Hà Nội</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/515/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/9b1658a3-93f5-4315-ad9c-e0aff653b1ec.jpg&quot;);"></div>
                                            <h5>Huy Mobile</h5>
                                            <p class="card-text"><small class="text-muted">Hữu Ái, Xã Tân Lãng, Huyện Lương Tài, Tỉnh Bắc Ninh</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/4/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/e21f2ddd-c8a1-4cf4-b0fe-2b8d2260b49d.jpg&quot;);"></div>
                                            <h5>Elodie Nail &amp; Spa Relax</h5>
                                            <p class="card-text"><small class="text-muted">Ngõ 90, số nhà 12 Ngụy Như Kon tum, Phường Nhân Chính, Quận Thanh Xuân, Thành phố Hà Nội</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/260/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/4978a6ef-9efd-455a-8f21-b883b861b502.jpg&quot;);"></div>
                                            <h5>Công ty TNHH một thành viên thiết bị công nghệ Việt Thái</h5>
                                            <p class="card-text"><small class="text-muted">Số nhà 294 đường Trường Chinh, thị trấn Thắng, huyện Hiệp Hòa, tỉnh Bắc Giang, Thị trấn Thắng, Huyện Hiệp Hòa, Tỉnh Bắc Giang</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/516/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/924a11ea-499a-48f5-996e-783404d53d05.jpg&quot;);"></div>
                                            <h5>Lá xanh Coffee</h5>
                                            <p class="card-text"><small class="text-muted">DH7, đường Vũ Đình Liệu, khu nhà ở Nam Long,, Phường Hưng Thạnh, Quận Cái Răng, Thành phố Cần Thơ</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/5/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/dd280b4f-101b-4da6-96e0-69b39999d83c.jpg&quot;);"></div>
                                            <h5>SPA THU ANH</h5>
                                            <p class="card-text"><small class="text-muted">32 khu tập thể CK75, Xã Tả Thanh Oai, Huyện Thanh Trì, Thành phố Hà Nội</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/261/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/6507c1ef-4126-4eb8-a5bb-981df697374a.jpg&quot;);"></div>
                                            <h5>Điện máy Trường Thùy</h5>
                                            <p class="card-text"><small class="text-muted">Phố Chợ Đồn, Kha Sơn, Phú Bình, Thái Nguyên, Xã Kha Sơn, Huyện Phú Bình, Tỉnh Thái Nguyên</small></p>
                                        </a>
                                    </div>
                                    <div class="col-md-4 item">
                                        <a href="/agency/517/detail/">
                                            <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/76368099-7bab-4e97-8bf0-c213f62f4076.jpg&quot;);"></div>
                                            <h5>Quang Đạt Hotel</h5>
                                            <p class="card-text"><small class="text-muted">Tầng 3, tòa nhà 7 tầng Khách sạn Quang Đạt New World, đường Phù Liễn, tổ 19, Phường Hoàng Văn Thụ, Thành phố Thái Nguyên, Tỉnh Thái Nguyên</small></p>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center my-3"><a class="align-self-center d-inline-block px-5 py-2 bg-light rounded text-dark font-weight-bold border" href="/list-all"><span>View all</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="text-center">
                    <h5 class="mb-1 font-weight-bold">Công ty Cổ phần Công nghệ Internet BBi Việt Nam</h5>
                    <p class="mb-1 text-sm">Địa chỉ: Số 57, Đường Nguyễn Quốc Trị, P. Trung Hòa, Quận Cầu Giấy, Hà Nội - Hotline: 024.7102.9998</p>
                    <ul class="social">
                        <li><a href="mailto:hotro@bbivietnam.vn" class="px-1"><i class="fa fa-envelope-o"></i></a></li>
                        <li><a href="https://www.facebook.com/bbivietnam" target="_blank" rel="noopener noreferrer" class="px-1"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="http://app.bbivietnam.vn" target="_blank" rel="noopener noreferrer" class="px-1"><i class="fa fa-internet-explorer"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </section>
@endsection
