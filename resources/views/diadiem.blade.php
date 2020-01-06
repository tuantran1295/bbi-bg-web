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
                            <h2>Đã kết nối với BBI Bắc Giang</h2></div>
                        <form action="/search" method="POST" class="col-md-11 px-0">
                            <div class="search-tool">
                                <div class="input-group">
                                    <div class="input-group-prepend ico-search">
                                        <div class="city-filter">
                                            <div class="dropdown">
                                                <button class="btn btn-link dropdown-toggle" type="button" id="city-filter-ct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hà Nội</button>
                                                <div class="dropdown-menu default-menu main-menu sm-main-menu animation" aria-labelledby="dropdownMenuButton3">
                                                    @foreach($provinces as $province)
                                                        <a class="dropdown-item d-flex justify-content-between" href="/province/{{$province->id}}"><span>{{$province->name}}</span><span class="text-muted">{{$province->companies()->count()}}<span> Địa điểm</span></span></a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group-text"><i class="fa fa-search"></i></div>
                                    </div>
                                    {{csrf_field()}}
                                    <input type="text" name="search-keyword" id="search-keyword" class="form-control" id="inlineFormInputGroup" placeholder="Tìm địa điểm">
                                    <div onClick="javascript:document.forms[0].submit();" class="input-group-prepend ico-send">
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
                                <div class="col-6 pr-1">
                                    <a href="https://play.google.com/store/apps/details?id=com.ecommerce.bbimall" class="d-block" rel="noopener noreferrer" target="_blank"><img src="images/btn-android.png" alt="android" class="w-100"></a>
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
                                    <h4><span>Doanh nghiệp tiêu biểu</span></h4><a href="featured" class="align-self-center"><span>xem tất cả</span> (10)</a></div>
                            </div>
                            {{--Carousel here--}}
                            <div class="list-ct">
                                <div class="list-wrap">
                                    <div class="home-slider">
                                        @foreach($featured as $company)
                                            <div class="item">
                                                <a class="home-banner" href="company/{{$company->id}}"><img class="img-responsive" src="{{$company->images()->first()->url}}" alt="{{$company->name}}" style="height: 144px; width: 100%; padding-right: 5px;">
                                                    <h5>{{$company->name}}</h5>
                                                    <p class="card-text"><small class="text-muted"></small></p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category thumbnail-slide mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>Doanh nghiệp mới kết nối</span></h4><a href="/new-connected" class="align-self-center"><span>xem tất cả</span> (10)</a></div>
                            </div>
                            {{--Carousel here--}}
                            <div class="list-ct">
                                <div class="list-wrap">
                                    <div class="home-slider">
                                        @foreach($newConnected as $company)
                                            <div class="item">
                                                <a class="home-banner" href="company/{{$company->id}}"><img class="img-responsive" src="{{$company->images()->first()->url}}" alt="{{$company->name}}" style="height: 144px; width: 100%; padding-right: 5px;">
                                                    <h5>{{$company->name}}</h5>
                                                    <p class="card-text"><small class="text-muted"></small></p>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category mb-2">
                            <div class="title-list-item">
                                <div class="d-flex flex-wrap text justify-content-between secondary-title">
                                    <h4><span>Doanh nghiệp đã kết nối</span></h4><a href="/all"><span>xem tất cả</span> ({{\App\Company::count()}})</a></div>
                            </div>
                            <div class="list-ct">
                                <div class="row no-gutters list-wrap">
                                    @foreach($random as $company)
                                        <div class="col-md-4 item">
                                            <a href="company/{{$company->id}}}">
                                                <div class="background-item" style="background-image: url('{{$company->images()->first()->url}}');"></div>
                                                <h5>{{$company->name}}</h5>
                                                <p class="card-text"><small class="text-muted">{{$company->address}}</small></p>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="text-center my-3"><a class="align-self-center d-inline-block px-5 py-2 bg-light rounded text-dark font-weight-bold border" href="/all"><span>xem tất cả</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
