{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Home</span>
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


                <div class="html welcome visible">
                    <div class="datetime">
                        <div class="day lightSpeedIn animated">Monday</div>
                        <div class="date lightSpeedIn animated">March 5, 2024</div>
                        <div class="time lightSpeedIn animated">08:00 AM</div>
                    </div>
                </div>



            </div>

            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection
