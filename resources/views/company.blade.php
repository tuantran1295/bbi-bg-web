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
    <link rel="stylesheet" href="{{ asset('css/diadiem.css') }}"/>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-shim.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/es5-shim/3.4.0/es5-sham.js"></script>
    <script type="text/javascript" src="{{ asset('js/diadiem.js') }}"></script>
@endsection
@section('content')
    <section class="main-ct">
        <div class="container">
            <div class="secondary-title bg-white">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb mb-0 py-0 px-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="/"><span>Trang chủ</span></a></li>
                        <li class="breadcrumb-item"><a href="/all/2">Ăn Uống</a></li>
                        <li class="breadcrumb-item active" aria-current="page"></li>
                    </ul>
                </nav>
            </div>
            <div class="row bg-main mx-md-0">
                <div class="col-md-8 pb-md-3 pr-md-0">
                    <div class="article-wrap">
                        <div class="gallery-container">
                            <div class="gallery-slider">
                                <div class="slick-slider image-slider slick-initialized" dir="ltr">
                                    <button type="button" data-role="none" class="slick-arrow slick-prev" style="display: block;"> Previous</button>
                                    <div class="slick-list">
                                        <div class="slick-track" style="width: 7605px; opacity: 1; transform: translate3d(-585px, 0px, 0px);">
                                            <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;"></div>
                                            <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 585px;">
                                                <div>
                                                    <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/b34e6d48-dc20-4a27-8391-409f478ff91f.jpg&quot;);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 585px;"></div>
                                            <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 585px;"></div>
                                            <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 585px;"></div>
                                            <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 585px;"></div>
                                            <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 585px;"></div>
                                            <div data-index="6" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;">
                                                <div>
                                                    <div class="image-container" tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/b34e6d48-dc20-4a27-8391-409f478ff91f.jpg&quot;);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-index="7" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;"></div>
                                            <div data-index="8" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;"></div>
                                            <div data-index="9" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;"></div>
                                            <div data-index="10" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;"></div>
                                            <div data-index="11" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 585px;"></div>
                                        </div>
                                    </div>
                                    <button type="button" data-role="none" class="slick-arrow slick-next" style="display: block;"> Next</button>
                                </div>
                            </div>
                            <div class="gallery-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slick-slider thumbnail-slider slick-initialized" dir="ltr">
                                            <div class="slick-list" style="padding: 0px 50px;">
                                                <div class="slick-track" style="width: 732px; opacity: 1; transform: translate3d(244px, 0px, 0px);">
                                                    <div data-index="0" class="slick-slide slick-active slick-center slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 122px;">
                                                        <div>
                                                            <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                                <div class="image-background active" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/b34e6d48-dc20-4a27-8391-409f478ff91f.jpg&quot;);"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="1" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 122px;">
                                                        <div>
                                                            <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                                <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/31bb4fb5-7be9-47f4-b1ac-2b98203620ba.jpg&quot;);"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="2" class="slick-slide slick-active" tabindex="-1" aria-hidden="false" style="outline: none; width: 122px;">
                                                        <div>
                                                            <div class="image-thumbnail" tabindex="-1" style="width: 100%; display: inline-block;">
                                                                <div class="image-background" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/4036e249-7c6c-4ed4-bc28-8d66bba4d912.jpg&quot;);"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-index="3" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 122px;"></div>
                                                    <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 122px;"></div>
                                                    <div data-index="5" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 122px;"></div>
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
                    <h6 class="font-weight-bold text-uppercase mt-3 py-2">CAFE ĐẦM XANH</h6>
                    <div class="col-11 shop-info px-0">
                        <ul>
                            <li><i class="fa fa-info-circle"></i><span><b>Giới thiệu</b> : Tiêu dùng tích điểm 100%</span></li>
                            <li><i class="fa fa-map-marker"></i> <span>Tổ 5, Phường Phan Đình Phùng, Thành phố Thái Nguyên, Tỉnh Thái Nguyên</span></li>
                            <li><i class="fa fa-phone"></i> <span><a href="tel:0968.856.665">0968.856.665</a></span></li>
                            <li><i class="fa fa-internet-explorer"></i> <span><a href="https://www.facebook.com/damxanhcafe" target="_blank" style="color: rgb(0, 123, 255);">
          www.facebook.com/damxanhcafe</a></span></li>
                            <li><i class="fa fa-id-card-o"></i> <span><b>ID BBI</b> : 355457/B355457</span></li>
                            <li><i class="fa fa-clock-o"></i> <span><b>Mở cửa</b> : 08:00 - 22:00 (Thứ 2
                          - Chủ nhật)</span></li>
                            <li><i class="fa fa-qrcode"></i> <span><p><b>QR Quảng Bá</b></p><svg shape-rendering="crispEdges" height="256" width="256" viewBox="0 0 33 33"><path fill="#ffffff" d="M0,0 h33v33H0z"></path><path fill="#000000" d="M4 4h7v1H4zM12 4h1v1H12zM14 4h1v1H14zM16 4h2v1H16zM19 4h1v1H19zM22,4 h7v1H22zM4 5h1v1H4zM10 5h1v1H10zM13 5h2v1H13zM20 5h1v1H20zM22 5h1v1H22zM28,5 h1v1H28zM4 6h1v1H4zM6 6h3v1H6zM10 6h1v1H10zM16 6h1v1H16zM18 6h2v1H18zM22 6h1v1H22zM24 6h3v1H24zM28,6 h1v1H28zM4 7h1v1H4zM6 7h3v1H6zM10 7h1v1H10zM12 7h1v1H12zM14 7h2v1H14zM19 7h1v1H19zM22 7h1v1H22zM24 7h3v1H24zM28,7 h1v1H28zM4 8h1v1H4zM6 8h3v1H6zM10 8h1v1H10zM12 8h5v1H12zM18 8h2v1H18zM22 8h1v1H22zM24 8h3v1H24zM28,8 h1v1H28zM4 9h1v1H4zM10 9h1v1H10zM12 9h1v1H12zM14 9h1v1H14zM16 9h1v1H16zM22 9h1v1H22zM28,9 h1v1H28zM4 10h7v1H4zM12 10h1v1H12zM14 10h1v1H14zM16 10h1v1H16zM18 10h1v1H18zM20 10h1v1H20zM22,10 h7v1H22zM12 11h1v1H12zM14 11h2v1H14zM17 11h1v1H17zM19 11h1v1H19zM4 12h1v1H4zM8 12h1v1H8zM10 12h4v1H10zM16 12h2v1H16zM20 12h6v1H20zM28,12 h1v1H28zM4 13h3v1H4zM9 13h1v1H9zM12 13h1v1H12zM14 13h2v1H14zM17 13h3v1H17zM21 13h1v1H21zM23 13h3v1H23zM4 14h1v1H4zM8 14h3v1H8zM13 14h4v1H13zM19 14h1v1H19zM23 14h1v1H23zM26 14h1v1H26zM7 15h1v1H7zM11 15h2v1H11zM15 15h1v1H15zM18 15h2v1H18zM22 15h2v1H22zM26 15h1v1H26zM28,15 h1v1H28zM4 16h1v1H4zM7 16h8v1H7zM17 16h2v1H17zM20 16h1v1H20zM22 16h1v1H22zM25 16h2v1H25zM28,16 h1v1H28zM4 17h3v1H4zM8 17h1v1H8zM11 17h2v1H11zM14 17h1v1H14zM16 17h1v1H16zM19 17h1v1H19zM23 17h2v1H23zM27 17h1v1H27zM7 18h4v1H7zM13 18h1v1H13zM15 18h5v1H15zM22 18h1v1H22zM25 18h1v1H25zM6 19h1v1H6zM8 19h1v1H8zM11 19h3v1H11zM15 19h1v1H15zM17 19h1v1H17zM19 19h1v1H19zM22 19h2v1H22zM25 19h2v1H25zM4 20h2v1H4zM10 20h1v1H10zM13 20h2v1H13zM16 20h2v1H16zM20,20 h9v1H20zM12 21h1v1H12zM14 21h1v1H14zM17 21h4v1H17zM24 21h1v1H24zM27 21h1v1H27zM4 22h7v1H4zM12 22h1v1H12zM14 22h1v1H14zM20 22h1v1H20zM22 22h1v1H22zM24 22h1v1H24zM4 23h1v1H4zM10 23h1v1H10zM13 23h1v1H13zM16 23h1v1H16zM18 23h3v1H18zM24,23 h5v1H24zM4 24h1v1H4zM6 24h3v1H6zM10 24h1v1H10zM12 24h1v1H12zM15 24h1v1H15zM17 24h2v1H17zM20 24h7v1H20zM28,24 h1v1H28zM4 25h1v1H4zM6 25h3v1H6zM10 25h1v1H10zM16 25h1v1H16zM19 25h4v1H19zM25 25h1v1H25zM27,25 h2v1H27zM4 26h1v1H4zM6 26h3v1H6zM10 26h1v1H10zM13 26h1v1H13zM15 26h7v1H15zM26 26h2v1H26zM4 27h1v1H4zM10 27h1v1H10zM13 27h1v1H13zM15 27h1v1H15zM17 27h1v1H17zM21 27h1v1H21zM23 27h1v1H23zM25 27h3v1H25zM4 28h7v1H4zM12 28h2v1H12zM16 28h2v1H16zM24,28 h5v1H24z"></path></svg></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
