<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>

    <!-- Welcome section start here -->
    <section class="welcome-section">
        <div class="vector-1"></div>
        <div class="vector-2"></div>
        <div class="wrapp-sm">
            <div class="section-title">
                <h1>
                    Create Your <br /><span>Short</span> <span class="minus">Link</span>
                </h1>
            </div>
            <div class="form-short-link">
                <form action="{{ route('url.shorten') }}" method="POST">
                    @csrf
                    <div class="control">
                        <div class="link-icon">
                            <img src="assets/images/link-icon.svg" alt="" />
                        </div>
                        <input type="text" class="form-control" placeholder="Paste long url to shorten it"
                            id="url" name="url" />
                        <button type="submit" class="btn btn-black with-icon">
                            <img src="assets/images/repeat-icon.svg" alt="" /> Shorten
                        </button>
                        <button class="btn btn-black with-icon">
                            <img src="assets/images/repeat-icon.svg" alt="" /> Reset
                        </button>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="detail-row">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        @if (session('user'))
                            <h4>{{ session('user')->name }}</h4>
                        @endif
                        <h5 class="d-flex">
                            <img src="assets/images/hash.svg" alt=""/>
                            <span id="destination_url">
                                @if($latest){{$latest->destination_url}}
                                @endif
                            </span>
                        </h5>
                    </div>
                    <div class="col-sm-4 d-flex justify-content-center">
                        <h3 class="d-flex">
                            <img src="assets/images/link-sm.svg" alt=""/>
                            <span id="default_short_url">
                                @if($latest){{$latest->default_short_url}}
                                @endif
                            </span>
                        </h3>
                    </div>
                    <div class="col-sm-4 justify-content-end">
                        <ul>
                            <li id="copy_icon" >
                                <a href="#."><img src="assets/images/homepage/copy-icon.svg" alt=""/>
                                    <span>Copy</span></a>
                            </li>
                            <li id="statistics_icon">
                                <a href="#."><img src="assets/images/homepage/bar-chart-icon.svg" alt="" />
                                    <span>Statistics</span></a>
                            </li>
                            <li id="share_icon">
                                <a href="#."><img src="assets/images/homepage/share-icon.svg" alt="" />
                                    <span>Share</span></a>
                            </li>
                            <li id="recycle_icon">
                                <a href="#."><img src="assets/images/homepage/recycle.svg" alt="" />
                                    <span>delete</span></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome section end here -->

    <!-- Account status grid start here -->
    <section class="dashboard">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="counters">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="counter-block">
                                    <div class="block-icon">
                                        <img src="assets/images/link-dashboard.svg" alt="" />
                                    </div>
                                    <div class="block-data">
                                        <div id="odometer" class="odometer">0</div>
                                        <h5>Total Links</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="counter-block">
                                    <div class="block-icon">
                                        <img src="assets/images/clicks-icon.svg" alt="" />
                                    </div>
                                    <div class="block-data">
                                        <div id="odometer2" class="odometer">0</div>
                                        <h5>Total Clicks</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="counter-block">
                                    <div class="block-icon">
                                        <img src="assets/images/months-add-icon.svg" alt="" />
                                    </div>
                                    <div class="block-data">
                                        <div id="odometer3" class="odometer">0</div>
                                        <h5>Added This Month</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="counter-block">
                                    <div class="block-icon">
                                        <img src="assets/images/country-icon.svg" alt="" />
                                    </div>
                                    <div class="block-data">
                                        <div id="odometer4" class="odometer">0</div>
                                        <h5>Countries</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($urls as $key => $item)
                        <div class="detail-row" data-aos="fade-left">
                            <div class="row align-items-center">
                                <div class="col-sm-12 col-md-4">
                                    <h4>{{session('user')->name}}</h4>
                                    <h5 class="d-flex">
                                        <img src="assets/images/hash.svg" alt="" />
                                        <span des_index={{$item->id}}>{{ $item->destination_url }}</span>
                                    </h5>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex justify-content-center">
                                    <h3 class="d-flex">
                                        <img src="assets/images/link-sm.svg" alt="" />
                                        <span short_index={{$item->id}}>{{ $item->default_short_url }}</span>
                                    </h3>
                                </div>
                                <div class="col-sm-12 col-md-4 d-flex justify-content-end">
                                    <ul>
                                        <li onclick="javascript:click_copy({{$item->id}});">
                                            <a href="#."><img src="assets/images/homepage/copy-icon.svg" alt="" />
                                                <span>Copy</span></a>
                                        </li>
                                        <li onclick="javascript:click_statistics({{$item->id}});">
                                            <a href="#."><img src="assets/images/homepage/bar-chart-icon.svg"
                                                    alt="" />
                                                <span>Statistics</span></a>
                                        </li>

                                        <li onclick="javascript:click_share();">
                                            <a href="#."><img src="assets/images/homepage/share-icon.svg" alt="" />
                                                <span>Share</span></a>
                                        </li>
                                        <li onclick="javascript:click_delete();">
                                            <a href="#."><img src="assets/images/homepage/recycle.svg" alt="" />
                                                <span>delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination section start here -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">12</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><img src="assets/images/right-arrow.svg"
                                        alt="" /></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Pagination section end here -->
                </div>
            </div>
        </div>
    </section>
    <!-- Account status grid end here -->

    <!-- Footer start here -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="copyright">
                        <p>© Pingalo</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <ul class="justify-content-center">
                        <li><a href="#.">About Us</a></li>
                        <li><a href="#.">Privacy</a></li>
                        <li><a href="#.">Contact US</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="justify-content-end social">
                        <li>
                            <a href="#."><img src="assets/images/facebook.svg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#."><img src="assets/images/twitter.svg" alt="" /></a>
                        </li>
                        <li>
                            <a href="#."><img src="assets/images/instagram.svg" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end here -->

    <!-- jquery library -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- Preloader -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

    <!-- BEGIN: Odometer js -->
    <script src="https://github.hubspot.com/odometer/odometer.js"></script>
    <!-- END: Odometer js -->

    <!-- Animation js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom Js -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" /> --}}

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
