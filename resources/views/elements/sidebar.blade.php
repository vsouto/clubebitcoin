<!-- Start Sidebar -->
<div class="col-1-3">
    <div class="wrap-col">
        <div class="widget-container">
            <form role="search" method="get" id="searchform" class="searchform" action="">
                <div>
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="Search" />
                </div>
            </form>
            <div class="clear"></div>
        </div>
        <div class="widget-container"><h6 class="widget-title">Categorias</h6>
            <ul>
                @foreach($categories as $category)
                    <li class="cat-item cat-item-5"><a href="{{ route('categories.show', ['slug' => $category->slug ]) }}" title="{{ $category->name }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="clear"></div></div><div class="widget-container"><h6 class="widget-title">Últimos Posts</h6>	<!-- Start Widget -->
            <ul class="widget-recent-posts">

                @foreach($posts as $post)
                    <li>
                        <div class="post-image">
                            <div class="post-mask"></div>
                            <img width="70" height="70" src="{{ asset('storage/' . $post->image) }}" class="attachment-post-widget #"  />                </div>

                        <h6><a href="#">{{ $post->title }}</a></h6>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                        <div class="clear"></div>
                    </li>
                @endforeach

            </ul>
            <!-- End Widget -->
            <div class="clear"></div></div>    <div class="clear"></div>
    </div>
</div>
<!-- End Sidebar -->