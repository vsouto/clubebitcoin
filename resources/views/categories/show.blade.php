@extends('layouts.main')

@section('content')

    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Categories</a></li>
            <li class="active">{{ $category->name }}</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">{{ $category->name }} </h1>
        <!-- end page-header -->
        <!-- begin profile-container -->
        <div class="profile-container">
            ae

        </div>
        <!-- end profile-container -->
    </div>
    <!-- end #content -->

@endsection
