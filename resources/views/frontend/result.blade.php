{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Results</span>
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


                <div class="html result visible">
                    <div class="flipInX animated">
                        <h2>The elf Abdul cast a spell at the goblin</h2>
                    </div>
                    <h5 class="flipInX animated"> Casted Fire storm </h5>
                    <h5 class="flipInX animated">Successful attack </h5>
                    <p class="flipInX animated">overcame oppenent resistance and was able to cause fire damage</p>
                </div>
            </div>

            {{-- Load Nav from layout --}}

            @include('layout.nav')

        </div>
    </div>
@endsection
