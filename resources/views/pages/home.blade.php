@extends('layouts.main')

@section('content')
        <!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard <small></small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        @foreach($quotes as $quote)
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-{{ str_replace('/','',$quote->getName()) }}">
                    <div class="stats-icon"><i class="fa fa-child"></i></div>
                    <div class="stats-info">
                        <h4>{{ $quote->getName() }}</h4>
                        <p id="stats_total_players">
                            {{--<i class="fa fa-refresh fa-spin"></i>--}}
                            U$ {{ number_format($quote->getLastTradePrice(), 2) }}
                        </p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('home') }}">Ver Lista <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
        @endforeach{{--
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>Ethereum</h4>
                    <p id="stats_total_teams">
                        <i class="fa fa-refresh fa-spin"></i>
                    </p>
                </div>
                <div class="stats-link">
                    <a href="{{ route('home') }}">Ver Lista <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-purple">
                <div class="stats-icon"><i class="fa fa-trophy"></i></div>
                <div class="stats-info">
                    <h4>Ripple</h4>
                    <p id="stats_events">
                        <i class="fa fa-refresh fa-spin"></i>
                    </p>
                </div>
                <div class="stats-link">
                    <a href="{{ route('home') }}">Ver Lista <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-md-3 col-sm-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-retweet"></i></div>
                <div class="stats-info">
                    <h4>Dash</h4>
                    <p id="stats_total_updates"><i class="fa fa-refresh fa-spin"></i></p>
                </div>
                <div class="stats-link">
                    <a href="{{ route('home') }}">Ver Todas <i class="fa fa-arrow-circle-o-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->--}}
    </div>
    <!-- end row -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-8 -->
        <div class="col-md-8">

            <ul class="nav nav-tabs nav-tabs-inverse nav-justified nav-justified-mobile" data-sortable-id="index-1">
                <li class="active"><a href="#latest-post" data-toggle="tab"><i class="fa fa-comment-o m-r-5"></i> <span class="hidden-xs">Últimas Notícias</span></a></li>
                <li class=""><a href="#purchase" data-toggle="tab"><i class="fa fa-trophy m-r-5"></i> <span class="hidden-xs">Próximos Eventos</span></a></li>
            </ul>
            <div class="tab-content" data-sortable-id="index-2">
                <div class="tab-pane fade active in" id="latest-post">
                    <div class="height-sm" data-scrollbar="true">
                        <ul class="media-list media-list-with-divider">
                            @foreach ($posts as $post)
                                <li class="media media-lg" style="min-height: 90px;">
                                    <a href="{{ route('posts.show', [$post->slug]) }}" class="pull-left">
                                        <img src="{{ asset('storage/' .$post->image) }}" alt="" class="media-object" width="172px"
                                             style="max-height: 172px" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="{{ route('posts.show',[$post->slug]) }}">{{ $post->title }}</a>
                                        </h4>
                                        {{ $post->excerpt }}
                                        <div class="text text-right text-muted text-align-reverse" style="margin-right: 4px">
                                            <label class="label label-{{ $post->category->name }}">{{ $post->category->name }}</label>
                                            <br>
                                            {{ $post->created_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="{{ route('home') }}" class="text-inverse">Ver Todas</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="purchase">
                    <div class="height-sm" data-scrollbar="true">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Início</th>
                                <th></th>
                                <th>Evento</th>
                                <th>Região</th>
                                <th>Descrição</th>
                                <th>Stream</th>
                                <th>Link</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="widget-chart with-sidebar bg-black">
                <div class="widget-chart-content">
                    <h4 class="chart-title">
                        Live Streams
                        <small>acompanhe os melhores jogadores brasileiros</small>
                    </h4>
                    <div id="visitors-line-chart" class="morris-inverse" style="height: 260px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <ul class="registered-users-list clearfix">

                        </ul>
                    </div>
                </div>
                <div class="widget-chart-sidebar bg-black-darker">
                    <div class="chart-number">
                        512
                        <small>total seguidores</small>
                    </div>
                    <div id="visitors-donut-chart" style="height: 160px">
                    </div>
                    <ul class="chart-legend">
                        <li><i class="fa fa-circle-o fa-fw text-success m-r-5"></i> 12 <span>Live Streams</span></li>
                        <li><i class="fa fa-circle-o fa-fw text-info m-r-5"></i> <span><a href="{{ route('home') }}">Ver Todos</a></span></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- end col-8 -->
        <!-- begin col-4 -->
        <div class="col-md-4">
            <div class="panel panel-inverse" data-sortable-id="index-4">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Últimas atualizações</h4>
                </div>
                <div class="panel-body p-t-0">
                    <table class="table table-valign-middle m-b-0">
                        <thead>
                        <tr>
                            <th>Moeda</th>
                            <th>Valor</th>
                            <th>%</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <div class="panel-footer text-center">
                        <a href="{{ route('home') }}" class="text-inverse">Ver Todos</a>
                    </div>
                </div>
            </div>

            <!-- calendar -->
            <div class="panel panel-inverse" data-sortable-id="index-5">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Calendário</h4>
                </div>
                <div class="panel-body">
                    <div id="calendar"></div>
                    <br>
                    <div class="panel-footer text-center">
                        <a href="{{ route('home') }}" class="text-inverse">Ver Eventos</a>
                    </div>
                </div>
            </div>



        </div>
        <!-- end col-4 -->

    </div>
    <!-- end row -->


</div>
<!-- end #content -->
@endsection

@section('scripts')
    @include('elements.scripts')
    <script src="{{ asset('assets/plugins/isotope/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lightbox/js/lightbox-2.6.min.js') }}"></script>

    <script src="{{ asset('js/moment/moment.js') }}"></script>
    <script src="{{ asset('js/fullcalendar/fullcalendar.min.js') }}"></script>
    <link href="{{ asset('css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('assets/js/gallery.demo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            Gallery.init();

            getEvents();

            getStats('players');
            getStats('teams');
            getStats('updates');
            getStats('events');
        });
    </script>
@endsection