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
                        <div class="card mb-5 card-transparent">
                            <div class="card-body text-center">
                                <!-- QR Code display sections (uncommented) -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="ml-4">
                                            {!! $simple !!}
                                        </span>
                                        <div class="mt-4">
                                            <button id="scanBtn" class="btn btn-primary w-100">Scan QR Code</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- End QR Code display sections -->

                                <!-- Scan button -->


                                <!-- Form to display after successful scan -->
                                <form id="qrScanForm" style="display: none;">
                                    <!-- Form elements here -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
