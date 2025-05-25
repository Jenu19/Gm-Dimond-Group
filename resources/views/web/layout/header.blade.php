<header>
    <div class="container">
        <div class="d-flex justify-between align-center">
            <div class="menu">
                <li>
                    <a href="{{ route('home') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="80" height="30"
                            viewBox="0 0 48 48">
                            <linearGradient id="mix5orRz0V12IF0t1Mukva_252e25uB3Gok_gr1" x1="0" x2="0"
                                y1="0" y2="-1.491" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#1D475E" stop-opacity=".8"></stop>
                                <stop offset="1" stop-color="#1D475E" stop-opacity=".8"></stop>
                            </linearGradient>
                            <path fill="url(#mix5orRz0V12IF0t1Mukva_252e25uB3Gok_gr1)"
                                d="M38,14H6v-4c0-2.2,1.8-4,4-4h32v4C42,12.2,40.2,14,38,14z M42,24v-4H10c-2.2,0-4,1.8-4,4v4h32	C40.2,28,42,26.2,42,24z M42,38v-4H10c-2.2,0-4,1.8-4,4v4h32C40.2,42,42,40.2,42,38z">
                            </path>
                        </svg>
                    </a>
                    <div class="drop-menu">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('project') }}">Our Projects</a></li>
                            <li><a href="{{ route('careers') }}">Careers</a></li>
                            <li><a href="{{ route('event') }}">Media/Event</a></li>
                            <li><a href="javascript:void(0)">Blogs</a></li>
                            <li><a href="javascript:void(0)">Contact Us</a></li>
                        </ul>
                    </div>

                </li>
            </div>
            <a href="{{ route('home') }}"><img src="{{ url(env('ASSETPATHURL') . 'web/images/logo.png') }}"
                    alt="logo" title="logo" width="55px" height="89px"></a>
            <nav>
                <ul class="d-flex align-center">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('project') }}">Our Projects</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                    <li><a href="{{ route('event') }}">Media/Event</a></li>
                    <li><a href="javascript:void(0)">Blogs</a></li>
                    <li><a href="javascript:void(0)">Contact Us</a></li>
                </ul>
            </nav>

            <a href="{{ route('home') }}" class="d-flex align-center header-btn">
                <span>Enquire</span>
                <svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 8V9H25V8V7H0V8Z"
                        fill="white" />
                </svg>
            </a>
        </div>
    </div>
</header>
