{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Settings</span>
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



                <div class="html settings visible">
                    <div class="setting-list">
                        <div class="gear clearfix slideInRight animated">
                            <div class="title pull-left">General</div>
                            <div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
                        </div>
                        <div class="gear clearfix slideInLeft animated">
                            <div class="title pull-left"><label for="gear-notice">Notification</label></div>
                            <div class="action pull-right"><input id="gear-notice" class="on-off" type="checkbox"><label
                                    for="gear-notice"></label></div>
                        </div>
                        <div class="gear clearfix slideInRight animated">
                            <div class="title pull-left"><label for="gear-sound">Sound</label></div>
                            <div class="action pull-right"><input id="gear-sound" class="on-off" type="checkbox"
                                    checked><label for="gear-sound"></label></div>
                        </div>
                        <div class="gear clearfix slideInLeft animated">
                            <div class="title pull-left">Theme</div>
                            <div class="action pull-right">Standard <span class="ion-ios-arrow-right"></span></div>
                        </div>
                        <div class="gear clearfix slideInRight animated">
                            <div class="title pull-left">Support</div>
                            <div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
                        </div>
                        <div class="gear clearfix slideInLeft animated">
                            <div class="title pull-left">Privacy</div>
                            <div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection
