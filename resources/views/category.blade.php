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
                <div class="col-md-12">
                    <div class="list-all">
                        <div class="d-flex flex-wrap secondary-title">
                            <h4>Doanh nghiệp đã kết nối</h4></div>
                        <div class="row no-gutters">
                            <div class="col-md-2 item">
                                <a href="/agency/1/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/74f270b9-94de-44f1-9a97-3999e9a9d449.jpg&quot;);"></div>
                                    <h5>AMARONE COFFEE</h5>
                                    <p>AMARONE COFFEE. Tầng...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/6/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/5d03e88c-2a59-4264-b793-43e7e09d06cb.jpg&quot;);"></div>
                                    <h5>Cá giò Viễn Đông</h5>
                                    <p>83 Vũ Trọng Phụng, P...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/9/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/b34e6d48-dc20-4a27-8391-409f478ff91f.jpg&quot;);"></div>
                                    <h5>CAFE ĐẦM XANH</h5>
                                    <p>Tổ 5, Phường Phan Đì...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/12/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/109a8f34-748b-4910-9267-0e04221a8c0f.jpg&quot;);"></div>
                                    <h5>Gà không lối thoát bà Dung</h5>
                                    <p>Số 9, ngõ 8, tổ 11, ...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/26/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/f903a533-2cda-49d4-b01f-c70cd9f5ff36.jpg&quot;);"></div>
                                    <h5>Nhà hàng Hải Đăng</h5>
                                    <p>Đường Lê Mao kéo dài...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/35/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/e80b1801-c972-4e45-8760-b125118a3fae.jpg&quot;);"></div>
                                    <h5>Nhà hàng Sen Loa Thành</h5>
                                    <p>Số 28 Cây Đa Bác Hồ,...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/36/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/20d2fded-9b10-4d58-b81a-0290d3a68cd0.jpg&quot;);"></div>
                                    <h5>Nhà hàng Osaka</h5>
                                    <p>Khu đô thị Mạnh Hùng...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/53/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/92469a98-6b5d-4b07-bfe8-6292a036b6e4.jpg&quot;);"></div>
                                    <h5>Công ty TNHH Sản xuất và Thương Mại Wanup</h5>
                                    <p>Số 1, ngõ 196, đường...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/72/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/6c164120-b989-47b8-9de1-173132d3f9fd.png&quot;);"></div>
                                    <h5>Yến Sào Hòn Ngọc Việt</h5>
                                    <p>Lầu 1, Siêu thị CO.O...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/77/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/634cdff0-f234-402e-8569-c769203a6b21.jpg&quot;);"></div>
                                    <h5>Viên Tâm Quán</h5>
                                    <p>Đường Phan Bội Châu,...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/84/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/58205e18-9bb6-47b3-9bfb-087d89926c4b.jpg&quot;);"></div>
                                    <h5>Adela Coffee</h5>
                                    <p>82-84 Đường Thăng Lo...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/85/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/099d35ef-4873-449a-921f-315c596dbd53.jpg&quot;);"></div>
                                    <h5>Nhà hàng cá nướng Liến Hùng</h5>
                                    <p>Xóm Tân Bình, Xã Quy...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/87/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/f496b168-b0e6-4b4b-acee-ce9c4d96564a.jpg&quot;);"></div>
                                    <h5>Trà sữa GOKY</h5>
                                    <p>365 Trần Cung, Phườn...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/90/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/d7c015c5-4b55-4f09-8a11-61cae1c07e85.jpg&quot;);"></div>
                                    <h5>Hải sản cao cấp</h5>
                                    <p>Số 76 đường Tam Trin...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/103/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/3e1114b1-cbdc-48ba-b95c-4be43cf458a4.jpg&quot;);"></div>
                                    <h5>Công ty TNHH TREE OF LIFE</h5>
                                    <p>Số 9E/271/3 Bùi Xươn...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/104/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/5fecc41f-e018-4c0a-830d-f6a42d467987.jpg&quot;);"></div>
                                    <h5>Hộ kinh doanh Nguyễn Thành Thơ</h5>
                                    <p>Số 736 Quang Trung, ...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/129/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/7452d30a-1cc8-4507-a2d3-a8d35466f881.jpg&quot;);"></div>
                                    <h5>Hộ kinh doanh Kim Cúc Hải sản Tươi sống</h5>
                                    <p>Nhà số 7 phố Lệ Mật,...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/135/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/7466a3d2-eedc-4768-bde1-f7acd98bac49.jpg&quot;);"></div>
                                    <h5>Nhà Hàng Đồ Sơn 689</h5>
                                    <p>Khu I, Khu Bến Thốc,...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/137/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/fdc84c81-257e-4ece-9130-ddf0b74a7284.jpg&quot;);"></div>
                                    <h5>Nhà hàng Nghiệp Len</h5>
                                    <p>Khu du lịch biển Diễ...</p>
                                </a>
                            </div>
                            <div class="col-md-2 item">
                                <a href="/agency/142/detail/" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/cfcb25cf-6236-489d-af00-0ca129f720e4.jpg&quot;);"></div>
                                    <h5>Cafe Sale</h5>
                                    <p>Số 21 lô 7B Lê Hồng ...</p>
                                </a>
                            </div>
                        </div>
                        <nav class="py-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item false"><a class="page-link" href="#">2</a></li>
                                <li class="page-item false"><a class="page-link" href="#">3</a></li>
                                <li class="page-item disabled"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                            </ul>
                        </nav>
                        <div class="box-footer clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
