@extends('layouts.app')

@section('cover')
    @include('commons.slider')
@endsection

@section('content')
    <div class= "icon-group">
        <ul class="contents">
            <li class="col-xs-6 col-sm-4 col-md-2">
                <a href="#"><img class="icon" src="images/icon.png" alt=""></a>
                <p>Jits-News</p>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-2">
                <a href="#"><img class="icon" src="images/icon1.png" alt=""></a>
                <p>Cafe-Minami</p>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-2">
                <a href="#"><img class="icon" src="images/icon2.png" alt=""></a>
                <p>Yunoki-Sports</p>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-2">
                <a href="#"><img class="icon" src="images/icon3.png" alt=""></a>
                <p>Weather-Funami</p>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-2">
                <a href="#"><img class="icon" src="images/icon4.png" alt=""></a>
                <p>おジャ魔女メグミ</p>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-2">
                <a href="#"><img class="icon" src="images/icon5.png" alt=""></a>
                <p>御富士掲示板</p>
            </li>
        </ul>
    </div>
    <div class="contents-img">
        <div class="topimg row">
            <div class="column col-xs-12 caption">
                <a href="#"><span class="text"><p>Jits-News</p></span><img src="images/tara0.jpg"></a>
            </div>
        </div>
        <div class="row">
            <div class="column col-xs-12 caption">
                <a href="#"><span class="text"><p>Cafe-Minami</p></span><img src="images/tara1.jpg"></a>
            </div>
        </div>
        <div class="row">
            <div class="column col-xs-12 caption">
                <a href="#"><span class="text"><p>Yunoki-Sports</p></span><img src="images/tara3.jpg"></a>
            </div>
        </div>
        <div class="row">
            <div class="column col-xs-12 caption">
                <a href="#"><span class="text"><p>Weather-Funami</p></span><img src="images/tara4.jpg"></a>
            </div>
        </div>
        <div class="row">
            <div class="column col-xs-12 caption">
                <a href="#"><span class="text"><p>おジャ魔女メグミ</p></span><img src="images/tara2.jpg"></a>
            </div>
        </div>
    </div>
    
    <!--<div class="contents-img">-->
    <!--    <ul class="imgs">-->
    <!--        <li class="col-xs-12"><a href="#"><img src="images/content.jpg" alt=""></a></li>-->
    <!--        <li class="col-xs-12"><a href="#"><img src="images/content1.jpg" alt=""></a></li>-->
    <!--        <li class="col-xs-12"><a href="#"><img src="images/content2.jpg" alt=""></a></li>-->
    <!--        <li class="col-xs-12"><a href="#"><img src="images/content3.jpg" alt=""></a></li>-->
    <!--        <li class="col-xs-12"><a href="#"><img src="images/content4.jpg" alt=""></a></li>-->
    <!--    </ul>-->
    <!--</div>-->
@endsection