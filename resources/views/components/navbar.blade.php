<div>
            <nav id="nav">
                <div id="nav-left">
                    <a href="{{route('home')}}">
                        <img src="/storage/imgs/logo-nobcg.png" alt="logo" class="logo">
                    </a>
                </div>
                <div id="nav-right">
                    @auth
                    <ul>
             @foreach($navLinks as $key => $link)
                <li>
                <a href="{{$link}}">{{$key}}</a>
              </li>
            @endforeach
                        <li>
                        <span>{{auth()->user()->name}}</span>
                        </li>
                    </ul>
                    <div id="hamburger">
                        <i class="bi bi-list"></i>
                    </div>
                </div>
            </nav>
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
            
                <div id="dropMenu">
                <ul id="dropList">
             @foreach($navLinks as $key => $link)
                <li>
                <a href="{{$link}}">{{$key}}</a>
              </li>
            @endforeach
                </ul>
            </div>
            </div>