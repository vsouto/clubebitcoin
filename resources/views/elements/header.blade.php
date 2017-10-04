<!-- Start Header -->
<div class="container zerogrid">
    <div class="col-full"><div class="wrap-col">
            <div id="header-nav-container">

                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/clube-bitcoin-2.png') }}" id="logo" />
                </a>

                <!-- Navigation Menu -->
                <ul class="sf-menu"><li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="#">Categorias</a>
                        <ul class="sub-menu">
                            @foreach($categories as $category)
                                <li class="menu-item"><a href="{{ route('categories.show', ['slug' => $category->slug]) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item"><a href="{{ route('sobre') }}">Sobre</a></li>
                </ul>
                <!-- End Navigation Menu -->

                <div class="clear"></div>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="spacing-30"></div>
<!-- End Header -->