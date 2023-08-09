            <nav id="nav">
                <div id="nav-left">
                    <a href="#">
                        <img src="/storage/imgs/logo-nobcg.png" alt="logo" class="logo">
                    </a>
                </div>
                <div id="nav-right">
                    @auth
                    <ul>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                    </ul>
                    <div id="hamburger">
                        <i class="bi bi-list"></i>
                    </div>
                    @else
                    <ul>
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
            
                <div id="dropMenu">
                <ul id="dropList">
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                        <li>
                            <a href="#">item</a>
                        </li>
                </ul>
            </div>