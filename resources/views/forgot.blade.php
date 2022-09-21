<!DOCTYPE html>
<html lang="en">

<head>
   @include('head')
</head>

<body>
    <div class="register">
        <div class="register_back" style="margin-top:50px">
            {{-- <img src="{{ asset('assets/images/Pattern.png') }}"></img> --}}
            <div class="register_main">
                <div class="content">
                    <div class="row">
                        <div class="title">
                            <span style="align:center">Forgot Password</span>
                        </div>
                    </div>
                    <div class="row">
                        Don't worry if you forget your password,
                        we will help you
                    </div>

                    <div class="register_button_back">
                        <span class="register_button">Forget Password</span>
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
