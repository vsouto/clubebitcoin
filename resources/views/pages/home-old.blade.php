@extends('layouts.app')

@section('content')


    @include('elements.carrousel')

    <!-- Start Main Container -->
    <div class="container zerogrid">

        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
            <div class="wrap-col">

                @foreach ($posts as $post)
                    <!-- Start Post Item -->
                    <div class="post">
                        <div class="post-margin">

                            <div class="post-avatar">
                                <div class="avatar-frame"></div>
                                <img alt='' src="{{ asset('img/user.png') }}" class='avatar avatar-70 photo' height='70' width='70' />                </div>

                            <h4 class="post-title"><a href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h4>
                            <ul class="post-status">
                                <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
                                <li><i class="fa fa-folder-open-o"></i>
                                    @if ($post->category)
                                        <a href="{{ route('categories.show', ['slug' => $post->category->slug]) }}" title="View all posts in Illustration" rel="category">
                                            {{ $post->category->name }}
                                        </a>
                                    @else
                                        Geral
                                    @endif
                                </li>
                                <li><i class="fa fa-comment-o"></i>No Comments</li>
                            </ul>
                            <div class="clear"></div>
                        </div>

                        <div class="featured-image">
                            <img src="{{ asset('storage/' .$post->image) }}" class="attachment-post-standard "  />
                            <div class="post-icon">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                    </span>
                            </div>
                        </div>

                        <div class="post-margin">
                            <p>{!! $post->body !!}</p>
                        </div>

                        <ul class="post-social">
                            <li><a href="#" class="social-network-link">
                                    <i class="fa fa-facebook"></i></a>
                            </li>

                            <li>
                                <a href="#" class="social-network-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-network-link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="social-network-link">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('posts.show',['slug' => $post->slug]) }}" class="readmore">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
                            </li>
                        </ul>

                        <div class="clear"></div>
                    </div>
                    <!-- End Post Item -->
                @endforeach


                <!-- Start Pagination -->
                <div class="spacing-20"></div><ul class="pagination"><li class='current'><a href=''>1</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=2'>2</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=3'>3</a></li><li><a href='http://demo.themesmarts.com/euclid/?paged=4'>4</a></li></ul>
                <!-- End Pagination -->

                <div class="clear"></div>
            </div>
        </div>
        <!-- End Posts Container -->

        @include('elements.sidebar')

        <div class="clear"></div>

    </div>
    <!-- End Main Container -->
@endsection
