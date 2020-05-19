<?php
function do_html_header($title)
{
// print an HTML header
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title><?php echo $title;?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
<body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="index.php">
                    <strong>&laquo; Home: </strong>PHP & MySQL Login & Register Form with HTML5 & CSS3
                </a>
                <span class="right">
                    <a href=" https://m3tech.com.ng/" target="blank">
                        <strong>Go to &raquo; M3 Technology</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>PHP & MySQL <span>Login & Registration Form</span> with HTML5 & CSS3</h1>
				<nav class="codrops-demos">
					<span>Click <strong>"Sign Up"</strong> to register your login details into the database</span>
					<!--<a href="index.html" class="current-demo">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>-->
				</nav>
            </header>
<hr />
<?php
function do_html_heading($title)
{
?>	
    <head>
        <title><?php echo $title;?></title>
    </head>
<?php
}
    if($title)
        do_html_heading($title);
}

function display_site_info()
{
	echo "<div class='content'><h3>This is Brainwave Institute of Technology(BIT)'s Registration and Login source code.</h3>
	<p>Thanks for downloading my simple work. I'm <a href='https://facebook.com/olaiwola.akeem.3'><b>Olaiwola Akeem</b></a>. 
	 This is just my little work. Contact me through WhatsApp <b>+2347039839326</b> if you are having any problem on this source 
	 code or you want more functionalities of this source code. You can also contact me if you have any big project 
	  you want me to handle for you. Open the ReadMe.txt file to learn how to use this source code.</p>
	</div><br><br>";
}

function display_login_form() 
{
?>
<section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					<a class="hiddenanchor" id="toresetpwd"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="index.php" method="post" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    
                                <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
								</p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="passwd" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>

                                <p class="change_link"><a href="forgot_form.php" class="to_register" style="float:left">Forgot Password?</a> 
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
						

                        <div id="register" class="animate form">
                            <form  action="register_new.php" method="post" autocomplete="on"> 
                                <h1> Sign up </h1>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="ola@obrainacademy.com"/> 
                                </p>								
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="brainwave18" />
                                </p>
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwd" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwd2" required="required" type="password" placeholder="eg. X8df!90EO"/>
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
<?php
}



function display_registration_form()
{
?>
<section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					<a class="hiddenanchor" id="register2"></a>
                    <div id="wrapper">
                  <div id="register2" class="animate form">
                            <form  action="register_new.php" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="login.php" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						</div>
						</section>
        </div>
    </body>
</html>
<?php
}

function get_user_urls()
{
	echo "<div class='content'><b>Display the contents of your website here</b></div>";
	echo "<div class='content'> <a href='#'> Go To Dashboard</a><br>"; //Put the url you want to redirect the user to
	echo"<div><a href='change_passwd_form.php'>Change Password</a><br>";
	echo "<a href='logout.php'> Logout </a></div>";
}

function do_html_url() 
{
	echo "<a href='login.php'> <b>Login here</b></a> or <a href='login.php#toregister'><b> Sign Up </b> </a> ";
}

function display_changepwd_form()
{
?>
<section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					<a class="hiddenanchor" id="tochangepwd"></a>
					
                    <div id="wrapper">
<div id="changepwd" class="animate form">
                            <form  action="change_passwd.php" method="post" autocomplete="on"> 
                                <h1> Change Password </h1>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Old Password </label>
                                    <input id="passwordsignup" name="old_passwd" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">New Password </label>
                                    <input id="passwordsignup" name="new_passwd" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirm New Password </label>
                                    <input id="passwordsignup_confirm" name="new_passwd2" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Change Password"/> 
								</p>
                                <p class="change_link">  
									Logout
									<a href="logout.php" class="to_register"> here </a>
								</p>
                            </form>
                        </div>
						</div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php
}

function do_html_footer()
{
?>
	<footer>
	&copy 2018 <a href='https://bit.obrainacademy.com'> Brainwave 
	Institute of Technology</a> Designed by <a href="https://facebook.com/olaiwola.akeem.3" target="blank">
	<b>Olaiwola Akeem (Brainwave)</b></a>
	</footer>
	
<?php
}

function display_forgot_form()
{
?>
<section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
					<a class="hiddenanchor" id="resetpwd"></a>
					
                    <div id="wrapper">

<div id="resetpwd" class="animate form">
                            <form  action="forgot_passwd.php" method="post" autocomplete="on"> 
                                <h1> Reset Password </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Enter Your Username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="brainwave18" />
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Change Password"/> 
								</p>
                                <p class="change_link">  
									Login
									<a href="login.php" class="to_register"> here </a>
								</p>
								</form>
                        </div>
						</div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php
}
