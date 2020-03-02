@extends('layout')

@section('content')
    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <a href="/listing">
        <button class="btn btn-light" >List of products </button>
    </a>
    <div class="row" id="product-filter">

        @foreach ($home as $h)
{{--            {{$loop->index}}--}}
{{--            @if($loop->index == 5) @continue @endif--}}
{{--            @continue($loop->index==5)--}}
{{--            @break($loop->index >7)--}}
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img style="height: 270px;width: 330px" src="{{ $h['image'] }}" alt="">

                    </figure>
                    <div class="product-info">
                        <h6>{{ $h['name']}}</h6>
                        <p>{{ $h['price']}}</p>
                        <a href="/product" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
        @endforeach;
        <!-- Latest Blog Section Begin -->
            <section class="latest-blog spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2>From The Blog</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-latest-blog">
                                <img src="img/latest-1.jpg" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                        <div class="tag-item">
                                            <i class="fa fa-calendar-o"></i>
                                            May 4,2019
                                        </div>
                                        <div class="tag-item">
                                            <i class="fa fa-comment-o"></i>
                                            5
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h4>The Best Street Style From London Fashion Week</h4>
                                    </a>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-latest-blog">
                                <img src="img/latest-2.jpg" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                        <div class="tag-item">
                                            <i class="fa fa-calendar-o"></i>
                                            May 4,2019
                                        </div>
                                        <div class="tag-item">
                                            <i class="fa fa-comment-o"></i>
                                            5
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
                                    </a>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-latest-blog">
                                <img src="img/latest-3.jpg" alt="">
                                <div class="latest-text">
                                    <div class="tag-list">
                                        <div class="tag-item">
                                            <i class="fa fa-calendar-o"></i>
                                            May 4,2019
                                        </div>
                                        <div class="tag-item">
                                            <i class="fa fa-comment-o"></i>
                                            5
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
                                    </a>
                                    <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="benefit-items">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-benefit">
                                    <div class="sb-icon">
                                        <img src="img/icon-1.png" alt="">
                                    </div>
                                    <div class="sb-text">
                                        <h6>Free Shipping</h6>
                                        <p>For all order over 99$</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-benefit">
                                    <div class="sb-icon">
                                        <img src="img/icon-2.png" alt="">
                                    </div>
                                    <div class="sb-text">
                                        <h6>Delivery On Time</h6>
                                        <p>If good have prolems</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="single-benefit">
                                    <div class="sb-icon">
                                        <img src="img/icon-1.png" alt="">
                                    </div>
                                    <div class="sb-text">
                                        <h6>Secure Payment</h6>
                                        <p>100% secure payment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Latest Blog Section End -->


@endsection
