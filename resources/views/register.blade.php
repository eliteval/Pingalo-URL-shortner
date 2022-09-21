<!DOCTYPE html>
<html lang="en">

<header>
    @include('head')
</header>
<script src="{{ asset('assets/js/user.js') }}" defer></script>

<body>

    <div class="register">
        <div class="register_back" style="margin-top:50px">
            {{-- <img src="{{ asset('assets/images/Pattern.png') }}"></img> --}}
            <div class="register_main">
                <div class="content">
                    <div class="row">
                        <div class="title">
                            <span style="align:center"> Register</span>
                        </div>
                    </div>
                    <div class="row">
                        <form enctype="multipart/form-data" id="register-user-form">
                            {{-- <form data-action="{{ route('users_store') }}" method="POST" enctype="multipart/form-data" --}}

                            @csrf
                            <div class="subtitle">
                                <span> User Name</span><br>
                                <input type="text" id="name" name="name" placeholder="Your Name"></input>
                            </div>
                            <div class="subtitle">
                                <span> Your Email</span><br>
                                <input type="text" id="email" name="email"
                                    placeholder="Andrew@gmail.com"></input>
                            </div>
                            <div class="subtitle">
                                <span> Your Password</span><br>
                                <input type="password" id="password" name="password"
                                    placeholder="Your Password"></input>
                            </div>
                        </form>
                    </div>

                    <div class="register_button_back">
                        <span class="register_button">
                            <a href="javascript:user_register();" class="btn btn-primary"
                                style="width:100%">Register</a>
                        </span>
                    </div>
                    <div class="register_button_back" style="background: #EFF2ED;border:5px solid green;">
                        <span class="register_button" style="color:black">Register with Google</span>
                    </div>

                    <div class="register_policy">
                        <span class="register_button" style="color:black">By creating this account you agree to
                            Pingalo's</span>
                        <span class="register_button" style="color:red">Privacy Policy</span>
                        <span class="register_button" style="color:black">and</span>
                        <span class="register_button" style="color:red">GDPR</span>
                        <span class="register_button" style="color:black">and</span>
                        <span class="register_button" style="color:red">Terms of Service</span>
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
