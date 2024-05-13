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
                    {{-- <div class="d-flex">
                        <button class="btn btn-primary btn-sm">
                            Home
                        </button>
                        <button class="btn btn-secondary btn-sm">
                            Scan
                        </button>
                        <button class="btn btn-secondary btn-sm">
                            Play
                        </button>
                        <button class="btn btn-secondary btn-sm">
                            Result
                        </button>
                    </div> --}}
                    <div class="row">
                        <div class="col-sm-4 p-0">
                            <div class="live-img"
                                style="background-image: url('{{ asset('images/users/1.jpeg') }}'); background-size: cover">
                                {{-- <p>Winner</p> --}}
                                <div class="icon">
                                    <span class="ion-trophy"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 p-0">
                            <div class="live-img"
                                style="background-image: url('{{ asset('images/users/2.jpeg') }}'); background-size: cover">
                                {{-- <p>Winner</p> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 p-0">
                            <div class="live-img"
                                style="background-image: url('{{ asset('images/users/3.jpeg') }}'); background-size: cover">
                                {{-- <p>Winner</p> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 p-0">
                            <div class="live-img"
                                style="background-image: url('{{ asset('images/users/4.jpeg') }}'); background-size: cover">
                                {{-- <p>Winner</p> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 p-0">
                            <div class="live-img"
                                style="background-image: url('{{ asset('images/users/5.jpeg') }}'); background-size: cover">
                                {{-- <p>Winner</p> --}}
                            </div>
                        </div>
                        <div class="col-sm-4 p-0">
                            <div class="live-img"
                                style="background-image: url('{{ asset('images/users/6.jpeg') }}'); background-size: cover">
                                {{-- <p>Winner</p> --}}
                            </div>
                        </div>
                    </div>

                    {{-- Results --}}
                    <div class="results">
                        <div class="heading">
                            <h5 class="color-primary">Results</h5>
                        </div>
                        <div class="item">
                            <h5 class="flipInX animated my-0">The elf Abdul cast a spell at the goblin</h5>

                            <h6 class="flipInX animated my-0"> Casted Fire storm </h6>
                            <h6 class="flipInX animated my-0">Successful attack </h6>
                            <p class="flipInX animated my-0">overcame oppenent resistance and was able to cause fire damage
                            </p>

                        </div>
                    </div>
                </div>
                {{-- Load Nav from layout --}}

                @include('layout.nav')

            </div>
        </div>
    @endsection
