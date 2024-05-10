<div class="sidebar">
    <div class="sidebar-overlay"></div>
    <div class="sidebar-content">
        <div class="top-head">
            <div class="name">Abdul Shakoor</div>
            <div class="email">abdul.shakoor@gmail.com</div>
        </div>
        <div class="nav-left">
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><span
                    class="ion-ios-home-outline"></span> Home</a>
            <a class="{{ request()->routeIs('live') ? 'active' : '' }}" href="{{ route('live') }}"><span
                    class="ion-ios-videocam-outline"></span> Go Live</a>
            <a class="{{ request()->routeIs('character') ? 'active' : '' }}" href="{{ route('character') }}"><span
                    class="ion-ios-body-outline"></span> Character</a>
            <a class="{{ request()->routeIs('scan') ? 'active' : '' }}" href="{{ route('scan') }}"><span
                    class="ion-qr-scanner"></span> Scan</a>
            <a class="{{ request()->routeIs('play') ? 'active' : '' }}" href="{{ route('play') }}"><span
                    class="ion-ios-play-outline"></span> Play</a>
            <a class="{{ request()->routeIs('result') ? 'active' : '' }}" href="{{ route('result') }}"><span
                    class="ion-ios-wineglass-outline"></span> Result</a>
            <a class="{{ request()->routeIs('chats') ? 'active' : '' }}" href="{{ route('chats') }}"><span
                    class="ion-ios-chatboxes-outline"></span>Chat</a>
            {{-- Seprator --}}
            <hr class="seperator">

            <a class="{{ request()->routeIs('e-commerce') ? 'active' : '' }}" href="{{ route('e-commerce') }}"><span
                    class="ion-ios-cart-outline"></span> E Commerce</a>
            <a class="{{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}"><span
                    class="ion-ios-person-outline"></span> Profile</a>
            <a class="{{ request()->routeIs('settings') ? 'active' : '' }}" href="{{ route('settings') }}"><span
                    class="ion-ios-gear-outline"></span> Settings</a>
        </div>
    </div>
</div>
