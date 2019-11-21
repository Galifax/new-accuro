@extends('layouts.app')

@section('title', 'Gallery')
@section('keywords', 'Gallery')
@section('description', 'Gallery')

@section('content')
<div class="container">
        <h2>
            Gallery
        </h2>
        <div class="main">

            <div class="big-img">
                <img class="target" src="/images/g/1.jpg" alt="">
            </div>
            <div class="slider slider-nav">
                <a class="item" data-slide="1">
                    <img src="/images/g/1.jpg" alt="">
                </a>


                <a class="item" data-slide="2">
                    <img src="/images/g/2.jpg" alt="">
                </a>


                <a class="item" data-slide="3">
                    <img src="/images/g/3.jpg" alt="">
                </a>


                <a class="item" data-slide="4">
                    <img src="/images/g/4.jpg" alt="">
                </a>


                <a class="item" data-slide="5">
                    <img src="/images/g/5.jpg" alt="">
                </a>


                <a class="item" data-slide="6">
                    <img src="/images/g/6.jpg" alt="">
                </a>


                <a class="item" data-slide="7">
                    <img src="/images/g/7.jpg" alt="">
                </a>


                <a class="item" data-slide="1">
                    <img src="/images/g/1.jpg" alt="">
                </a>


                <a class="item" data-slide="2">
                    <img src="/images/g/2.jpg" alt="">
                </a>

            </div>
        </div>
    </div>
@endsection
