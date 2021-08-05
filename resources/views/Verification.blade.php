<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
It is your verification code: {{ $data->email_token }}
<br>
<br> 
<a href="http://127.0.0.1:8000/register/verify/{{$data->email_token }}">Click here to Verify your Account</a> 
</body>
</html>
