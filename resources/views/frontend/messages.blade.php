{{-- Load app layout --}}

@extends('layout.app')

@section('content')
    <div class="mobile-wrap">
        <div class="mobile clearfix">
            <div class="header">
                <span class="ion-ios-navicon pull-left"><i></i></span>
                <span class="title">Chats</span>
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



                <div class="html chats visible">
                    <div class="row">
                        <div class="col-sm-12 p-1">
                            {{-- Messages --}}
                            <div class="card messages" style="height: 440px;">
                                <div class="card-body">
                                    <div class="item bg-primary-50 text-right p-2">
                                        <p class="mb-0">My message</p>
                                    </div>
                                    <div class="item bg-primary-50 text-right p-2">
                                        <p class="mb-0">My message</p>
                                    </div>
                                    <div class="item bg-gray-50 p-2">
                                        <p class="mb-0">Your message</p>
                                    </div>
                                    <div class="item bg-gray-50 p-2">
                                        <p class="mb-0">Your message</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent" style="height: 50px;">
                                {{-- Input with button and emoji --}}
                                <div class="w-100">
                                    {{-- Input group --}}
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your message">
                                        <div class="input-group-append">
                                            <button class="btn btn-message" type="button">
                                                <span class="ion-ios-paperplane"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
