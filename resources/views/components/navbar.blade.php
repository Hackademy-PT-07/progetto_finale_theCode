<div>
    <nav id="nav">
        <div id="nav-left">
            <a href="{{route('home')}}">
                <img src="/storage/imgs/logo-nobcg.png" alt="logo" class="logo">
            </a>
        </div>

        <div id="nav-right">
            @auth
            <div>
                <span class="nav-mail">{{auth()->user()->name}}</span>
            </div>

            <div id="hamburger">
                <i class="bi bi-list"></i>
            </div>

            <div id="dropMenu">
                <ul id="dropList">
                    @foreach($navLinks as $key => $link)
                    <li>
                        <a href="{{$link}}">{{$key}}</a>
                    </li>
                    @endforeach
                    @if(Auth::user()->is_revisor)
                    <li>
                        <a href="{{route('revisor.index')}}"  class="position-relative">Zona revisore</a>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Announcement::toBeRevisionedCount()}}
                        </span>
                    </li>
                    @endif
                    <li>
                        <form action="/logout" method="POST" id="logout">
                            @csrf
                                <button type="submit" class="btn btn-danger w-100 logout">Log Out</button>
                        </form>
                    </li>
                </ul>
            </div>
                    <!-- <ul>
                        @foreach($navLinks as $key => $link)
                            <li>
                                <a href="{{$link}}">{{$key}}</a>
                            </li>
                        @endforeach
                            <li>
                                <span>{{auth()->user()->email}}</span>
                            </li> -->
                           
                    <!-- </ul> -->

                    
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
            </nav>
            
        </div>
</div>