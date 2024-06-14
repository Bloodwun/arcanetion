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

                <div class="html play visible">
                    <div class="row">
                        <div class="col-12 p-1">
                            {{-- Messages --}}
                            <div class="card messages" style="height: 440px;">
                                <div class="card-body">
                                    <div class="item bg-gray-50 text-right p-2">
                                        <p class="mb-0">My message</p>
                                        <span class="mb-0 fs-xxs text-right text-muted">11:30 PM</span>
                                    </div>
                                    <div class="item bg-gray-50 text-right p-2">
                                        <p class="mb-0">My message</p>
                                        <span class="mb-0 fs-xxs text-right text-muted">11:30 PM</span>
                                    </div>
                                    <div class="item bg-gray-50 p-2">
                                        <p class="mb-0">Your message</p>
                                        <span class="mb-0 fs-xxs text-muted">11:30 PM</span>
                                    </div>
                                    <div class="item bg-gray-50 p-2">
                                        <p class="mb-0">Your message</p>
                                        <span class="mb-0 fs-xxs text-muted">11:30 PM</span>
                                    </div>
                                </div>
                                {{-- Dice --}}
                                <div class="dice">
                                    {{-- <img src="{{ asset('images/D6.png') }}" width="50" height="50" alt="Dice"> --}}
                                    {{-- Dice Selector --}}
                                    <div class="position-absolute cursor-pointer" style="bottom: 5px;">
                                        <div class="mm-dropdown">
                                            <div class="textfirst">
                                                <img src="{{ asset('images/D4.png') }}" width="50" height="50"
                                                    class="down" />
                                            </div>
                                            <ul>
                                                <li class="input-option" data-value="5">
                                                    <img src="{{ asset('images/D6.png') }}" alt="" width="50"
                                                        height="50" />
                                                </li>
                                                <li class="input-option" data-value="4">
                                                    <img src="{{ asset('images/D8.png') }}" alt="" width="50"
                                                        height="50" />
                                                </li>
                                                <li class="input-option" data-value="3">
                                                    <img src="{{ asset('images/D10.png') }}" alt="" width="50"
                                                        height="50" />
                                                </li>
                                                <li class="input-option" data-value="2">
                                                    <img src="{{ asset('images/D12.png') }}" alt="" width="50"
                                                        height="50" />
                                                </li>
                                                <li class="input-option" data-value="1">
                                                    <img src="{{ asset('images/D20.png') }}" alt="" width="50"
                                                        height="50" />
                                                </li>
                                                <li class="input-option" data-value="0">
                                                    <img src="{{ asset('images/D100.png') }}" alt="" width="50"
                                                        height="50" />
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End This -->

                                    </div>
                                </div>
                            </div>
                            <div class="card card-transparent" style="height: 50px;">
                                {{-- Input with button and emoji --}}
                                <div class="card-body d-flex gap-3">
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
                                    <div class="mb-3">
                                        <a href="{{ route('chatList') }}">
                                            <img src="{{ asset('images/users/6.jpeg') }}" width="40" height="40"
                                                class="rounded-circle" alt="User">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>

    <script>
        $(function() {
            // Set
            var main = $('div.mm-dropdown .textfirst')
            var li = $('div.mm-dropdown > ul > li.input-option')
            var inputoption = $("div.mm-dropdown .option")
            var default_text =
                '<img src="{{ asset('images/D4.png') }}" width="50" height="50" class="down" />';

            // Animation
            main.click(function() {
                // main.html(default_text);
                li.toggle('fast');
            });

            // Insert Data
            li.click(function() {
                // hide
                li.toggle('fast');
                var livalue = $(this).data('value');
                var lihtml = $(this).html();
                main.html(lihtml);
                inputoption.val(livalue);
            });
        });
    </script>
@endsection
