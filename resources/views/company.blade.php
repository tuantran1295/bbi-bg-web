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
            <div class="secondary-title bg-white">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0 py-0 px-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/"><span>Trang chủ</span></a></li>
                        <li class="breadcrumb-item"><a href="/all/1">Nhà hàng, quán ăn</a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ul>
                </nav>
            </div>
            <div class="row bg-main mx-md-0">
                <div class="col-md-8 pb-md-3 pr-md-0">
                    <div class="article-wrap">
                        <div class="gallery-container">
                            <div class="gallery-slider">
                                <div class="image-slider">
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/ce65caf8-36cf-40a5-b7cb-14b163cafe43.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/aae830d3-3ab7-4fef-aebc-813a13715351.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/d802a05d-b191-44e2-a8cf-0c52d0bdc0f2.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/02f2ec9e-0dba-4bab-8403-f46220f589b8.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/381686a6-f83c-44a6-9827-168588fcc752.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/7c97ce3f-25e5-43d3-9d7b-ca8ad9d31016.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/d33864d1-c348-4794-9e39-61b5ae53957c.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                            <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/224b6763-3de3-46be-8f4f-86f7a5828647.jpg&quot;);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="thumbnail-slider">
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/aae830d3-3ab7-4fef-aebc-813a13715351.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/d802a05d-b191-44e2-a8cf-0c52d0bdc0f2.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background active" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/02f2ec9e-0dba-4bab-8403-f46220f589b8.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/381686a6-f83c-44a6-9827-168588fcc752.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/7c97ce3f-25e5-43d3-9d7b-ca8ad9d31016.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/d33864d1-c348-4794-9e39-61b5ae53957c.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/224b6763-3de3-46be-8f4f-86f7a5828647.jpg&quot;);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pb-3">
                    <h6 class="font-weight-bold text-uppercase mt-3 py-2">{{$company->name}}</h6>
                    <div class="col-11 shop-info px-0">
                        <ul>
                            <li><i class="fa fa-info-circle"></i><span><b>Giới thiệu</b> : {{$company->about}}</span></li>
                            <li><i class="fa fa-map-marker"></i> <span>{{$company->address}}</span></li>
                            <li><i class="fa fa-phone"></i> <span><a href="tel:{{$company->phone}}">{{$company->phone}}</a></span></li>
                            <li><i class="fa fa-internet-explorer"></i> <span><a href="{{$company->link}}" target="_blank" style="color: rgb(0, 123, 255);">{{$company->link}}</a></span></li>
                            <li><i class="fa fa-id-card-o"></i> <span><b>ID BBI</b> : {{$company->bbi_id}}</span></li>
                            <li><i class="fa fa-clock-o"></i> <span><b>Mở cửa</b> : {{$company->opening_time}}</span></li>
{{--                            <li><i class="fa fa-qrcode"></i> <span><p><b>QR Quảng Bá</b></p><svg shape-rendering="crispEdges" height="256" width="256" viewBox="0 0 29 29"><path fill="#ffffff" d="M0,0 h29v29H0z"></path><path fill="#000000" d="M4 4h7v1H4zM14 4h1v1H14zM18,4 h7v1H18zM4 5h1v1H4zM10 5h1v1H10zM12 5h1v1H12zM14 5h2v1H14zM18 5h1v1H18zM24,5 h1v1H24zM4 6h1v1H4zM6 6h3v1H6zM10 6h1v1H10zM14 6h3v1H14zM18 6h1v1H18zM20 6h3v1H20zM24,6 h1v1H24zM4 7h1v1H4zM6 7h3v1H6zM10 7h1v1H10zM14 7h1v1H14zM18 7h1v1H18zM20 7h3v1H20zM24,7 h1v1H24zM4 8h1v1H4zM6 8h3v1H6zM10 8h1v1H10zM12 8h1v1H12zM16 8h1v1H16zM18 8h1v1H18zM20 8h3v1H20zM24,8 h1v1H24zM4 9h1v1H4zM10 9h1v1H10zM13 9h2v1H13zM16 9h1v1H16zM18 9h1v1H18zM24,9 h1v1H24zM4 10h7v1H4zM12 10h1v1H12zM14 10h1v1H14zM16 10h1v1H16zM18,10 h7v1H18zM14 11h3v1H14zM4 12h1v1H4zM6 12h1v1H6zM8 12h1v1H8zM10 12h1v1H10zM14 12h2v1H14zM20 12h1v1H20zM23 12h1v1H23zM7 13h2v1H7zM11 13h3v1H11zM15 13h1v1H15zM21 13h1v1H21zM24,13 h1v1H24zM5 14h1v1H5zM9 14h5v1H9zM16 14h1v1H16zM18 14h4v1H18zM23,14 h2v1H23zM4 15h2v1H4zM7 15h2v1H7zM11 15h1v1H11zM13 15h1v1H13zM15 15h2v1H15zM4 16h4v1H4zM10 16h3v1H10zM15 16h4v1H15zM20 16h1v1H20zM23,16 h2v1H23zM12 17h1v1H12zM14 17h1v1H14zM16 17h1v1H16zM19 17h1v1H19zM24,17 h1v1H24zM4 18h7v1H4zM13 18h1v1H13zM16 18h1v1H16zM18,18 h7v1H18zM4 19h1v1H4zM10 19h1v1H10zM13 19h3v1H13zM19 19h1v1H19zM4 20h1v1H4zM6 20h3v1H6zM10 20h1v1H10zM12 20h3v1H12zM18 20h1v1H18zM21 20h1v1H21zM23 20h1v1H23zM4 21h1v1H4zM6 21h3v1H6zM10 21h1v1H10zM13 21h1v1H13zM16 21h2v1H16zM19 21h1v1H19zM21 21h1v1H21zM23 21h1v1H23zM4 22h1v1H4zM6 22h3v1H6zM10 22h1v1H10zM12 22h3v1H12zM16 22h5v1H16zM24,22 h1v1H24zM4 23h1v1H4zM10 23h1v1H10zM19 23h1v1H19zM23 23h1v1H23zM4 24h7v1H4zM12 24h2v1H12zM18 24h1v1H18zM20,24 h5v1H20z"></path></svg></span></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
