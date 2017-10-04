<!-- Start Featured Carousel -->
<div class="container zerogrid">
    <div class="list_carousel">
        <ul id="featured-posts">
            <?php $count = 1; ?>
            @foreach ($posts as $post)
                <li class="{{ $count % 3 == 0? 'last' : 'first' }} carousel-item">
                    <div class="post-margin">
                        <h6><a href="{{ route('posts.show',['slug' => $post->slug]) }}">{{ substr($post->title, 0, 20) }}</a></h6>
                        <span><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString() }}</span>
                    </div>

                    <div class="featured-image">
                        <img width="290" height="130" src="{{ asset('storage/' .$post->image) }}"  style="height: 130px !important;"/>
                        <div class="post-icon">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                </span>
                        </div>
                    </div>

                    <div class="post-margin">
                        <p>{{ substr($post->excerpt, 0, 96) }}</p>
                    </div>
                </li>
                <?php $count++; ?>
            @endforeach
        </ul>

        <div class="clear"></div>

        <div class="carousel-controls">
            <a id="prev2" class="prev" href="#"><i class="fa fa-angle-left"></i></a>
            <a id="next2" class="next" href="#"><i class="fa fa-angle-right"></i></a>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- Start Featured Carousel -->