<header class="affix">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light"><span class="navbar-brand"><a href="/"><img src="{{ asset('images/lg-bbivn.png')}}" alt="logo"></a></span>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach ($categories as $category)
                        @if ($category->id < 8)
                            <li class="nav-item"><a class="nav-link" href="category/{{$category->id}}">{{$category->name}}</a></li>
                        @endif
                    @endforeach
{{--                    <li class="nav-item">--}}
{{--                        <div class="nav-link">--}}
{{--                            <div class="dropdown right-align">--}}
{{--                                <div class="dropdown-label"><img src="/images/ico-en.png" alt=""> <i class="fa fa-caret-down"></i></div>--}}
{{--                                <div class="dropdown-menu">--}}
{{--                                    <a class="dropdown-item active"><img src="/images/ico-en.png" alt=""> English</a>--}}
{{--                                    <a class="dropdown-item"><img src="/images/ico-vi.png" alt=""> Tiếng Việt</a>--}}
{{--                                    <a class="dropdown-item"><img src="/images/ico-zh.png" alt=""> 中文</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                        <li class="nav-item"><a class="icon-menu nav-link pr-md-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span></span><span></span><span></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<section class="submenu">
    <div class="submenu-dropdown">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-2 col-6">
                        <h6 class="text-sm font-weight-bold text-uppercase"><a href="/category/{{$category->id}}" style="color: black;">{{$category->name}}</a></h6>
                                            <ul class="mb-4">
{{--                                                <li><a class="text-sm" href="/all/7">Sách, VPP, Quà tặng</a></li>--}}
{{--                                                <li><a class="text-sm" href="/all/8">Trung tâm Giáo dục</a></li>--}}
                                            </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
