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
                                                <h3 class>Лиды</h3>
                                            </div>
                                            <div class="col-md-3">
                                                <a href="/lead/create" class='right'><button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-plus"></i></button></a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>id Пользователя</th>
                                                            <th>id Оффера</th>
                                                            <th>Имя</th>
                                                            <th>Email</th>
                                                            <th>Комментарий</th>
                                                            <th>Выплата</th>
                                                            <th>Дата создания</th>
                                                            <th>Дата последнего обновления</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach  ($leads as $lead)
                                                            <tr>
                                                                <td>{{ $lead->id }}</td>
                                                                <td>{{ $lead->user_id }}</td>
                                                                <td>{{ $lead->offer_id }}</td>
                                                                <td>{{ $lead->name}}</td>
                                                                <td>{{ $lead->phone ? $lead->phone  : 'Не указан' }}</td>
                                                                <td>{{ $lead->email }}</td>
                                                                <td>{{ $lead->comment }}</td>
                                                                <td>{{ $lead->reward }}</td>
                                                                <td>{{ $lead->created_at }}</td>
                                                                <td>{{ $lead->updated_at }}</td>
                                                                <td>
                                                                    <a href="/lead/{{$lead->id}}/edit">
                                                                        <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-ui-edit"></i></button>
                                                                    </a>
                                                                    <form class="form-table" method='POST'  action="/lead/{{$lead->id}}">
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
