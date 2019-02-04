@extends('mainPanel')


@section('content')

<div class="pcoded-main-container" style="margin-top: 70px;">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">

                        <div class="page-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card table-card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-8">
                                                <h3 class>Пользователи</h3>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="/offer/create" class='right'><button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-plus"></i></button></a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Название</th>
                                                            <th>id Пользователя опубликовавшего это</th>
                                                            <th>Рейтинг</th>
                                                            <th>Описание</th>
                                                            <th>Текущий баланс</th>
                                                            <th>Статус</th>
                                                            <th>Дата создания</th>
                                                            <th>Дата последнего обновления</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach  ($offers as $offer)
                                                            <tr>
                                                                <td>{{ $offer->id }}</td>
                                                                <td>{{ $offer->title }}</td>
                                                                <td>{{ $offer->user_id }}</td>
                                                                <td>{{ $offer->rating }}</td>
                                                                <td>{{ $offer->description }}</td>
                                                                <td>{{ $offer->promo }}</td>
                                                                <td>{{ $offer->condition }}</td>
                                                                <td>{{ $offer->created_at }}</td>
                                                                <td>{{ $offer->updated_at }}</td>
                                                                <td>
                                                                    <a href="/offer/{{$offer->id}}/edit">
                                                                        <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-edit"></i></button>
                                                                    </a>
                                                                    <form class="form-table" method='POST'  action="/offer/{{$offer->id}}">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button type='submit' class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-close"></i></button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    </div>

    <div id="styleSelector">
    </div>

</div>
@stop
