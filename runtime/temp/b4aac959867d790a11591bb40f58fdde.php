<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\wamp64\www\edu\public/../application/index\view\login\index.html";i:1478588576;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style2.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Login and Registration</h1>
                <nav class="codrops-demos">
                    <span>Click <strong>"Join us"</strong> to see the form switch</span>

                </nav>
            </header>
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                        <!--登陆-->
                            <form  action="<?php echo url('Login/check'); ?>" autocomplete="on" method="post">
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your Code </label>
                                    <input type="text" class="input input-big" required="required"  name="code" placeholder="填写下侧的验证码" data-validate="required:请填写下方的验证码" /><br><br>
                                     <img src="<?php echo captcha_src(); ?>" width="333.3" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
                                </p>
                                <!-- <p class="keeplogin">
                                                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                                                                    <label for="loginkeeping">Keep me logged in</label>
                                                                </p> -->
                                <p class="login button">
                                    <input type="submit" value="Login" />
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>
                        <!--注册-->
                        <div id="register" class="animate form">
                            <form  action="<?php echo url('Login/register'); ?>" autocomplete="on" method="post">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="repassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button">
                                    <input type="submit" value="Sign up"/>
                                </p>
                                <p class="change_link">
                                    Already a member ?
                                    <a href="#tologin" class="to_register"> Go and log in </a>
                                </p>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
</html>