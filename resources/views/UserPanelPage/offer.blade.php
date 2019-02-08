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


                                {{-- первая часть --}}
                                <div class="col-md-9">
                                    <div class="col-md-12">
                                        <div class="card table-card">
                                            <div class="card-header">
                                                <h2 class='text-center'>{{$offer->title}}</h2>
                                                <p>
                                                    Статус: {{$offer->condition}}
                                                </p>
                                            </div>
                                            <div class="card-block">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <h3>Краткое описание</h3>
                                                            <p class="text-offer-p">
                                                                {{$offer->description}}
                                                            </p>
                                                            <h3>Правило оффера</h3>
                                                            <p class="text-offer-p">
                                                                {{$offer->promo}}
                                                            </p>
                                                            {{--  <h3>Показатели конверсий</h3>
                                                            <div class="table-responsive">
                                                                <table class="table table-hover m-b-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Company</th>
                                                                            <th>Start Date</th>
                                                                            <th>End Date</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Apple Company</td>
                                                                            <td>23/05/2017</td>
                                                                            <td>04/08/2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Envato Pvt Ltd.</td>
                                                                            <td>20/03/2017</td>
                                                                            <td>04/08/2019</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Dribble Company</td>
                                                                            <td>13/05/2017</td>
                                                                            <td>03/01/2018</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>  --}}
                                                        
                                                            @if (Auth::check())
                                                                <div class='center'>
                                                                    <a href="/offer/{{$offer->id}}/lead">
                                                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="primary-popover-content">
                                                                            Добавить лид к данному офферу
                                                                        </button>
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if ($offer->images()->first())
                                                                <img class="offer-img" src="{{ asset($offer->images()->first()->path) }}" alt="">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- вторая часть --}}
                                <div class="col-md-3">
                                    <div class="col-md-12">
                                        <div class="card new-cust-card">
                                            <div class="card-header">
                                                <h5>Цели</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-hover m-b-0 without-header">
                                                        <tbody>
                                                            @foreach ( $offer->rewards()->get() as $reward )
                                                                <tr>
                                                                <td>
                                                                    <h3>{{ $reward->amount }}</h3>
                                                                </td>
                                                                <td>
                                                                    <p>Engagement</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
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
    </div>

    <div id="styleSelector">
    </div>

</div>
@stop
