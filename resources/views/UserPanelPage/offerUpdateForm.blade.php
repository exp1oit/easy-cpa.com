@extends('mainPanel')


@section('content')

<div class="pcoded-main-container" style="margin-top: 70px;">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <h1 class="text-center">Редактирование оффера</h1>
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Форма редактирования оффера</h3>
                                        </div>
                                        <div class="card-block">
                                            <form id="main" method="post" action="/offer/{{ $offer->id }}" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $offer->user_id }}"
                                                    hidden>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Название оффера</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="title" name="title"
                                                            value="{{ $offer->title }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Рекламный материал</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="promo" name="promo"
                                                            value="{{ $offer->promo }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Цена</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="amount" name="amount"
                                                            value="{{ $offer->rewards()->first()->amount }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Состояние</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="condition" name="condition"
                                                            value="{{ $offer->condition }}">
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Описание</label>
                                                    <div class="col-sm-10">
                                                        <textarea rows="5" cols="5" class="form-control" name="description">{{ $offer->description }}</textarea>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                @if ($offer->images()->first())
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Уже сохранёные изображения</label>
                                                        <div class="col-sm-10">
                                                            <ul class="nav-right">
                                                                @foreach ($offer->images()->get() as $img)
                                                                <li class='form-img-list'>
                                                                    <div class="label-icon">
                                                                        <img class='img-fluid img-180 m-r-15 m-b-10' src="{{ $img->path }}" alt="">
                                                                        <label class="delete-ajax-form-offer badge badge-primary badge-top-right offer-update-form-img-close">
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
                                                    <label class="col-sm-2 col-form-label">Добавления ещё картин</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" name="filename[]" class="form-control"
                                                            multiple>
                                                        <span class="messages"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary m-b-0">Обновить оффер</button>
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
