{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Profile</span>
                <span class="ion-ios-search pull-right"></span>
                <div class="search">
                    <form method="post">
                        <input type="search" placeholder="Search Here">
                    </form>
                </div>
            </div>

            {{-- Load sidebar from layout --}}
            @include('layout.sidebar')

            <div class="content">

                <div class="html search">
                    <div class="title bounceInDown animated">Search Result</div>
                    <p class="flipInX animated">Sorry,<br>no matches found for <b class="key"></b></p>
                </div>



                <div class="html profile visible">
                    <div class="photo flipInX animated">
                        <img src="{{ asset('images/users/abdul.jpg') }}">
                        <div class="social">
                            <a href="https://facebook.com/" target="_blank" class="soc-item soc-count-1"><span
                                    class="ion-social-facebook"></span></a>
                            <a href="https://twitter.com/" target="_blank" class="soc-item soc-count-2"><span
                                    class="ion-social-twitter"></span></a>
                            <a href="https://github.com/" target="_blank" class="soc-item soc-count-3"><span
                                    class="ion-social-github"></span></a>
                            <a href="https://pinterest.com/" target="_blank" class="soc-item soc-count-4"><span
                                    class="ion-social-pinterest"></span></a>
                            <a href="https://np.linkedin.com/in/" target="_blank" class="soc-item soc-count-5"><span
                                    class="ion-social-linkedin"></span></a>
                            <a href="http://dribbble.com/" target="_blank" class="soc-item soc-count-8"><span
                                    class="ion-social-dribbble"></span></a>
                        </div>
                    </div>
                    <div class="details">
                        <p class="heading flipInY animated">
                            <span class="name">Abdul Shakoor</span>
                        </p>
                        <p class="text fadeInUp animated">Abdul Shakoor is renowned for his expertise in Arcanetions,
                            showcasing strategic prowess and adept gameplay. With a passion for mastering game mechanics and
                            fostering camaraderie, he stands as a formidable player in the gaming community.</p>
                    </div>
                </div>


            </div>

            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection
