@extends('layouts.main')

@section('content')
        <!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">News</a></li>
        <li class="active">{{ $post->title }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ $post->title }} </h1>
    <!-- end page-header -->
    <!-- begin profile-container -->
    <div class="profile-container">
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin profile-left -->
            <div class="post-left">
                <!-- begin profile-image -->
                <div class="post-image">
                    <img src="{{ asset('storage/' . $post->image) }}" width="100%">
                    <i class="fa fa-user hide"></i>
                </div>
                <!-- end profile-image -->
                <!-- begin profile-highlight -->
                <div class="profile">
                    Postado em {{ $post->created_at->diffForHumans() }}
                </div> <div>
                        <small>Por</small> <a href="javascript:;">{{ $post->author->name }}</a>
                    </div>
                <!-- end profile-highlight -->
            </div>
            <!-- end profile-left -->
            <!-- begin profile-right -->
            <div class="profile-right">
                <!-- begin profile-info -->
                <div class="profile-info">
                    <!-- begin table -->
                    <div class="table-responsive">
                        <div class="article-header">
                            <h4>{!! $post->excerpt !!}</h4>
                        </div>
                        <div class="article-text">
                            {!! $post->body !!}
                        </div>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end profile-info -->
            </div>
            <!-- end profile-right -->
        </div>
        <!-- end profile-section -->

    </div>
    <!-- end profile-container -->
</div>
<!-- end #content -->

@endsection

@section('scripts')

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="assets/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
@endsection
