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
                            @foreach($companies as $company)
                            <div class="col-md-2 item">
                                <a href="company/{{$company->id}}" style="color: black;">
                                    <div class="background-item" style="background-image: url(&quot;http://diadiem.bbivietnam.vn/api/uploads/74f270b9-94de-44f1-9a97-3999e9a9d449.jpg&quot;);"></div>
                                    <h5>{{$company->name}}</h5>
                                    <p>{{$company->address}}</p>
                                </a>
                            </div>
                            @endforeach
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
