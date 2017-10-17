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
        @if ($quotes)
            @foreach($quotes as $quote)
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-stats bg-{{ preg_replace('/[^\p{L}\p{N}\s]/u', '', $quote->getSymbol()) }}">
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
            @endforeach
        @endif
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
                            @if ($quotes)
                                @foreach ($quotes as $quote)
                                    <tr>
                                        <th>{{ $quote->getName() }}</th>
                                        <th>U$ {{ number_format($quote->getLastTradePrice(), 2) }}</th>
                                        <th>{{ $quote->getChange() }}</th>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="panel-footer text-center">
                        <a href="{{ route('home') }}" class="text-inverse">Ver Todos</a>
                    </div>
                </div>
            </div>
{{--
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
            </div>--}}

            <!-- videos -->
            <div class="panel panel-inverse" data-sortable-id="index-5">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="index-4">
                    <div class="panel-heading">
                        <h4 class="panel-title">Últimos Vídeos <span class="pull-right label label-success"></span></h4>
                    </div>
                    <ul class="registered-users-list clearfix">
                        @foreach ($videos as $video)
                            <li>
                                <a href="{{ route('posts.show',[$video->slug]) }}"><img src="{{ asset('storage/'. $video->image) }}" alt=""></a>
                                <h4 class="username text-ellipsis">
                                    {{ $video->title }}
                                    <small>{{ $video->author->name }}</small>
                                </h4>
                            </li>
                        @endforeach

                    </ul>
                    <div class="panel-footer text-center">
                        <a href="javascript:;" class="text-inverse">View All</a>
                    </div>
                </div>
                <!-- end panel -->
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

        });
    </script>
@endsection