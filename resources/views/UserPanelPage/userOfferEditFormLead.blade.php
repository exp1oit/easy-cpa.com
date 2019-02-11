@extends('mainPanel')


@section('content')

<div class="pcoded-main-container" style="margin-top: 70px;">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <h1 class="text-center">Редактирования лида</h1>
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Форма редактирования лида</h3>
                                        </div>
                                        <div class="card-block">
                                            <form id="main" method="post" action="/lead/{{ $lead->id }}" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $lead->user_id }}" hidden>
                                                <input type="hidden" name="offer_id" value="{{ $lead->offer_id }}" hidden>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Имя</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ $lead->name }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Телефон</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $lead->phone }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Цена</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="reward" name="reward" value="{{ $lead->reward }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="email" name="email"  value="{{ $lead->email }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Комменатрий</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="5" cols="5" class="form-control" placeholder="Введете информацию по лиду"
                                                         name="comment">{{ $lead->comment }}</textarea>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                @if ($lead->images()->first())
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Уже сохранёные изображения</label>
                                                        <div class="col-sm-10">
                                                            <ul class="nav-right">
                                                                @foreach ($lead->images()->get() as $img)
                                                                    <li class='form-img-list'>
                                                                        <div class="label-icon">
                                                                            <img class='img-fluid img-180 m-r-15 m-b-10' src="{{ $img->path }}" alt="">
                                                                            <label class="delete-ajax-form-lead badge badge-primary badge-top-right offer-update-form-img-close">
                                                                                <font style="vertical-align: inherit;" class='offer-update-icon'>
                                                                                    <i class='feather icon-x'></i>
                                                                                </font>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                            <span class="messages" id="messages-img-delete"></span>
                                                        </div>
                                                    </div>
                                                @endif
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Обновить лид</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="styleSelector">
    </div>

</div>
@stop