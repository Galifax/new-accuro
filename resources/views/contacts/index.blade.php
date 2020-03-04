@extends('layouts.app')

@section('title', 'Contacts')
@section('keywords', 'Contacts')
@section('description', 'Contacts')

@section('content')
<div class="container">
    <h2 class="page-title">
        <span>Для связи с нами поделитесь контактными данными ниже, заполнив форму.</span>
    </h2>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <form class="form" action="">

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ваше Имя" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Номер телефона" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" aria-label="Username"
                        aria-describedby="basic-addon1">
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
                    <!-- <td>Address</td>
                        <td>Адрес: Киев, ул. Шота Руставели, 32, 0 этаж </td>
                         -->
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><a href="tel:0442277202">044 22 77 202</a></td>
                </tr>
            </table>

            <!-- <p class="work-time">
                Рабочие часы: <br> с 10.00 до 18.00
                </p> -->

        </div>

        <div class="col-sm-12">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d20309.075323923767!2d30.4721233!3d50.4851493!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1568725230720!5m2!1sru!2sua"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>

</div>
</div>
@endsection
