<!-- <section id="MailSendler">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-5 col-xs-5">
                <img src="<?php echo URL; ?>/public/images/bg.png" class="img-fluid" alt="Demo image">
            </div>


            <div class="col-lg-5 col-md-3 form-container">
                <form action="mailSendler/send" method="post" style="margin-top: 30px">
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control" name="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    
                    <button type="submit" class="btn lg-btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</section> -->
<form>
    <div class="con">
        <!— Start header Content —>
            <header class="head-form">
                <h2>Log In</h2>
                <!— A welcome message or an explanation of the login form —>
                    <p>login here using your username and password</p>
            </header>
            <br>
            <div class="field-set">

                <!— user name —>
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <!— user name Input-->
                        <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required>

                        <br>

                        <!— Password —>

                            <span class="input-item">
                                <i class="fa fa-key"></i>
                            </span>
                            <!— Password Input-->
                                <input class="form-input" type="password" placeholder="Password" id="pwd" name="password" required>

                                <!— Show/hide password —>
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true" type="button" id="eye">eye</i>
                                    </span>


                                    <br>
                                    <!— buttons —>
                                        <!— button LogIn —>
                                            <button class="log-in"> Log In </button>
            </div>
            <div class="other">
                <!— Forgot Password button-->
                    <button class="btn submits frgt-pass">Forgot Password</button>
                    <button class="btn submits sign-up">Sign Up
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                    </button>
            </div>
    </div>
</form>

<script>
    function show() {
        const p = document.getElementById('pwd');
        p.setAttribute('type', 'text');
    }

    function hide() {
        const p = document.getElementById('pwd');
        p.setAttribute('type', 'password');
    }

    let pwShown = 0;

    document.getElementById("eye").addEventListener("click", function() {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
    console.log(1);
</script>