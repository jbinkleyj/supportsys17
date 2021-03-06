<?php 
if(!defined('SETUPINC')) die('Kwaheri!');
$info=($_POST && $errors)?Format::htmlchars($_POST):array('prefix'=>'ost_','dbhost'=>'localhost');
?>
<div id="main" class="step2">        
    <h1>osTicket Basic Installation</h1>
            <p>Please fill out the information below to continue your osTicket installation. All fields are required.</p>
            <font class="error"><strong><?php echo $errors['err']; ?></strong></font>
            <form action="install.php" method="post" id="install">
                <input type="hidden" name="s" value="install">
                <h4 class="head system">System Settings</h4>
                <span class="subhead">The URL of your helpdesk, its name, and the default system email address</span>
                <div class="row">
                    <label>Helpdesk URL:</label>
                    <span><strong><?php echo URL; ?></strong></span>
                </div>
                <div class="row">
                    <label>Helpdesk Name:</label>
                    <input type="text" name="name" size="30" tabindex="1" value="<?php echo $info['name']; ?>">
                    <a class="tip" href="#t1">?</a>
                    <font class="error"><?php echo $errors['name']; ?></font>
                </div>
                <div class="row">
                    <label>Default Email:</label>
                    <input type="text" name="email" size="30" tabindex="2" value="<?php echo $info['email']; ?>">
                    <a class="tip" href="#t2">?</a>
                    <font class="error"><?php echo $errors['email']; ?></font>
                </div>

                <h4 class="head admin">Admin User</h4>
                <span class="subhead">Your primary administrator account - you can add more users later.</span>
                <div class="row">
                    <label>First Name:</label>
                    <input type="text" name="fname" size="30" tabindex="3" value="<?php echo $info['fname']; ?>">
                    <a class="tip" href="#t3">?</a>
                    <font class="error"><?php echo $errors['fname']; ?></font>
                </div>
                <div class="row">
                    <label>Last Name:</label>
                    <input type="text" name="lname" size="30" tabindex="4" value="<?php echo $info['lname']; ?>">
                    <a class="tip" href="#t4">?</a>
                    <font class="error"><?php echo $errors['lname']; ?></font>
                </div>
                <div class="row">
                    <label>Email Address:</label>
                    <input type="text" name="admin_email" size="30" tabindex="5" value="<?php echo $info['admin_email']; ?>">
                    <a class="tip" href="#t5">?</a>
                    <font class="error"><?php echo $errors['admin_email']; ?></font>
                </div>
                <div class="row">
                    <label>Username:</label>
                    <input type="text" name="username" size="30" tabindex="6" value="<?php echo $info['username']; ?>" autocomplete="off">
                    <a class="tip" href="#t6">?</a>
                    <font class="error"><?php echo $errors['username']; ?></font>
                </div>
                <div class="row">
                    <label> Password:</label>
                    <input type="password" name="passwd" size="30" tabindex="7" value="<?php echo $info['passwd']; ?>" autocomplete="off">
                    <a class="tip" href="#t7">?</a>
                    <font class="error"><?php echo $errors['passwd']; ?></font>
                </div>
                <div class="row">
                    <label>Retype Password:</label>
                    <input type="password" name="passwd2" size="30" tabindex="8" value="<?php echo $info['passwd2']; ?>">
                    <a class="tip" href="#t8">?</a>
                    <font class="error"><?php echo $errors['passwd2']; ?></font>
                </div>

                <h4 class="head database">Database Settings</h4>
                <span class="subhead">Database connection information <font class="error"><?php echo $errors['db']; ?></font></span>
                <div class="row">
                    <label>MySQL Table Prefix:</label>
                    <input type="text" name="prefix" size="30" tabindex="9" value="<?php echo $info['prefix']; ?>">
                    <a class="tip" href="#t9">?</a>
                    <font class="error"><?php echo $errors['prefix']; ?></font>
                </div>
                <div class="row">
                    <label>MySQL Hostname:</label>
                    <input type="text" name="dbhost" size="30" tabindex="10" value="<?php echo $info['dbhost']; ?>">
                    <a class="tip" href="#t10">?</a>
                    <font class="error"><?php echo $errors['dbhost']; ?></font>
                </div>
                <div class="row">
                    <label>MySQL Database:</label>
                    <input type="text" name="dbname" size="30" tabindex="11" value="<?php echo $info['dbname']; ?>">
                    <a class="tip" href="#t11">?</a>
                    <font class="error"><?php echo $errors['dbname']; ?></font>
                </div>
                <div class="row">
                    <label>MySQL Username:</label>
                    <input type="text" name="dbuser" size="30" tabindex="12" value="<?php echo $info['dbuser']; ?>">
                    <a class="tip" href="#t12">?</a>
                    <font class="error"><?php echo $errors['dbuser']; ?></font>
                </div>
                <div class="row">
                    <label>MySQL Password:</label>
                    <input type="password" name="dbpass" size="30" tabindex="13" value="<?php echo $info['dbpass']; ?>">
                    <a class="tip" href="#t13">?</a>
                    <font class="error"><?php echo $errors['dbpass']; ?></font>
                </div>
                <br>
                <div id="bar">
                    <input class="btn" type="submit" value="Install Now" tabindex="14">
                </div>
            </form>
    </div>
    <div>
        <p><strong>Need Help?</strong> We provide <u>professional installation services</u> and commercial support. <a target="_blank" href="http://osticket.com/support/professional_services.php">Learn More!</a></p>
    </div>
    <div id="overlay"></div>
    <div id="loading">
        <h4>Doing stuff!</h4>
        Please wait... while we install your new support ticket system!
    </div>
