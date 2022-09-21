<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>
<!-- Custom Js -->

<body>

    <div class="register">
        <div class="register_back" style="margin-top:50px">
            {{-- <img src="{{ asset('assets/images/Pattern.png') }}"></img> --}}
            <div class="register_main">
                <div class="content">
                    <div class="row">
                        <div class="title">
                            <span style="align:center"> Log in</span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="subtitle">
                            <span> Your Email</span><br>
                            <input type="text" placeholder="Andrew@gmail.com" id="email" name="email"></input>
                        </div>
                        <div class="subtitle">
                            <span> Your Password</span><br>
                            <input type="password" placeholder="Your Password" id="password" name="password"></input>
                        </div>
                    </div>

                    <div class="register_button_back">
                        <a class="register_button" href="javascript:user_login();"> Login Now</a>
                    </div>
                    <div class="register_button_back" style="background: #EFF2ED;border:5px solid green;">
                        <span class="register_button" style="color:black">Login with Google</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer>
        @include('footer')
    </footer>
</body>

</html>
