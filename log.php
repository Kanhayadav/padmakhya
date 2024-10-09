<?php 
$page_name = 'Login Page';
include_once( 'header.php' );
include_once( 'Functions/dbs.php' );
include_once('Functions/login.php');
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

?>
<body>



<script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()",0);
		window.onunload=function(){null;}
		</script>
    <div id="main_outer">
        <div id="login">
            <h1>Log-In</h1>
            <br>
			<form id="login_form" name="login_form" action="Functions/login.php" method="post">
				<div class="form-group">
					<label class="required" for="email">
						Username / Email
					</label>
					<input type="text" maxlength="40" class="form-control" required placeholder="Email" name="email" id="email" style="    background: rgba(255, 255, 255, 0.427);
    border-radius: 10vw;
    height: 6vh;
    border-color: transparent;
    width: 43vw;
    text-align: center;
    box-shadow: 6px 5px 0px -1px;
    outline: none;
    margin: 1rem 0rem 2rem 0rem;
    color: #145363;
    transition: background-color .1s ease-in-out;
    font-size: 1.3rem;
    font-family: 'Federo', sans-serif;
    cursor: pointer;">
				</div>
				<br>
				<div class="form-group">
					<label class="required" for="pass">
						Password
					</label>
					<input type="password" maxlength="30" class="form-control" required placeholder="Password" name="pass" id="pass">
				</div>
				<br>
				<div class="form-group">
				<input type="submit" name="submit" class="btn" value="Login">
				<br><a href="index.php" class="btn">Back to Registeration</a>
				</div>
            </form>
			<div id="submit_message"></div>
        </div>
    </div>
    <br>
</body>

<?php 
include_once( 'footer.php' );
?>