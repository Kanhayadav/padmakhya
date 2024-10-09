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

    <div id="main_outer">
        <div id="login">
            <h1>Register Yourself</h1>
			
            <br>
			<form id="login_form" name="login_form" action="functions/reg.php" method="post">
			
				<div class="form-group">
					<label class="required" for="email">
						Email Address
					</label>
					<input type="text" maxlength="40" class="form-control" placeholder="Email" name="email" id="email" style="    background: rgba(255, 255, 255, 0.427);
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
					<input type="password" class="form-control" placeholder="Password" maxlength="30" name="pass" id="pass">
				</div>
				<br>
				<div class="form-group">
					<label class="required" for="pass">
						Full Name
					</label>
					<input type="text" onkeypress="return blockSpecialChar(event)" maxlength="40" class="form-control" placeholder="Full Name" name="name" id="name" style="    background: rgba(255, 255, 255, 0.427);
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
				<input type="submit" name="submit" class="btn" value="Register">
				<br><a href="log.php" class="btn">Go to Log-In</a>
				</div>
            </form>
			<div id="submit_message"></div>
        </div>
    </div>
    <br>
    <script type="text/javascript">
    function blockSpecialChar(e){
  var k;
  document.all ? k=e.keyCode :k=e.which;
  return((k > 64 && k < 91)||(k > 96 && k < 123)||(k >= 31 && k <=  33));
}
</script>
</body>

<?php 
include_once( 'footer.php' );
?>