{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Character</span>
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

                <div class="html character visible">
                    <div class="characters">
                        <div class="item">
                            <div class="card card-transparent">
                                <div class="card-body">
                                    <div class="flipInX animated">
                                        <h6 class="fs-xxxs my-0">Winner</h6>
                                        <h5>Abdul Shakoor</h5>
                                    </div>
                                    <p class="flipInX animated">Elf </p>
                                    <p class="flipInX animated">Male </p>
                                    <p class="flipInX animated">Wearing blue jean white shirt and blue robe carrying a stave
                                    </p>
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
