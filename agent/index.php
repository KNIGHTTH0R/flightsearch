<?php 
include("../admin/includes/controller.php");
$form = new Form;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>system </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="favicon.ico">

        <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="../admin/fonts/Open Iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        
        <!-- JavaScript Resources -->
        <script src="../admin/js/jquery-2.1.3.min.js"></script>
        <script src="../admin/js/jquery-ui.js"></script>
        <script src="../admin/js/bootstrap.min.js"></script>
        <script src="js/login.js"></script>
        
        <script>$(function(){ Login.init(); });</script>
        
    </head>

    <body>

     <!-- Pen Title-->
        <div class="pen-title">
            <h1>HICINKO LLC </h1><span>FLIGHT SEARCH APPICATION</span>
        </div>
       
        <!-- Form Module-->
        <div class="module form-module">
            <?php if(!$session->logged_in){ ?>
            <div class="toggle" id="link-register-login"><i class="oi oi-pencil"></i>Register
                <div class="tooltip in">Click Me</div>
            </div>
            <div class="toggle" id="link-login-register" style="display: none"><i class="oi oi-pencil"></i>Login
                <div class="tooltip in">Click Me</div>
            </div>
            
            <!-- Login -->
            <div class="form" id="form-login" <?php if ((isset($_GET['mode'])) && ($_GET['mode'] == 'activate')) { echo "style='display: none'"; } ?>>
                <h2>Login to your account</h2>
                <form action="../admin/includes/process.php" method="POST">
                    <input type="text" name="username" placeholder="Username" value="<?php echo Form::value("username"); ?>"/>
                    <?php if(Form::error("username")) { echo "<div class='help-block' id='user-error'>".Form::error('username')."</div>"; } ?>
                    <input type="password" name="password" placeholder="Password" value="<?php echo Form::value("password"); ?>"/>
                    <?php if(Form::error("password")) { echo "<div class='help-block' id='pass-error'>".Form::error('password')."</div>"; } ?>
                    <button>Login</button>
                    <input type="hidden" name="form_submission" value="login">
                </form>
            </div>
            
            <!-- Register -->
            <div class="form" id="form-register" style="display: none">
                <?php
                if ($configs->getConfig('ACCOUNT_ACTIVATION') == 4){
                    echo "<div><h1>Registration Disabled</h1>";
                    echo "<p>We're sorry but registration is currently disabled. Please try again at a later time.</p></div>";
                } else if(isset($_SESSION['regsuccess'])){
                    if ($_SESSION['regsuccess']==6){
                        echo "<div class='login'><h1>Registration is currently disabled!</h1>";
                        echo "<p>We're sorry <b>".$_SESSION['reguname']."</b> but registration to this site is currently disabled. "
                        ."Please try again at a later time or contact the website owner.</p></div>";
                        
                    /* Registration was successful */    
                    } else if($_SESSION['regsuccess']==0 || $_SESSION['regsuccess']==5) {
                        echo "<div class='login'><h1>Registered!</h1>";
                        echo "<p>Thank you <b>".$_SESSION['reguname']."</b> for your registration. You may now log in.</p></div>";
                        
                    /* User Activation */  
                    } else if($_SESSION['regsuccess']==3){
                        echo "<div class='login'><h1>Registered!</h1>";
                        echo "<p>Thank you <b>".$_SESSION['reguname']."</b>, your account has been created. "
                        ."However, this board requires account activation. An activation key has been sent to the e-mail address you provided. "
                        ."Please check your e-mail for further information.</p></div>";
                    }
                    
                    /* Admin Activation */  
                    else if($_SESSION['regsuccess']==4){
                        echo "<div class='login'><h1>Registered!</h1>";
                        echo "<p>Thank you <b>".$_SESSION['reguname']."</b>, your account has been created. "
                        ."However, this board requires account activation by an Admin. You will be informed by e-mail when your account has been activated.</p></div>";
                    
                    /* Registration failed */
                    } else if ($_SESSION['regsuccess']==2){
                        echo "<div class='login'><h1>Registration Failed</h1>";
                        echo "<p>We're sorry, but an error has occurred and your registration for the username <b>".$_SESSION['reguname']."</b>, "
                        ."could not be completed.<br>Please try again at a later time.</p></div>";
                    }
                    unset($_SESSION['regsuccess']);
                    unset($_SESSION['reguname']);
                } else {
                ?>
                <h2>Create an account</h2>
                <form action="../admin/includes/process.php" method="post">
                    <input type="text" name="user" placeholder="Username" value="<?php echo Form::value("user"); ?>"/>
                    <?php if(Form::error("user")) { echo "<div class='help-block' id='user-error'>".Form::error('user')."</div>"; } ?>
                    
                    <input type="text" name="firstname"  placeholder="First Name" value="<?php echo Form::value("firstname"); ?>"/>
                    <?php if(Form::error("firstname")) { echo "<div class='help-block' id='firstname-error'>".Form::error('firstname')."</div>"; } ?>
                    
                    <input type="text" name="lastname"  placeholder="Last Name" value="<?php echo Form::value("lastname"); ?>"/>
                    <?php if(Form::error("lastname")) { echo "<div class='help-block' id='lastname-error'>".Form::error('lastname')."</div>"; } ?>
                    
                    <input type="password" name="pass" placeholder="Password" value="<?php echo Form::value("pass"); ?>"/>
                    <?php if(Form::error("pass")) { echo "<div class='help-block' id='pass-error'>".Form::error('pass')."</div>"; } ?>
                    
                    <input type="password" name="conf_pass" placeholder="Confirm Password" value="<?php echo Form::value("conf_pass"); ?>"/>
                    <?php if(Form::error("conf_pass")) { echo "<div class='help-block' id='pass-error'>".Form::error('conf_pass')."</div>"; } ?>
                    
                    <input type="email" name="email" placeholder="Email Address" value="<?php echo Form::value("email"); ?>"/>
                    <?php if(Form::error("email")) { echo "<div class='help-block' id='email-error'>".Form::error('email')."</div>"; } ?>
                    
                    <input type="email" name="conf_email" placeholder="Confirm Email Address" value="<?php echo Form::value("conf_email"); ?>"/>
                    <?php if(Form::error("email")) { echo "<div class='help-block' id='email-error'>".Form::error('email')."</div>"; } ?>
                    
                    <input type="hidden" name="form_submission" value="register">
                    <!-- The following div tag displays a hidden form field in an attempt at tricking automated bots. -->
                    <div style='display:none; visibility:hidden;'><input type='text' name='killbill' maxlength='50' /></div>
                    <button>Register</button>
                </form>
                <?php } ?>
            </div>
            
            <!-- Reset Password -->
            <div class="form" id="form-reset" style="display: none">
                <?php
                if(isset($_SESSION['forgotpass'])){
                /* New password was generated for user and sent to user's email address. */
                    if($_SESSION['forgotpass']){
                        echo "<h1>New Password Generated</h1>";
                        echo "<p>Your new password has been generated and sent to the email address associated with your account.</p>";
                    /* Email could not be sent, therefore password was not edited in the database. */
                    } else{
                        echo "<h1>New Password Failure</h1>";
                        echo "<p>There was an error sending you the email with the new password, so your password has not been changed. Please contact Admin for more assistance or <a href='login.php'>try again</a>.</p>";
                    }
                    unset($_SESSION['forgotpass']);
                } else {
                ?>
                <h2>Reset Your Password</h2>
                <form action="../admin/includes/process.php" method="POST">
                    <input type="text" name="user"  placeholder="Username" value="<?php echo Form::value("user"); ?>"/>
                    <?php if(Form::error("user")) { echo "<div class='help-block' id='user-error'>".Form::error('user')."</div>"; } ?>
                    <input type="email" name="email" placeholder="Email Address" value="<?php echo Form::value("email"); ?>"/>
                    <?php if(Form::error("email")) { echo "<div class='help-block' id='user-error'>".Form::error('email')."</div>"; } ?>
                    <input type="hidden" name="form_submission" value="forgot_password">
                    <button>Reset Password</button>
                </form>
                <?php } ?>
            </div>
            
            <!-- Activation -->
            <div class="form" id="form-activate" style="display: none">
                <?php if ((isset($_GET['mode'])) && ($_GET['mode'] == 'activate')) { $session->activateUser($_GET['user'], $_GET['activatecode']); } ?>
            </div>        
            
            <!-- Forgot Your Password Bar -->
            <div class="cta" id="link-reset"><a href="#reset">Forgot your password?</a></div>
            
            <!-- Logged In -->
            <?php } else { ?>
            <div class="toggle" id="link-logged-in"><i class="oi oi-pencil"></i>Back
                <div class="tooltip in">Click Me</div>
            </div>
            <div class="form" id="form-loggedin">
                <h2><?php echo "Welcome " . $session->username; ?></h2>
                <?php if($session->isAdmin()){ echo "<p><a href=\"../admin/index.php\">Admin Control Panel</a></p>"; } ?> 
                <p><a href="#link-user-profile" id="link-user-profile">User Profile</a></p>
                <p><a href="../admin/logout.php?path=referrer">Logout</a></p>
                <p><a href="userdash.php">dashboard</a></p>
            </div>
            <div class="form" id="form-userprofile">
                <h2>User Profile</h2>
                <?php
                /* get requested user information from database - add/delete as applicable */
                $user_info = $functions->getUserInfo($session->username);

                /* Display the user's info */
                echo "<p><strong>Username: </strong>".$user_info['username']."</p>";
                echo "<p><strong>First Name: </strong>".$user_info['firstname']."</p>";
                echo "<p><strong>Last Name: </strong>".$user_info['lastname']."</p>";
                echo "<p><strong>Email: </strong> ".$user_info['email']."</p>";
                ?>
                <a href="#link-edit-user" id="link-edit-user">Edit Account</a>
            </div>
            <div class="form" id="form-edituser">
                <h2>Edit Account</h2>
                <form action="../admin/includes/process.php" method="POST">
                    <input type="password" name="curpass" placeholder="Current Password" value="<?php echo Form::value("curpass"); ?>">
                    <?php if(Form::error("curpass")) { echo "<div class='help-block' id='pass-error'>".Form::error('curpass')."</div>"; } ?>
                    <input type="password" name="newpass" placeholder="New Password" value="<?php echo Form::value("newpass"); ?>">
                    <?php if(Form::error("newpass")) { echo "<div class='help-block' id='pass-error'>".Form::error('newpass')."</div>"; } ?>
                    <input type="password" name="conf_newpass" placeholder="Confirm New Password" value="<?php echo Form::value("conf_newpass"); ?>">
                    <?php if(Form::error("conf_newpass")) { echo "<div class='help-block' id='pass-error'>".Form::error('conf_newpass')."</div>"; } ?>
                    <input type="text" name="email" placeholder="New E-mail Address" value="<?php 
                    if (Form::value("email") == "") {
                        echo $session->userinfo['email'];
                    } else {
                        echo Form::value("email");
                    }
                    ?>">
                    <?php if(Form::error("email")) { echo "<div class='help-block' id='email-error'>".Form::error('email')."</div>"; } ?>

                    <input type="hidden" name="form_submission" value="edit_account">
                    <button>Edit Account</button>
                </form>
            </div>
            <?php } ?>
        </div>
        
        
        <script>
        // Initialize Tooltips
        $('[data-toggle="tooltip"], .show-tooltip').tooltip({container: 'body', animation: false});        
        </script>

    </body>
</html>