<!DOCTYPE html>
<html lang="en">

<head>

    @include('head')

</head>

<body>
    <main>
        <section class="container-fluid hero">
            <div class="hero-text">
                <h1 class="heroHeading">
                    Make Your URL <span
                        style="transform: rotate(-4deg);display: inline-block;font-weight: bold">Short</span> <br />
                    Branded And Practical
                </h1>
                <p class="mt-2" style="width: 50%">
                    Link Management Platform with all features you need in one place.
                    Shorten, brand, manage and track your links the easy way.
                </p>

                <a href="{{url('register')}}">Register For Free!!</a>
            </div>
        </section>
    </main>

    {{-- Short URL Section --}}
    <section class="container-fluid shortUrl">
        <div class="row p-5">
            <div class="col-sm-6 p-3" style="margin-left: 5%">
                <div>
                    <img src="{{ asset('assets/images/Analytics.png') }}" width="100%" height="auto" alt="">
                </div>
            </div>
            <div class="col-sm-5 p-3 mt-5">
                <span class="shortUrlSpan">
                    <hr class="rectangle">Short URL
                </span>
                <h3 class="shortUrlTitle mt-2">SHORT IS BETTER <img src="{{ asset('assets/images/Rocket.png') }}"
                        class="mb-3" width="45px" height="auto" alt=""></h3>
                <p class="width80">Your url is the first impression you give of yourself and your company on the web and
                    on social networks: the shorter a LINK is,
                    the more it will be considered reliable, easy to remember and even more beautiful to show.
                </p>
                <p class="width80" style="margin-bottom: unset;">Imagine seeing a very long url, formed by a long string
                    of letters, numbers and characters pasted in your BIO in Instagram or in an email</p>
                <p class="width80">... done?</p>
                <p class="width80">Now, instead, imagine a very short, readable and personalized link .. another thing
                    is not it ?!</p>

                <p class="width80">So what are you waiting for? Shorten your link! SHORT IS BETTER <img
                        src="{{ asset('assets/images/Smile.png') }}" width="20px" height="auto" alt=""></p>

                <button class="btn btn-primary text-white mb-5 mt-3 px-3 py-2" style="border: none">Register For
                    Free!!</button>
            </div>
        </div>
    </section>

    {{-- Collaborate Section --}}
    <section class="container-fluid mt-5 collaborateBg">
        <div class="row p-5">
            <div class="col-sm-6 p-3 mt-4 cSectionMargin">
                <span class="shortUrlSpan">
                    <hr class="rectangle">Collaborate
                </span>
                <h3 class="collaborateTitle mb-4 mt-3">The all-Italian tool to shorten your URLs </h3>
                <p class="width80">We redo the make-up of your LINKS and help you turn them into powerful marketing
                    tools. How?</p>
                <h5 class="width80" style="margin-bottom: unset;">Making Them: </h5>
                <div class="mt-3" style="text-transform: capitalize; display: flex">
                    <div>
                        <img src="{{ asset('assets/images/Check.png') }}"
                            style="vertical-align: middle; margin-top: 10px" width="20px" height="auto"
                            alt="">
                    </div>
                    <span class="width80" style="font-weight: 700; margin-left: 10px"> aesthetically more pleasant
                        <span style="font-weight: 400;display: block;">(and we know that the eye always wants its
                            part;)</span></span>
                </div>
                <div class="mt-3" style="text-transform: capitalize; display: flex">
                    <div>
                        <img src="{{ asset('assets/images/Check.png') }}"
                            style="vertical-align: middle; margin-top: 10px" width="20px" height="auto"
                            alt="">
                    </div>
                    <span class="width80" style="font-weight: 700; margin-left: 10px"> functional and usable anywhere,
                        even on platforms that limit the length of the characters <span style="font-weight: 400">(such
                            as Twitter for example)</span></span>
                </div>
                <div class="mt-3">
                    <img src="{{ asset('assets/images/Check.png') }}" style="vertical-align: sub;" width="20px"
                        height="auto" alt="">

                    <span class="width80" style="font-weight: 700; margin-left: 5px">
                        Short
                    </span>
                    <span class="width80" style="font-weight: 700; margin-left: 5%">
                        <img src="{{ asset('assets/images/Check.png') }}" style="vertical-align: sub;" width="20px"
                            height="auto" alt="">
                        Branded
                    </span>
                    <span class="width80" style="font-weight: 700; margin-left: 5%">
                        <img src="{{ asset('assets/images/Check.png') }}" style="vertical-align: sub;" width="20px"
                            height="auto" alt="">
                        Reliable
                    </span>
                </div>

                <p class="width80 mt-4">Furthermore, once the your short link you can follow the statistics on your
                    dashboard by keeping an eye on the clicks and you can create as many as you want.</p>
            </div>
            <div class="col-sm-4 p-3 cImageMargin">
                <div>
                    <img src="{{ asset('assets/images/www.png') }}" class="cImage" width="75%" height="auto"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid more-features">
        <div class="row p-5">
            <div class="col-md-10 mt-5 mb-5 fSectionMargin">
                <span class="shortUrlSpan">
                    <hr class="rectangle">More Features
                </span>
                <div class="row">
                    <div class="col-lg-9 mt-3">
                        <h2 style="width: 95%">
                            We're more than an URL Shortner tool. Explore our features, and
                            satisfy your customers
                        </h2>
                    </div>
                    <div class="col-lg-3"></div>

                    <div class="row mt-0 g-5">
                        <div class="col-lg-4 easy-card feature-card">
                            <div class="card-wrapper">
                                <div class="img-wrapper">
                                    <img class="img-fluid" src="{{ asset('assets/images/Easy.png') }}"
                                        alt="" />
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
                                    <img class="img-fluid" src="{{ asset('assets/images/Functional.png') }}"
                                        alt="" />
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
                                    <img class="img-fluid" src="{{ asset('assets/images/Free.png') }}"
                                        alt="" />
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
                                    <img class="img-fluid" src="{{ asset('assets/images/Keep Track.png') }}"
                                        alt="" />
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
                                    <img class="img-fluid" src="{{ asset('assets/images/Customize.png') }}"
                                        alt="" />
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
                                    <img class="img-fluid" src="{{ asset('assets/images/Optimized and Safe.png') }}"
                                        alt="" />
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


</body>

<footer>
    @include('footer')
</footer>

</html>
