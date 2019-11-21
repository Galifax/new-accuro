@extends('layouts.app')

@section('title', 'Contacts')
@section('keywords', 'Contacts')
@section('description', 'Contacts')

@section('content')
<div class="container">
        <h2 class="page-title">
            How to contact us</br>
            <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </span>
        </h2>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <form class="form" action="">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group">
                        <textarea rows="5" class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <button class="form-btn">
                        confirm
                    </button>
                </form>
            </div>
            <div class="col-sm-12 col-md-7">
                <h3>
                    Corle-Radiator - factory
                </h3>
                <table>
                    <tr>
                        <td>Address</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    </tr>
                    <tr>
                        <td>telephone</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    </tr>
                    <tr>
                        <td>Fax</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    </tr>
                    <tr>
                        <td>gsm</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    </tr>
                    <tr>
                        <td>e-mail</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </td>
                    </tr>
                </table>

                <p class="work-time">
                    work time:<br> Lorem, ipsum dolor sit amet consectetur<br> Lorem, ipsum dolor sit amet consectetur
                </p>

            </div>

            <div class="col-sm-12">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d20309.075323923767!2d30.4721233!3d50.4851493!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1568725230720!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0;"
                    allowfullscreen=""></iframe>
            </div>
        </div>

    </div>
    </div>
@endsection
