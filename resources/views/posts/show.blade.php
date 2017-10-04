@extends('layouts.app')

@section('content')
    <!-- Start Main Container -->
    <div class="container zerogrid">

        <!-- Start Posts Container -->
        <div class="col-2-3" id="post-container">
            <div class="wrap-col">

                <!-- Start Post Item -->
                <div class="post">
                    <div class="post-margin">

                        <div class="post-avatar">
                            <div class="avatar-frame"></div>
                            <img alt='' src='{{ asset('img/user.png') }}' class='avatar avatar-70 photo' height='70' width='70' />
                        </div>

                        <h4>{{ $post->title }}</h4>
                        <ul class="post-status">
                            <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
                            <li>
                                <i class="fa fa-folder-open-o"></i>
                                @if ($post->category)
                                    <a href="{{ route('categories.show', ['slug' => $post->category->slug]) }}" title="View all posts in {{ $post->category->name }}" rel="category">
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

                        <!-- Post Tags -->

                        <div class="post-tags">
                            <span class="fa-stack fa-lg">
                               <i class="fa fa-circle fa-stack-2x"></i>
                               <i class="fa fa-tags fa-stack-1x fa-inverse"></i>
                            </span>
                            {!! getTags($post->meta_keywords) !!}
                        </div>
                        <div class="clear">
                        </div>
                        <!-- End Post Tags -->

                    </div>

                    <!-- Post Social -->
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
                    </ul>
                    <!-- End Post Social -->
                    <div class="clear"></div>
                </div>
                <!-- End Post Item -->
{{--
                <div class="post">
                    <div class="post-margin">

                        <!-- Start Related Item -->
                        <div class="related-posts">

                            <div class="post-avatar">
                                <div class="avatar-frame"></div>
                                <img width="70" height="70" src="img/one-more-beer-70x70.png" class="attachment-post-widget #"  />    </div>

                            <div class="related-posts-aligned">
                                <h6><a href="#">One More Beer</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <!-- End Related Item -->


                        <!-- Start Related Item -->
                        <div class="related-posts">

                            <div class="post-avatar">
                                <div class="avatar-frame"></div>
                                <img width="70" height="70" src="img/Port_Harbor1-70x70.jpg" class="attachment-post-widget #"  />    </div>

                            <div class="related-posts-aligned">
                                <h6><a href="#">Port Harbor</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <!-- End Related Item -->


                        <!-- Start Related Item -->
                        <div class="related-posts">

                            <div class="post-avatar">
                                <div class="avatar-frame"></div>
                                <img width="70" height="70" src="img/Timothy-J-Reynolds-2560x14401-70x70.jpg" class="attachment-post-widget #"  />    </div>

                            <div class="related-posts-aligned">
                                <h6><a href="#">Underground Volcano</a></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet auctor ligula. Donec eu</p>
                                <div class="clear"></div>
                            </div>

                            <div class="clear"></div>
                        </div>
                        <!-- End Related Item -->

                        <div class="clear"></div>
                    </div>
                </div>--}}

    {{--

                <!-- Comments -->
                <div class="comment-container">

                    <h6 id="comment-header">No Comments, Be The First!</h6>

                    <ul class="comment-list">
                    </ul>

                    <!-- Comment Form -->
                    <div class="commen-form">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel Reply</a></small></h3>
                            <form action="http://demo.themesmarts.com/euclid/wp-comments-post.php" method="post" id="comment-form-container" class="comment-form">
                                <p class="comment-notes"></p>							<input type="text" name="author" placeholder="Enter Name" class="comment-name"  />
                                <input type="text" name="email" placeholder="Enter Email" class="comment-email"  />
                                <input type="text" name="url" placeholder="Enter URL" class="comment-url" />
                                <textarea name="comment" placeholder="Enter Message Here" class="comment-text-area"></textarea>						<p class="form-allowed-tags"></p>						<p class="form-submit">
                                    <input name="submit" type="submit" id="comment-submit" value="Send Comment" />
                                    <input type='hidden' name='comment_post_ID' value='49' id='comment_post_ID' />
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                </p>
                            </form>
                        </div><!-- #respond -->
                        <div class="clear"></div>
                        </form>
                    </div>
                    <!-- End Comment Form -->

                </div>
                <!-- End Comments -->
    --}}

                <div class="clear"></div>
            </div>
        </div>
        <!-- End Posts Container -->

        @include('elements.sidebar')

        <div class="clear"></div>

    </div>
    <!-- End Main Container -->
@endsection