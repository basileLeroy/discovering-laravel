@section('header')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="/" class="navbar-brand">
                    <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1133.86 1133.86" style="width: 60px;">
                        <defs>
                            <style>.cls-1{fill:#1d71b8;}.cls-2{fill:#15537c;}.cls-3{fill:none;opacity:0.33;}.cls-4{fill:#2899e5;}</style>
                        </defs>
                        <polygon class="cls-1" points="3.11 646.32 137.39 584.58 252.72 627.85 211.66 735.03 3.11 646.32"/>
                            <path class="cls-2" d="M264.88,830.87a98.57,98.57,0,0,1,93-98.41L533.39,239.38H421.6L193.54,880.17h84.57A98,98,0,0,1,264.88,830.87Z"/>
                                <rect class="cls-3" x="193.54" y="239.38" width="720.77" height="640.78"/>
                            <path class="cls-4" d="M3.06,646.39,43,532.86,445.12,331.09,400.29,456.64l-263,128Z"/>
                        <polygon class="cls-4" points="552.52 337.95 587.61 239.38 620.58 239.38 620.58 337.96 552.52 337.95"/>
                        <polygon class="cls-4" points="516.62 880.16 551.7 781.58 695.66 781.58 695.66 880.16 516.62 880.16"/>
                            <path class="cls-4" d="M448.86,781.58a98.45,98.45,0,0,1,0,98.59h68.58l35.08-98.59Z"/>
                                <circle class="cls-4" cx="363.46" cy="830.87" r="63.61"/>
                            <path class="cls-1" d="M822,361a211.28,211.28,0,0,1-1.29,105.17l175.77,34.56L1130.8,439Z"/>
                            <path class="cls-1" d="M709.65,513.38a183.1,183.1,0,0,0-145,71.1H694.41c.81,0,1.62-.06,2.43-.06a98.58,98.58,0,1,1,0,197.16c-.81,0-1.62,0-2.44-.06H557.78c30.6,58.62,81.16,98.65,151.87,98.65C810.93,880.17,893,798.06,893,696.78S810.93,513.38,709.65,513.38Z"/>
                        <polygon class="cls-1" points="466.51 584.42 501.91 485.83 667.68 485.83 613.55 584.42 466.51 584.42"/>
                        <path class="cls-4" d="M620.36,239.38a175.21,175.21,0,0,0-25.47,1.88L560.48,338h52a77.56,77.56,0,0,1,8.54-.5c41.21,0,74.63,33.24,74.63,74.25S662.25,486,621,486c-1.37,0-2.74-.06-4.1-.13h-115L487.3,527c31.53,34.22,81.71,57.43,132.05,57.43,95.27,0,173.53-78.59,173.53-173.4S715.63,239.38,620.36,239.38Z"/>
                        <path class="cls-4" d="M1130.8,439l-39.93,113.53L688.73,754.25,733.56,628.7l263-128Z"/>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 20px; font-weight: 400;">
                        <li class="nav-item {{ Request::is('/') ? 'watched' : 'notwatching' }}">
                            <a class="nav-link active" aria-current="page" href="/">ABOUT</a>
                        </li>

                        <li class="nav-item {{ Request::is('projects') ? 'watched' : 'notwatching' }}">
                            <a class="nav-link" href="/projects">Projects</a>
                        </li>
                        
                        <li class="nav-item {{ Request::is('articles') ? 'watched' : 'notwatching' }}">
                            <a class="nav-link" href="/articles">Articles</a>
                        </li>

                        <li class="nav-item {{ Request::is('contact') ? 'watched' : 'notwatching' }}">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <div class="login-container d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 20px; font-weight: 400;">
                            <li class="nav-item {{ Request::is('review') ? 'watched' : 'notwatching' }}">
                                <a class="nav-link" href="/review">Post your feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection