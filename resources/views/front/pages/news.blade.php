@extends('front.layouts.master')
@section('content')
<!-- Breadcrumb Begin -->
<nav aria-label="breadcrumb" class="mt-4 bdcmd">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </div>
</nav>
<!-- Breadcrumb End -->

<!-- Latest Section Begin -->
<section class="latest-section mt-4">
    <div class="container">
        <div class="section-title-wrapper">
            <div class="section-title latest-title">
                <h3><span>Latest News</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="news-item popular-item set-bg" data-setbg="{{ asset('front_assets/img/ronaldo.jpg') }}">
                    <div class="ni-tag tenis">Football</div>
                    <div class="ni-text">
                        <h5><a href="#">Portugal vs Argentina | Final | FunOlympic 2023 </a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> July 10, 2023</li>
                            <!-- <li><i class="fa fa-edit"></i> 13 Comment</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item popular-item set-bg" data-setbg="{{ asset('front_assets/img/gauri.jpg') }}">
                    <div class="ni-tag tenis">Swimming</div>
                    <div class="ni-text">
                        <h5><a href="#">Swimmer Gaurika Singh to lead Nepal as flagbearer at Yokyo 2023</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Jun 10, 2023</li>
                            <!-- <li><i class="fa fa-edit"></i> 8 Comment</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-item popular-item set-bg" data-setbg="{{ asset('front_assets/img//cricket.jpg') }}">
                    <div class="ni-tag tenis">Cricket</div>
                    <div class="ni-text">
                        <h5><a href="#">Nepal national team to play a crucial match against UAE on Semi-finale</a></h5>
                        <ul>
                            <li><i class="fa fa-calendar"></i> Jun 19, 2023</li>
                            <!-- <li><i class="fa fa-edit"></i> 2 Comment</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Section End -->







@endsection