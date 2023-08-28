<div class="container">
    <div class="langs" style="margin-top: 20px; height: 30px;">
        <x-_locale lang='it' nation='it' />
        <x-_locale lang='en' nation='gb' />
        <x-_locale lang='es' nation='es' />
    </div>
    <nav id="nav">
        <div id="nav-left">
            <a href="{{route('home')}}">
                <img src="/storage/imgs/logo_img-removebg-preview.png" alt="logo" class="logo">
            </a>
            <span class="logo_name">Presto.it</span>
        </div>
        <div id="nav-right">
            @auth
            <div>
                <span class="nav-mail"><i class="fa-solid fa-user"></i> {{auth()->user()->name}}</span>
            </div>

            <div id="hamburger">
                <i class="bi bi-list"></i>
            </div>

            <ul id="dropList">
                @foreach($navLinks as $key => $link)
                <li>
                    <a href="{{$link}}">{{$key}}</a>
                </li>
                @endforeach

                @if(auth()->user()->is_revisor)
                <li class="position-relative">
                    <a href="{{route('revisor.index')}}" class="position-relative">Zona revisore <i class="fa-solid fa-bell"></i></a>
                    @if(App\Models\Announcement::toBeRevisionedCount())
                    <span class="position-absolute top-0 translate-middle badge bg-danger">
                        {{App\Models\Announcement::toBeRevisionedCount()}}
                    </span>
                    @endif
                </li>
                @else
                <li>
                    <a href="{{route('work.revisor')}}">{{__('ui.bacomeRevisor')}}</a>
                </li>
                @endif
                <li class="p-0 m-0">
                    <form action="/logout" method="POST" id="logout" class="p-0 m-0">
                        @csrf
                        <button type="submit" class=" logout-btn mb-2 mb-md-0"><i class="bi bi-box-arrow-right"></i>Log Out</button>
                    </form>
                </li>

            </ul>
            @else
            <ul class="auth-btns">
                <li>
                    <a href="/login">Accedi</a>
                </li>
                <li>
                    <a href="/register">Registrati</a>
                </li>
            </ul>
            @endauth
        </div>
    </nav>
</div>