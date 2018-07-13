
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="frmContact">
	<div>
		<label style="padding-top:20px;">Name</label>
		<span id="userName-info" class="info"></span><br/>
		<input type="text" name="userName" id="userName" class="demoInputBox">
	</div>
	<div>
		<label>Email</label>
		<span id="userEmail-info" class="info"></span><br/>
		<input type="text" name="userEmail" id="userEmail" class="demoInputBox">
	</div>
	<div>
		<label>Subject</label> 
		<span id="subject-info" class="info"></span><br/>
		<input type="text" name="subject" id="subject" class="demoInputBox">
	</div>
	<div>
		<label>Content</label> 
		<span id="content-info" class="info"></span><br/>
		<textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
	</div>
	<div>
		<label>Captcha</label> 
		<span id="captcha-info" class="info"></span><br/>
		<input type="text" name="captcha" id="captcha" class="demoInputBox"><br>
	</div>
	<div>
		<img id="captcha_code" src="cap1.php" />
		<button name="submit" class="btnRefresh" onClick="refreshCaptcha();">Refresh Captcha</button>
	</div>
	<div>
		<button name="submit" class="btnAction" onClick="sendContact();">Send</button>
	</div>
</div>

</body>
</html>