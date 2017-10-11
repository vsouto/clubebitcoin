
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                @if (Auth::check())
                    <div class="image">
                        <a href="{{ route('users.show',[ \Illuminate\Support\Facades\Auth::user()->slug]) }}">
                            <img src="{{ asset('img/user.png') }}"
                                 alt="{{ \Illuminate\Support\Facades\Auth::user()->name }}" />
                        </a>
                    </div>
                    <div class="info">
                        <a href="{{ route('users.show',[\Illuminate\Support\Facades\Auth::user()->slug]) }}">
                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                    </div>
                @else
                    <div class="info">
                        <a class="" href="{{ url('login') }}">
                            Faça Login
                        </a>
                        |
                        <a class="" href="{{ url('register') }}">
                            Registrar
                        </a>
                    </div>
                @endif
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub {{ isActive('home') }}">
                <a href="{{ route('home') }}">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ isActive('posts') }}">
                <a href="{{ route('posts.index') }}">
                    <i class="fa fa-newspaper-o"></i>
                    Notícias
                </a>
            </li>
            <li class="{{ isActive('events') }}">
                <a href="{{ route('events.index') }}">
                    <i class="fa fa-trophy"></i>
                    <span>Eventos</span>
                </a>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>