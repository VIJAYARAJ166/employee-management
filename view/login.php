
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</head>
<style>
*,
*::before,
*::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
    background: #3b4465;
}

.forms-section {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.section-title {
    font-size: 32px;
    letter-spacing: 1px;
    color: #fff;
}

.forms {
    display: flex;
    align-items: flex-start;
    margin-top: 30px;
}

.form-wrapper {
    animation: hideLayer .3s ease-out forwards;
}

.form-wrapper.is-active {
    animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
    50% {
        z-index: 1;
    }

    100% {
        z-index: 1;
    }
}

@keyframes hideLayer {
    0% {
        z-index: 1;
    }

    49.999% {
        z-index: 1;
    }
}

.switcher {
    position: relative;
    cursor: pointer;
    display: block;
    margin-right: auto;
    margin-left: auto;
    padding: 0;
    text-transform: uppercase;
    font-family: inherit;
    font-size: 16px;
    letter-spacing: .5px;
    color: #999;
    background-color: transparent;
    border: none;
    outline: none;
    transform: translateX(0);
    transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
    color: #fff;
    transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
    color: #fff;
    transform: translateX(-90px);
}

.underline {
    position: absolute;
    bottom: -5px;
    left: 0;
    overflow: hidden;
    pointer-events: none;
    width: 100%;
    height: 2px;
}

.underline::before {
    content: '';
    position: absolute;
    top: 0;
    left: inherit;
    display: block;
    width: inherit;
    height: inherit;
    background-color: currentColor;
    transition: transform .2s ease-out;
}

.switcher-login .underline::before {
    transform: translateX(101%);
}

.switcher-signup .underline::before {
    transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
    transform: translateX(0);
}

.form {
    overflow: hidden;
    min-width: 260px;
    margin-top: 50px;
    padding: 30px 25px;
    border-radius: 5px;
    transform-origin: top;
}

.form-login {
    animation: hideLogin .3s ease-out forwards;
}

.form-wrapper.is-active .form-login {
    animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
    0% {
        background: #d7e7f1;
        transform: translate(40%, 10px);
    }

    50% {
        transform: translate(0, 0);
    }

    100% {
        background-color: #fff;
        transform: translate(35%, -20px);
    }
}

@keyframes hideLogin {
    0% {
        background-color: #fff;
        transform: translate(35%, -20px);
    }

    50% {
        transform: translate(0, 0);
    }

    100% {
        background: #d7e7f1;
        transform: translate(40%, 10px);
    }
}

.form-signup {
    animation: hideSignup .3s ease-out forwards;
}

.form-wrapper.is-active .form-signup {
    animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
    0% {
        background: #d7e7f1;
        transform: translate(-40%, 10px) scaleY(.8);
    }

    50% {
        transform: translate(0, 0) scaleY(.8);
    }

    100% {
        background-color: #fff;
        transform: translate(-35%, -20px) scaleY(1);
    }
}

@keyframes hideSignup {
    0% {
        background-color: #fff;
        transform: translate(-35%, -20px) scaleY(1);
    }

    50% {
        transform: translate(0, 0) scaleY(.8);
    }

    100% {
        background: #d7e7f1;
        transform: translate(-40%, 10px) scaleY(.8);
    }
}

.form fieldset {
    position: relative;
    opacity: 0;
    margin: 0;
    padding: 0;
    border: 0;
    transition: all .3s ease-out;
}

.form-login fieldset {
    transform: translateX(-50%);
}

.form-signup fieldset {
    transform: translateX(50%);
}

.form-wrapper.is-active fieldset {
    opacity: 1;
    transform: translateX(0);
    transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
    position: absolute;
    overflow: hidden;
    width: 1px;
    height: 1px;
    clip: rect(0 0 0 0);
}

.input-block {
    margin-bottom: 20px;
}

.input-block label {
    font-size: 14px;
    color: #a1b4b4;
}

.input-block input {
    display: block;
    width: 100%;
    margin-top: 8px;
    padding-right: 15px;
    padding-left: 15px;
    font-size: 16px;
    line-height: 40px;
    color: #3b4465;
    background: #eef9fe;
    border: 1px solid #cddbef;
    border-radius: 2px;
}

.form [type='submit'] {
    opacity: 0;
    display: block;
    min-width: 120px;
    margin: 30px auto 10px;
    font-size: 18px;
    line-height: 40px;
    border-radius: 25px;
    border: none;
    transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
    opacity: 1;
    transform: translateX(0);
    transition: all .4s ease-in;
}

.btn-login {
    color: #fbfdff;
    background: #a7e245;
    transform: translateX(-30%);
}

.btn-signup {
    color: #a7e245;
    background: #fbfdff;
    box-shadow: inset 0 0 0 2px #a7e245;
    transform: translateX(30%);
}
</style>

<body>
    <section class="forms-section">
        <h1 class="section-title">Login Form</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Login
                    <span class="underline"></span>
                </button>
                <form class="form form-login">
                    <fieldset>
                        <legend>Please, enter your email and password for login.</legend>
                        <div class="input-block">
                            <label for="login_uname">User Name</label>
                            <input id="login_uname" type="text" name="login_uname" >
                            <span style='color:red' class='login_user_err'> </span>
                        </div>
                        <div class="input-block">
                            <label for="login-password">Password</label>
                            <input id="login_password" name="login_password" type="text">
                            <span style='color:red' class='login_user_pass_err'> </span>

                        </div>
                    </fieldset>
                    <button type="submit" class="btn-login login_btn"  style="cursor: pointer;">Login</button>
                </form>
            </div>
            <div class="form-wrapper">
                <button type="button" class="switcher switcher-signup">
                    Sign Up
                    <span class="underline"></span>
                </button>
                <form class="form form-signup" id='signup_form' action='javascript:void'>
                    <fieldset>
                        <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                        <div class="input-block">
                            <label for="signup-username">User Name</label>
                            <input id="signup-username" type="text" name='signup_user_name'>
                            <span style='color:red' class='signup_user_err'> </span>

                        </div>
                        <div class="input-block">
                            <label for="signup-password">Password</label>
                            <input id="signup-password" type="text" name='signup_user_pws'
                                onblur='isValidPassword(this.value)'>
                            <span style='color:red' class='password_err'> </span>

                        </div>
                        <div class="input-block">
                            <label for="signup-password-confirm">Confirm password</label>
                            <input id="signup-password-confirm" type="text" name='confirm_signup_user_pws'>
                            <span style='color:red' class='confirm_password_err'> </span>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn-signup signup_btn" style="cursor: pointer;">Continue</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


<script>
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
    item.addEventListener('click', function() {
        switchers.forEach(item => item.parentElement.classList.remove('is-active'))
        this.parentElement.classList.add('is-active')
    })
})


