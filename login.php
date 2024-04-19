<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="The Virasat is an initiative for giving the local traders and artisians an organised platform so they could reach to there audience Online as well">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="The Virasat , Jaipur , Rajasthan, Traditional, Cultural , Handicrafts, Blue Pottery, Jaipur Rugs , Metal Works, Jootis , Mochri, Lac bangles">
    <meta name="author" content="Team The Virasat">
    <title>The Virasat | HOME</title>
    <link rel="stylesheet" href="css/login.css">

    <!-- <link rel="icon" href="logo.png" type="image/icon type"> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G8LBTS3YKK"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.aspnetCDN.com/ajax/jQuery/jQuery-3.3.1.min.js"></script>
    <!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G8LBTS3YKK');
</script> -->
</head>

<body>
    <section class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">Don't have an account?</h2>
                    <p class="user_unregistered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer
                        whatever street art fap.</p>
                    <button class="user_unregistered-signup" id="signup-button">Sign up</button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">Have an account?</h2>
                    <p class="user_registered-text">Banjo tote bag bicycle rights, High Life sartorial cray craft beer
                        whatever street art fap.</p>
                    <button class="user_registered-login" id="login-button">Login</button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Login</h2>
                    <form class="forms_form" action="db_conn/log.php" method="post">
                        <?php if (isset($_GET['error'])) {?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php }?>
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="email" name="email" placeholder="Email" id="email"
                                    class="forms_field-input" required autofocus />
                            </div>
                            <div class="forms_field">
                                <input type="password" name="password" placeholder="Password" id="password"
                                    class="forms_field-input" required />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                            <input type="submit" value="Log In" id="but_submit()" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Sign Up</h2>
                    <form class="forms_form">
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="text" placeholder="Full Name" class="forms_field-input" required />
                            </div>
                            <div class="forms_field">
                                <input type="email" placeholder="Email" class="forms_field-input" required />
                            </div>
                            <div class="forms_field">
                                <input type="password" placeholder="Password" class="forms_field-input" required />
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" value="Sign up" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- <script src="db_conn/ajex/auth.js"></script> -->

</body>


</html>