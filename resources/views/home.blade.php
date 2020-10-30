@extends('layouts.app')

@push('css')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @endpush

@section('content')

    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your
        browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Encoder Wrapper -->
    <div class="encoder-wrapper encoder-vertical-nav">

        <!-- Top Navbar -->
        @include('includes.topbar');

        <!-- Vertical Nav -->
        @include('includes.sidebar');


        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="encoder-pg-wrapper pb-0 px-0">
            <!-- Container -->
            <div class="container-fluid">

                <div class="dashboard-card">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Notice</h6>
                                    <span class="card-text">$12099 </span>
                                    <span class="card-in-dec"><i class="fa fa-long-arrow-up" aria-hidden="true"></i>  5.86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Teachers</h6>
                                    <span class="card-text">12099 </span>
                                    <span class="card-in-dec"><i class="fa fa-long-arrow-up" aria-hidden="true"></i>  5.86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Students</h6>
                                    <span class="card-text">13000 </span>
                                    <span class="card-in-dec "><i class="fa fa-long-arrow-up" aria-hidden="true"></i>  5.86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Admin</h6>
                                    <span class="card-text">1340 </span>
                                    <span class="card-in-dec card-dec">
                                        <i class="fa fa-long-arrow-down" aria-hidden="true"></i>  5.86%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Container -->

            @include('includes.footer')


        </div>
        <!-- /Main Content -->

    </div>
    <!-- /Encoderultimate Wrapper -->
    @endsection

    @push('script')
        <!-- jQuery -->
        <script src="{{asset('assets/js/plugin/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/plugin/jquery-1.12.4.js')}}"></script>
        <!-- Slimscroll JavaScript -->
        <script src="{{asset('assets/js/plugin/jquery.slimscroll.js')}}"></script>
        <!-- FeatherIcons JavaScript -->
        <script src="{{asset('assets/js/plugin/feather.min.js')}}"></script>
        <!-- Init JavaScript -->
    @endpush
