{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Scan</span>
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


                <div class="html scan visible">
                    <div class="forms">
                        <div class="group clearfix slideInRight animated">
                            <label class="pull-left" for="scan-time"><span class="ion-ios-time-outline"></span>
                                Time</label>
                            <input class="pull-right" id="scan-time" type="time">
                        </div>
                        <div class="group clearfix slideInLeft animated">
                            <label class="pull-left" for="scan-date"><span class="ion-ios-calendar-outline"></span>
                                Date</label>
                            <input class="pull-right" id="scan-date" type="date">
                        </div>
                        <div class="group clearfix slideInRight animated">
                            <label class="pull-left" for="scan-title"><span class="ion-ios-paper-outline"></span>
                                Title</label>
                            <input class="pull-right" id="scan-title" type="text">
                        </div>
                        <div class="group clearfix slideInLeft animated">
                            <label class="visible" for="scan-detail"><span class="ion-ios-list-outline"></span>
                                Task</label>
                            <textarea class="visible" id="scan-detail" rows="3"></textarea>
                        </div>
                        <div class="action flipInY animated">
                            <button class="btn">Scan</button>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection
