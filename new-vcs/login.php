<style>
    @import url(https://fonts.googleapis.com/css?family=Gudea:400,700);

    body {
        -webkit-perspective: 800px;
        perspective: 800px;
        height: 100vh;
        margin: 0;
        overflow: hidden;
        font-family: 'Gudea', sans-serif;
        background: #003A70;
        /* Old browsers */
        /* FF3.6+ */
        /* Chrome,Safari4+ */
        /* Chrome10+,Safari5.1+ */
        /* Opera 11.10+ */
        /* IE10+ */
        background: linear-gradient(135deg, #003A70 0%, #bb6dec 100%);
        /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='##003A70 ', endColorstr='#bb6dec', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }

    body ::-webkit-input-placeholder {
        color: #4E546D;
    }

    body .authent {
        display: none;
        background: #35394a;
        /* Old browsers */
        /* FF3.6+ */
        /* Chrome,Safari4+ */
        /* Chrome10+,Safari5.1+ */
        /* Opera 11.10+ */
        /* IE10+ */
        background: linear-gradient(45deg, #35394a 0%, #1f222e 100%);
        /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#35394a', endColorstr='#1f222e', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
        position: absolute;
        left: 0;
        right: 90px;
        margin: auto;
        width: 100px;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-align: center;
        padding: 20px 70px;
        top: 200px;
        bottom: 0;
        height: 70px;
        opacity: 0;
    }

    body .authent p {
        text-align: center;
        color: white;
    }

    body .success {
        display: none;
        color: #d5d8e2;
    }

    body .success p {
        font-size: 14px;
    }

    body p {
        color: #5B5E6F;
        font-size: 10px;
        text-align: left;
    }

    body .testtwo {
        left: -320px !important;
    }

    body .test {
        box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);
        pointer-events: none;
        top: -100px !important;
        -webkit-transform: rotateX(70deg) scale(0.8) !important;
        transform: rotateX(70deg) scale(0.8) !important;
        opacity: .6 !important;
        -webkit-filter: blur(1px);
        filter: blur(1px);
    }

    body .login {
        opacity: 1;
        top: 20px;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.25, 0.265, 0.85);
        -webkit-transition-property: opacity, box-shadow, top, left, -webkit-transform;
        transition-property: opacity, box-shadow, top, left, -webkit-transform;
        transition-property: transform, opacity, box-shadow, top, left;
        transition-property: transform, opacity, box-shadow, top, left, -webkit-transform;
        -webkit-transition-duration: .5s;
        transition-duration: .5s;
        -webkit-transform-origin: 161px 100%;
        transform-origin: 161px 100%;
        -webkit-transform: rotateX(0deg);
        transform: rotateX(0deg);
        position: relative;
        width: 240px;
        border-top: 2px solid #003A70;
        height: 375px;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
        top: 0;
        bottom: 0;
        padding: 100px 40px 40px 40px;
        background: #35394a;
        /* Old browsers */
        /* FF3.6+ */
        /* Chrome,Safari4+ */
        /* Chrome10+,Safari5.1+ */
        /* Opera 11.10+ */
        /* IE10+ */
        background: linear-gradient(45deg, #35394a 0%, #1f222e 100%);
        /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#35394a', endColorstr='#1f222e', GradientType=1);
        /* IE6-9 fallback on horizontal gradient */
    }

    body .login .validation {
        position: absolute;
        z-index: 1;
        right: 10px;
        top: 6px;
        opacity: 0;
    }

    body .login .disclaimer {
        position: absolute;
        bottom: 20px;
        left: 35px;
        width: 250px;
    }

    body .login_title {
        color: #afb1be;
        height: 60px;
        text-align: left;
        font-size: 16px;
    }

    body .login_fields {
        height: 208px;
        position: absolute;
        left: 0;
    }

    body .login_fields .icon {
        position: absolute;
        z-index: 1;
        left: 36px;
        top: 8px;
        opacity: .5;
    }

    body .login_fields input[type='password'] {
        color: #ffffff !important;
    }

    body .login_fields input[type='text'],
    body .login_fields input[type='password'] {
        color: #afb1be;
        width: 190px;
        margin-top: -2px;
        background: #32364a;
        left: 0;
        padding: 10px 65px;
        border-top: 2px solid #393d52;
        border-bottom: 2px solid #393d52;
        border-right: none;
        border-left: none;
        outline: none;
        font-family: 'Gudea', sans-serif;
        box-shadow: none;
    }

    body .login_fields__user,
    body .login_fields__password {
        position: relative;
    }

    body .login_fields__submit {
        position: relative;
        top: 35px;
        left: 0;
        width: 80%;
        right: 0;
        margin: auto;
    }

    body .login_fields__submit .forgot {
        float: right;
        font-size: 10px;
        margin-top: 11px;
        text-decoration: underline;
    }

    body .login_fields__submit .forgot a {
        color: #606479;
    }

    body .login_fields__submit input {
        border-radius: 50px;
        background: transparent;
        padding: 10px 50px;
        border: 2px solid #ffffff;
        color: #ffffff;
        text-transform: uppercase;
        font-size: 11px;
        -webkit-transition-property: background, color;
        transition-property: background, color;
        -webkit-transition-duration: .2s;
        transition-duration: .2s;
    }

    body .login_fields__submit input:focus {
        box-shadow: none;
        outline: none;
    }

    body .login_fields__submit input:hover {
        color: white;
        background: #003A70;
        cursor: pointer;
        -webkit-transition-property: background, color;
        transition-property: background, color;
        -webkit-transition-duration: .2s;
        transition-duration: .2s;
    }

    /* Color Schemes */
    .love {
        position: absolute;
        right: 20px;
        bottom: 0px;
        font-size: 11px;
        font-weight: normal;
    }

    .love p {
        color: white;
        font-weight: normal;
        font-family: 'Open Sans', sans-serif;
    }

    .love a {
        color: white;
        font-weight: 700;
        text-decoration: none;
    }

    .love img {
        position: relative;
        top: 3px;
        margin: 0px 4px;
        width: 10px;
    }

    .brand {
        position: absolute;
        left: 20px;
        bottom: 14px;
    }

    .brand img {
        width: 30px;
    }
</style>
<div class='login'>
    <div>
        <img src="https://virtualcaresolution.de/assets/images/yasLogo.png" title="YAS CLINIC" alt="YAS CLINIC GROUP">
    </div>
    <div class='login_title'>
        <span>Login to your account</span>
    </div>
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/user_icon_copy.png'>
            </div>
            <input placeholder='Username' type='text' id="username">
            <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
            </input>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/lock_icon_copy.png'>
            </div>
            <input placeholder='Password' type='password' id="password">
            <div class='validation'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/tick.png'>
            </div>
        </div>
        <div class='login_fields__submit'>
            <input type='submit' value='Log In'>
            <div class='forgot'>
                <a href='#'>Forgotten password?</a>
            </div>
        </div>
    </div>
    <div class='success'>
        <h2>Authentication Failed</h2>
        <p>PLEASE RESTART YOUR SITE</p>
    </div>
    <div class='disclaimer'>
        <p>?? Copyright by.PQW - IT Managment consulting - Germany for YAS Clinic Group 2022</p>
    </div>
</div>
<div class='authent'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/puff.svg'>
    <p>Authenticating...</p>
</div>

<script src="vendor/jquery.min.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
<script src="vendor/materialize.min.js">
</script>
<script>
    $('input[type="submit"]').click(function() {
        if ($('#username').val != '' && $('#password').val()) {
            $('.login').addClass('test')
            setTimeout(function() {
                $('.login').addClass('testtwo')
            }, 300);
            setTimeout(function() {
                $(".authent").show().animate({
                    right: -320
                }, {
                    easing: 'easeOutQuint',
                    duration: 600,
                    queue: false
                });
                $(".authent").animate({
                    opacity: 1
                }, {
                    duration: 200,
                    queue: false
                }).addClass('visible');
            }, 500);
            setTimeout(function() {
                $(".authent").show().animate({
                    right: 90
                }, {
                    easing: 'easeOutQuint',
                    duration: 600,
                    queue: false
                });
                $(".authent").animate({
                    opacity: 0
                }, {
                    duration: 200,
                    queue: false
                }).addClass('visible');
                $('.login').removeClass('testtwo')
            }, 2500);
            setTimeout(function() {
                $('.login').removeClass('test')
                $('.login div').fadeOut(123);
            }, 2800);
            setTimeout(function() {
                $('.success').fadeIn();
            }, 3200);
            var data = {
                'username': $('#username').val(),
                'password': $('#password').val()
            }
            $.ajax({
                url: 'src/api.php',
                type: 'POST',
                data: data,
                success: function(response) {
                    console.log("respoo", response)
                    if (response === "true") {
                        setTimeout(function() {
                            window.location.href = "./index.php";
                        }, 2500);
                    }
                }
            });
        }
    });

    $('input[type="text"],input[type="password"]').focus(function() {
        $(this).prev().animate({
            'opacity': '1'
        }, 200)
    });
    $('input[type="text"],input[type="password"]').blur(function() {
        $(this).prev().animate({
            'opacity': '.5'
        }, 200)
    });

    $('input[type="text"],input[type="password"]').keyup(function() {
        if (!$(this).val() == '') {
            $(this).next().animate({
                'opacity': '1',
                'right': '30'
            }, 200)
        } else {
            $(this).next().animate({
                'opacity': '0',
                'right': '20'
            }, 200)
        }
    });

    var open = 0;
    $('.tab').click(function() {
        $(this).fadeOut(200, function() {
            $(this).parent().animate({
                'left': '0'
            })
        });
    });
</script>