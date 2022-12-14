@extends('layouts.userlayout')
@section('body')


    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="landing/images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Farmshop</strong></h1>
                            <p class="m-b-40">Most Reliable Grocery eCommerce Platform In Bangladesh.</p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="landing/images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Farmshop</strong></h1>
                            <p class="m-b-40">Most Reliable Grocery eCommerce Platform In Bangladesh.</p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="landing/images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Farmshop</strong></h1>
                            <p class="m-b-40">Most Reliable Grocery eCommerce Platform In Bangladesh.</p>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
{{--    <div class="categories-shop">--}}
{{--        <h1 style="text-align: center;font-family: "Courier New", Courier, monospace">Products</h1>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($products as $products)--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">--}}
{{--                    <div class="shop-cat-box">--}}
{{--                        <img class="img-fluid" src="{{$products->image}}" alt="" />--}}
{{--                        <a class="btn hvr-hover" href="#">{{$products->name}} @    {{$products->price}}</a>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- End Categories -->

    <div class="box-add-products">

        <div class="container">

            <div class="row">

                @foreach($products as $products)
                    @if($products->type=="Cattle")
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="shop-cat-box">
                                        <img class="img-fluid" src="{{$products->image}}" alt="" />
                                        <a class="btn hvr-hover" href="/customercattle">{{$products->name}} @    {{$products->price}}</a>

                                    </div>
                                </div>
                    @endif
                                @endforeach
            </div>
        </div>
    </div>



