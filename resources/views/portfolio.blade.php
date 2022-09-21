<!DOCTYPE html>
<html lang="en">
<header>
    @include('head')
</header>
<body>

{{-- Collaborate Section--}}
<section class="container-fluid mt-5 collaborateBg">
    <div class="row p-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-30 mb-12 more-features"  style="background:#FFFFFF">
            <h2 class="col-lg-9 mt-10" style="text-align:left; ">Pingalo is a free tool to shorten URLs and create more user-friendly links.
            </h2>
            <br>
            <span class="mt-50"> <hr class="rectangle">About Us</span>
            <br>
            <p class="width80" style="text-align:left">
                Users on the web consider short links to be more reliable, safe, easy to remember and suitable for sharing.
                For this reason, shortners are used very often.
            </p>
            <br>
            <p class="width80" style="text-align:left">
                In addition, a short link is also more aesthetically pleasing, more suitable for use on platforms, such as Twitter, which limit the length of characters.
                Using short URLs is good practice in SEO practice; in fact, short links are well seen by search engines as they use a REDIRECT 301 (permanent redirect).
            </p>
        </div>
        {{-- <div class="col-sm-4 p-3 cImageMargin">
            <div>
                <img src="{{asset('assets/images/www.png')}}" class="cImage" width="75%" height="auto" alt="">
            </div>
        </div> --}}
    </div>
</section>

<section class="container-fluid more-features">
    <div class="row p-5">
        <div class="col-md-10 mt-5 mb-5 fSectionMargin">
            <span class="shortUrlSpan"> <hr class="rectangle">More Features</span>
            <div class="row">
                <div class="col-lg-9 mt-3">
                    <h2 style="width: 95%">
                        Pingalo is a free tool to shorten URLs and create more user-friendly links.
                    </h2>
                </div>
                <div class="col-lg-3"></div>

                <div class="row mt-0 g-5">
                    <div class="col-lg-4 easy-card feature-card">
                        <div class="card-wrapper">
                            <div class="img-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/images/Easy.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="text-wrapper">
                                <h3>Easy</h3>
                                <p>
                                    Paste your link in the bar, configure and create your
                                    short link in a few clicks
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-card">
                        <div class="card-wrapper">
                            <div class="img-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/images/Functional.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="text-wrapper">
                                <h3>Functional</h3>
                                <p>
                                    Use your short link on every platform and every social
                                    network, without limitations
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-card">
                        <div class="card-wrapper">
                            <div class="img-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/images/Free.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="text-wrapper">
                                <h3>Free</h3>
                                <p>Create your short links for free</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-card">
                        <div class="card-wrapper">
                            <div class="img-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/images/Keep Track.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="text-wrapper">
                                <h3>Keep track</h3>
                                <p>
                                    Thanks to the statistics system you can obtain data on the
                                    number of clicks performed on your link
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-card">
                        <div class="card-wrapper">
                            <div class="img-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/images/Customize.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="text-wrapper">
                                <h3>Customize</h3>
                                <p>
                                    You can rename your url as you like and choose words
                                    related to your brand
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 feature-card">
                        <div class="card-wrapper">
                            <div class="img-wrapper">
                                <img
                                    class="img-fluid"
                                    src="{{asset('assets/images/Optimized and Safe.png')}}"
                                    alt=""
                                />
                            </div>
                            <div class="text-wrapper">
                                <h3>Optimized and Safe</h3>
                                <p>
                                    Search engines look favorably on short urls and thanks to
                                    the redirect system used by shortners, there is no risk to
                                    incur no penalty.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<footer>
   @include('footer')
</footer>
</body>
</html>
