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
                                                <div class="col-md-12">
                                                <h3 class>Лиды</h3>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Имя</th>
                                                            <th>Телефон</th>
                                                            <th>Email</th>
                                                            <th>Комментарий</th>
                                                            <th>Выплата</th>
                                                            <th>Статус</th>
                                                            <th>Дата создания</th>
                                                            <th>Дата последнего обновления</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @csrf
                                                    @method('PUT')
                                                        @foreach  ($offer->leads()->get() as $lead)
                                                            <tr>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        @if($lead->images()->first())
                                                                            <img src="{{  asset($lead->images()->first()->path) }}" alt="user image"
                                                                                class="img-radius img-80 align-top m-r-30">
                                                                        @endif
                                                                    </div>
                                                                </td>
                                                                <td name='name'  data-id="{{ $lead->id }}">{{ $lead->name}}</td>
                                                                <td name='phone' data-id="{{ $lead->id }}">{{ $lead->phone ? $lead->phone  : 'Не указан' }}</td>
                                                                <td name='email' data-id="{{ $lead->id }}">{{ $lead->email ? $lead->email : 'Не указан' }}</td>
                                                                <td name='comment' data-id="{{ $lead->id }}">{{ $lead->comment ? $lead->comment : 'Не указан' }}</td>
                                                                <td>
                                                                    <input name="reward" id="" class="form-control fill" type="number" value="{{ $lead->reward }}" data-id="{{ $lead->id }}">
                                                                </td>
                                                                <td>
                                                                    <select name="status_id" class="form-control fill" data-id="{{ $lead->id }}">
                                                                        @foreach($statusLead as $status) 
                                                                            <option value="{{ $status->id }}" {{ $status->id == $lead->status_id ? 'selected' : '' }}>{{ $status->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                                <td>{{ $lead->created_at }}</td>
                                                                <td>{{ $lead->updated_at }}</td>
                                                                <td>
                                                                    <a id="save" data-id="{{ $lead->id }}">
                                                                        <button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-save"></i></button>
                                                                    </a>
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
