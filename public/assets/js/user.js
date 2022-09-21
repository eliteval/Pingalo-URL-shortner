
function user_register(){
    var form = '#register-user-form';
        // event.preventDefault();
        let name = $("input[name=name]").val();
        let email = $("input[name=email]").val();
        let password = $("input[name=password]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
            url: "/user_register",
            method: 'POST',
            data: {
                name:name,
                email:email,
                password:password
                // _token: $('meta[name="csrf-token"]').attr('content')
            },
            success:function(response)
            {
                console.log(response);
                window.location=response.redirect_location;
            },
            error: function(response) {
                alert("error");
                console.log("error");
                console.log(response);
            }
        });
    }
    // });
    function user_login(event){
        // event.preventDefault();
        let email = $("input[name=email]").val();
        let password = $("input[name=password]").val();

        $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
            url: "user_login",
            method: 'POST',
            data: {
                email:email,
                password:password
            },
            success:function(response)
            {
                console.log(response);
                if(response.status == true){//login succes
                   window.location=response.redirect_location;
                }
                if(response.status == false){//login failure
                    alert(response.msg);
                    // $("input[name=email]").text("");
                    // $("input[name=password]").text("");
                }

            },
            error: function(response) {
                console.log(response);
                alert("error");
            }
        });
    }





