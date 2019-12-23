@extends('layouts.app')

@section('title', '3d models')
@section('keywords', '3d models')
@section('description', '3d models')

@section('content')
<div class="container">
    <h2 class="page-title">
        3D-models</br>
        <span>Зарегестритуйтесь и скачайте</span>
    </h2>

    <div class="models-3d-text">
        <p>
            Для того, чтобы нашим клиентам и партнёрам было ещё удобнее, мы создали специальный каталог с 3D-моделями, с
            помощью которого Вы сможете визуализировать любой радиатор, тщательно рассмотрев его в трёх измерениях.
        </p>
        <p>
            На сегодняшний день, 3D-модели необходимы для построения любых дизайн-проектов и позволяют грамотно
            подобрать нужный радиатор в готовый дизайн-проект, понимая уникальную текстуру и специфику каждого.
        </p>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <form class="form" action="">
                <h3>Заказать консультацию</h3>
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

                <button class="form-btn">
                    send
                </button>
            </form>
        </div>
        <div class="col-sm-12 col-md-7 download-3d">
            <h3>
                Скачать файлы<br>
                <span>3D модели и каталоги</span>
            </h3>



            <!-- Button trigger modal -->
            <button type="button" class="title-btn" data-toggle="modal" data-target="#downloadModal">
                DOWNLOAD
            </button>

            <!-- Modal -->
            <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="#downloadModal"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background: #7C0E0E;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="downloadModal">Зарегестритуйтесь и Скачайте</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                  
                            <form class="needs-validation form" novalidate>
                            <div class="form-group">
                                    <!-- <label for="name">Имя</label> -->
                                    <input type="text" class="form-control" id="name" placeholder="Имя" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        The Имя is required!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label for="email">E-mail</label> -->
                                    <input type="email" class="form-control" id="email" placeholder="E-mail" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        The e-mail is required!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label for="phone">Телефон</label> -->
                                    <input type="text" class="form-control" id="phone" placeholder="Телефон" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        The Телефон is required!
                                    </div>
                                </div>

                        
                                <div class="form-group mt-3">
                                    <button class="form-btn" type="submit">Download</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <a id="invisibleDownload" target="_blank"
                                    href="https://drive.google.com/drive/folders/1eGmB04B4bQHLHecUpyQo9B4vAd8aIODv"></a>

        </div>
    </div>

</div>
</div>

@endsection