function isValidPassword(password) {
    // alert(password);

    if (password.length < 8) {
        $('.password_err').text("Your password must be at least 8 characters long.");
        return false;
    }
    if (!/[a-z]/.test(password)) {
        $('.password_err').text("Your password must contain at least one lowercase letter.");
        return false;
    }
    if (!/[A-Z]/.test(password)) {
        $('.password_err').text("Your password must contain at least one uppercase letter.");
        return false;
    }
    if (!/[0-9]/.test(password)) {
        $('.password_err').text("Your password must contain at least one digit.");
        return false;
    }
    if (!/[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(password)) {
        $('.password_err').text("Your password must contain at least one special character.");
        return false;
    }
    $('.password_err').text('');
    return true;
}


$(document).ready(function() {
    // alert();

    // signup form
    $(".signup_btn").on('click', function(e) {
        e.preventDefault();
        // alrt();return false;
        // alert();
        var signup_user_name = $('input[name="signup_user_name"]').val();
        var paw = $('input[name="signup_user_pws"]').val();
        var confirm_psw = $('input[name="confirm_signup_user_pws"]').val();

        // alert(signup_user_name);
        if (signup_user_name == '') {
            $('.signup_user_err').text("This field is required");
            return false;
        }

        $('.signup_user_err').text('');

        if (paw == '') {
            $('.password_err').text("This field is required");
            return false;
        } else if (confirm_psw == '') {
            $('.confirm_password_err').text("This field is required");
            return false;
        }

        if (paw != '' && paw != confirm_psw) {
            $('.confirm_password_err').text("Password and confirm password does not match");
            return false;
        }

        $('.password_err').text('');
        $('.confirm_password_err').text('');

        // var formData = $("#signup_form").serialize();
        $.ajax({
            type: "POST",
            url: "controller/Employee_controller.php?action=signup",
            data: {
                username: signup_user_name,
                user_psw: confirm_psw
            },
            dataType: 'json',
            success: function(response) {
                // alert(response.status);
            if (response.status == 1) {
                        $.notify(""+response.msg+"", "success");
                        $('input[name="signup_user_name"]').val('');
                        $('input[name="signup_user_pws"]').val('');
                        $('input[name="confirm_signup_user_pws"]').val('');
                        
                    }else {
                        $.notify(""+response.msg+"", "error"); 
                    } 
            }   
        });
    });

// login ajax

     $(".login_btn").on('click', function(e) {
        e.preventDefault();
      
        var login_uname = $('input[name="login_uname"]').val();
        var login_password = $('input[name="login_password"]').val();
    

        if (login_uname == '') {
            $('.login_user_err').text("This field is required");
            return false;
        } 
        $('.login_user_err').text('');
        if (login_password == '') {
            $('.login_user_pass_err').text("This field is required");
            return false;
        }
       
        $('.login_user_pass_err').text('');

        // var formData = $("#signup_form").serialize();


        $.ajax({
            type: "POST",
            url: "controller/Employee_controller.php?action=login",
            data: {
                username: login_uname,
                user_psw: login_password
            },
            dataType: 'json',
            success: function(response) {
                // alert(response.status);
            if (response.status == 1) {
                        $.notify(""+response.msg+"", "success");
                          // ✅ REDIRECT AFTER SUCCESS
                            setTimeout(() => {
                                window.location.href = "index.php?page=list";
                            }, 2000);
                    }else {
                        $.notify(""+response.msg+"", "error"); 
                    } 
            }   
        });
    });
});
</script>