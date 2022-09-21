<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="contact_main">
                    <div class="contact_img">
                        <img src="{{ asset('assets/images/contact/frame.png') }}" class="w-100">
                    </div>
                    <div class="contact_text">
                        <h2>Contact Us</h2>
                        <p>Questions, bug reports, feedback.</p>
                        <div class="email_mn">
                            <p>Your email</p>
                            <input type="email" name="" placeholder="Enter your email">
                        </div>
                        <div class="message_mn">
                            <p>Message</p>
                            <textarea placeholder="Enter a topic"></textarea>
                        </div>
                        <button>Send</button>
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
