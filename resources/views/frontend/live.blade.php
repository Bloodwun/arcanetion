{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Go Live</span>
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


                <div class="html live visible">
                    <div class="forecast clearfix">
                        <div class="datetime pull-left bounceInLeft animated">
                            <div class="day">Thursday</div>
                            <div class="date">June 18, 2015</div>
                        </div>
                        <div class="temperature pull-right bounceInRight animated">
                            <div class="unit"><span class="ion-ios-sunny-outline"></span> 34<i>&deg;</i></div>
                            <div class="location">Kathmandu, Nepal</div>
                        </div>
                    </div>
                    <div class="live-list">
                        <div class="note clearfix slideInRight animated">
                            <div class="time pull-left">
                                <div class="hour">9</div>
                                <div class="shift">AM</div>
                            </div>
                            <div class="to-do pull-left">
                                <div class="title">Finish HTML Coding</div>
                                <div class="subject">Web UI</div>
                            </div>
                        </div>
                        <div class="note clearfix slideInRight animated">
                            <div class="time pull-left">
                                <div class="hour">1</div>
                                <div class="shift">PM</div>
                            </div>
                            <div class="to-do pull-left">
                                <div class="title">Lunch Break</div>
                                <div class="subject"></div>
                            </div>
                        </div>
                        <div class="note clearfix slideInRight animated" data-revert="slideOutRight">
                            <div class="time pull-left">
                                <div class="hour">3</div>
                                <div class="shift">PM</div>
                            </div>
                            <div class="to-do pull-left">
                                <div class="title">Design Stand Up</div>
                                <div class="subject">Hangouts</div>
                                <div class="user-list clearfix">
                                    <div class="user pull-left"><img
                                            src="https://raw.githubusercontent.com/khadkamhn/secret-project/master/img/usr-i.png">
                                    </div>
                                    <div class="user pull-left"><img
                                            src="https://raw.githubusercontent.com/khadkamhn/secret-project/master/img/usr-ii.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection
