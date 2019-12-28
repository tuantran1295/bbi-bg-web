@extends('layout.app')

@section('header')
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="generator" content="Bootply">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="theme-color" content="#000000">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Source+Sans+Pro:400,700&amp;subset=vietnamese">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-shim.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-sham.js"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endsection
@section('content')
    <section class="main-ct">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-left">
                        <div class="main-title"><span>Doanh nghiệp</span>
                            <h2>Đã kết nối với ứng dụng BBI Mall</h2></div>
                        <form class="col-md-11 px-0">
                            <div class="search-tool">
                                <div class="input-group">
                                    <div class="input-group-prepend ico-search">
                                        <div class="city-filter">
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="city-filter-ct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hà Nội</button>
                                                <div class="dropdown-menu default-menu main-menu sm-main-menu animation" aria-labelledby="dropdownMenuButton3"><a class="dropdown-item d-flex justify-content-between" href="/province/4"><span>Thành phố Hà Nội</span><span class="text-muted">262<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/9"><span>Tỉnh Bắc Giang</span><span class="text-muted">51<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/5"><span>Thành phố Hải Phòng</span><span class="text-muted">46<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/57"><span>Tỉnh Thanh Hóa</span><span class="text-muted">41<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/56"><span>Tỉnh Thái Nguyên</span><span class="text-muted">32<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/55"><span>Tỉnh Thái Bình</span><span class="text-muted">29<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/3"><span>Thành phố Đà Nẵng</span><span class="text-muted">26<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/12"><span>Tỉnh Bắc Ninh</span><span class="text-muted">25<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/6"><span>Thành phố Hồ Chí Minh</span><span class="text-muted">24<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/29"><span>Tỉnh Hải Dương</span><span class="text-muted">23<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/42"><span>Tỉnh Nghệ An</span><span class="text-muted">22<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/50"><span>Tỉnh Quảng Ninh</span><span class="text-muted">20<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/2"><span>Thành phố Cần Thơ</span><span class="text-muted">18<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/31"><span>Tỉnh Hoà Bình</span><span class="text-muted">10<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/27"><span>Tỉnh Hà Nam</span><span class="text-muted">8<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/28"><span>Tỉnh Hà Tĩnh</span><span class="text-muted">6<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/63"><span>Tỉnh Vĩnh Phúc</span><span class="text-muted">6<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/41"><span>Tỉnh Nam Định</span><span class="text-muted">5<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/38"><span>Tỉnh Lạng Sơn</span><span class="text-muted">4<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/48"><span>Tỉnh Quảng Nam</span><span class="text-muted">4<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/7"><span>Tỉnh An Giang</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/24"><span>Tỉnh Đồng Tháp</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/34"><span>Tỉnh Kiên Giang</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/39"><span>Tỉnh Lào Cai</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/53"><span>Tỉnh Sơn La</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/54"><span>Tỉnh Tây Ninh</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/62"><span>Tỉnh Vĩnh Long</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/64"><span>Tỉnh Yên Bái</span><span class="text-muted">3<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/26"><span>Tỉnh Hà Giang</span><span class="text-muted">2<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/32"><span>Tỉnh Hưng Yên</span><span class="text-muted">2<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/45"><span>Tỉnh Phú Thọ</span><span class="text-muted">2<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/52"><span>Tỉnh Sóc Trăng</span><span class="text-muted">2<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/13"><span>Tỉnh Bến Tre</span><span class="text-muted">1<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/20"><span>Tỉnh Đắk Lắk</span><span class="text-muted">1<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/23"><span>Tỉnh Đồng Nai</span><span class="text-muted">1<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/30"><span>Tỉnh Hậu Giang</span><span class="text-muted">1<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/33"><span>Tỉnh Khánh Hòa</span><span class="text-muted">1<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/36"><span>Tỉnh Lai Châu</span><span class="text-muted">1<span>Địa điểm</span></span></a><a class="dropdown-item d-flex justify-content-between" href="/province/49"><span>Tỉnh Quảng Ngãi</span><span class="text-muted">1<span>Địa điểm</span></span></a></div>
                                            </div>
                                        </div>
                                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                                    </div>
                                    <input type="search" class="form-control" id="inlineFormInputGroup" placeholder="Tìm địa điểm">
                                    <div class="input-group-prepend ico-send">
                                        <div class="input-group-text"><a><i class="fa fa-chevron-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="tag col-md-11 px-0">
                            <ul>
                                @foreach ($categories as $category)
                                    @if ($category->id < 8)
                                        <li><a href="category/{{$category->id}}">{{$category->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-9 px-0 download">
                            <p class="text-center">Nhận ngay tích điểm đến 100% khi tiêu dùng thông qua ứng dụng BBi Mall</p>
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
                                    <h4><span>Doanh nghiệp tiêu biểu</span></h4><a href="/list-all?status=featured" class="align-self-center"><span>xem tất cả</span> (10)</a></div>
                            </div>
                            {{--Carousel here--}}
                            <div class="list-ct">
                                <div class="list-wrap">
                                    <div class="home-slider">
                                        @foreach($companies as $company)
                                            @if($company-> id < 11)
                                                <div class="item">
                                                    <a class="home-banner" href="company/{{$company->id}}"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9b1658a3-93f5-4315-ad9c-e0aff653b1ec.jpg" alt="{{$company->name}}" style="height: 144px; width: 100%; padding-right: 5px;">
                                                        <h5>{{$company->name}}</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category thumbnail-slide mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>Doanh nghiệp mới kết nối</span></h4><a href="/list-all?status=new" class="align-self-center"><span>xem tất cả</span> (10)</a></div>
                            </div>
                            {{--Carousel here--}}
                            <div class="list-ct">
                                <div class="list-wrap">
                                    <div class="home-slider">
                                        @foreach($companies as $company)
                                            @if($company-> id > 11 && $company->id < 21)
                                                <div class="item">
                                                    <a class="home-banner" href="company/{{$company->id}}"><img class="img-responsive" src="http://diadiem.bbivietnam.vn/api/uploads/9b1658a3-93f5-4315-ad9c-e0aff653b1ec.jpg" alt="{{$company->name}}" style="height: 144px; width: 100%; padding-right: 5px;">
                                                        <h5>{{$company->name}}</h5>
                                                        <p class="card-text"><small class="text-muted"></small></p>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>Doanh nghiệp đã kết nối</span></h4><a href="/list-all"><span>xem tất cả</span> (707)</a></div>
                            </div>
                            <div class="list-ct">
                                <div class="row no-gutters list-wrap">
                                    @foreach($companies as $company)
                                        @if($company->id > 21)
                                            <div class="col-md-4 item">
                                                <a href="company/{{$company->id}}}">
                                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/aae830d3-3ab7-4fef-aebc-813a13715351.jpg&quot;);"></div>
                                                    <h5>{{$company->name}}</h5>
                                                    <p class="card-text"><small class="text-muted">{{$company->address}}</small></p>
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="text-center my-3"><a class="align-self-center d-inline-block px-5 py-2 bg-light rounded text-dark font-weight-bold border" href="/list-all"><span>xem tất cả</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
