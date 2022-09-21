{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a class="backBtn" href="javascript:void(0);"><img
                            src="{{ asset('assets/images/statistics/arrow-left.svg') }}" width="20" height="20"
                            alt="icon"> Back</a>
                </div>
                <div class="col-sm-12">
                    <div class="profileDetail">
                        <div class="leftPart">
                            <ul>
                                <li>
                                    <div class="title strong-text">Title</div>
                                    <div class="profileDis strong-text">Nishar Multani | Dribbble</div>
                                </li>
                                <li>
                                    <div class="title">Destination</div>
                                    <div class="profileDis"><a class="dblack" href="javascript:void(0);"><img
                                                src="{{ asset('assets/images/statistics/hash.svg') }}" width="24"
                                                height="24" alt="icon">
                                            https://dribbble.com/nishar</a></div>
                                </li>
                                <li>
                                    <div class="title">Short URL</div>
                                    <div class="profileDis"><a class="orange" href="javascript:void(0);"><img
                                                src="{{ asset('assets/images/statistics/link-2.svg') }}" width="20"
                                                height="20" alt="icon">
                                            Pingalo.com/Nishar</a></div>
                                </li>
                                <li>
                                    <div class="title">Created on</div>
                                    <div class="profileDis strong-text">09/11/2022</div>
                                </li>
                            </ul>
                        </div>
                        <div class="rightPart">
                            <a href="javascript:void(0);" class="active">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M20 9H11C9.89543 9 9 9.89543 9 11V20C9 21.1046 9.89543 22 11 22H20C21.1046 22 22 21.1046 22 20V11C22 9.89543 21.1046 9 20 9Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M5 15H4C3.46957 15 2.96086 14.7893 2.58579 14.4142C2.21071 14.0391 2 13.5304 2 13V4C2 3.46957 2.21071 2.96086 2.58579 2.58579C2.96086 2.21071 3.46957 2 4 2H13C13.5304 2 14.0391 2.21071 14.4142 2.58579C14.7893 2.96086 15 3.46957 15 4V5"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Copy
                            </a>
                            <a href="javascript:void(0);">
                                <svg class="m-0" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 20V10" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 20V4" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6 20V14" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="javascript:void(0);">
                                <svg class="m-0" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M18 8C19.6569 8 21 6.65685 21 5C21 3.34315 19.6569 2 18 2C16.3431 2 15 3.34315 15 5C15 6.65685 16.3431 8 18 8Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M6 15C7.65685 15 9 13.6569 9 12C9 10.3431 7.65685 9 6 9C4.34315 9 3 10.3431 3 12C3 13.6569 4.34315 15 6 15Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M18 22C19.6569 22 21 20.6569 21 19C21 17.3431 19.6569 16 18 16C16.3431 16 15 17.3431 15 19C15 20.6569 16.3431 22 18 22Z"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.58984 13.51L15.4198 17.49" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.4098 6.51001L8.58984 10.49" stroke="black" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M3 6H5H21" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6"
                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10 11V17" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M14 11V17" stroke="black" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                delete
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 customcol1">
                    <div class="chartBlock">
                        <div class="chartHeader">
                            <h3><strong>18K</strong> Total Clicks</h3>
                            <span class="dlRight">
                                <a href="javascript:void(0);">This month</a>
                                <a class="active" href="javascript:void(0);">All time</a>
                                <a href="javascript:void(0);">Last 7 days</a>
                            </span>
                        </div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 customcol2">
                    <div class="countriesBlock">
                        <h3>Top countries</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="countryFlag"><img
                                                src="{{ asset('assets/images/statistics/us.svg') }}" width="16"
                                                height="16" alt="icon"> </span>
                                        United States
                                    </div>
                                </div>
                                <span>8000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="countryFlag"><img
                                                src="{{ asset('assets/images/statistics/germany.svg') }}" width="16"
                                                height="16" alt="icon"> </span>
                                        Germany
                                    </div>
                                </div>
                                <span>2000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="countryFlag"><img
                                                src="{{ asset('assets/images/statistics/netherlands.svg') }}"
                                                width="16" height="16" alt="icon"> </span>
                                        Netherlands
                                    </div>
                                </div>
                                <span>8965</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="countryFlag"><img
                                                src="{{ asset('assets/images/statistics/uk.svg') }}" width="16"
                                                height="16" alt="icon"> </span>
                                        United Kingdom
                                    </div>
                                </div>
                                <span>2320</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="countryFlag"><img
                                                src="{{ asset('assets/images/statistics/italy.svg') }}" width="16"
                                                height="16" alt="icon"> </span>
                                        Italy
                                    </div>
                                </div>
                                <span>2005</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="me-auto">
                                    <div class="d-flex align-items-center">
                                        <span class="countryFlag"><img
                                                src="{{ asset('assets/images/statistics/vietnam.svg') }}" width="16"
                                                height="16" alt="icon"> </span>
                                        Vietnam
                                    </div>
                                </div>
                                <span>3205</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        </div>
    @endsection
</body>
<footer>
    @include('footer')
</footer>

@section('scripts')
    @parent
    <script>
        var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"];
        var yValues = [0, 1000, 2000, 3000, 4000, 5000];
        var barColors = ["grey", "orange"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues,
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(230, 89, 59, 1)',
                    ],
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: false,
                    text: "18K Total Clicks"
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                            zeroLineColor: '#fff',

                        },
                        ticks: {
                            min: 0,
                            max: 5000,
                            stepSize: 1000,
                            fontFamily: 'Inter',
                            fontColor: '#8F9496',
                            fontSize: 12,
                        },
                    }],
                    xAxes: [{
                        gridLines: {
                            zeroLineColor: '#fff'
                        },
                        ticks: {
                            fontFamily: 'Inter',
                            fontColor: '#8F9496',
                            fontSize: 12,
                        },
                        barPercentage: 0.56
                    }],
                },
            },

        });
    </script>
@endsection

</html>
