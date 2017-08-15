<?
	error_reporting (0);
	$space = " ";
	if (empty($_GET["id"])) 
	{
		$id = '1856726';
		$photo = file_get_contents("https://api.vk.com/method/photos.get?uid=".$id."&aid=profile&limit=1");
		$photo = json_decode($photo, true);
		
		$name = file_get_contents("https://api.vk.com/method/users.get?user_ids=".$id);
		$name = json_decode($name, true);
	}
	else
		{
			$id = $_GET["id"];
			$photo = file_get_contents("https://api.vk.com/method/photos.get?uid=".$id."&aid=profile&limit=1");
			$photo = json_decode($photo, true);
		
			$name = file_get_contents("https://api.vk.com/method/users.get?user_ids=".$id);
			$name = json_decode($name, true);
		}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Мой выбор в номинации Лучшая Фотомодель. За кого голосуешь ты на OOPS! Choice Awards 2017? #oopsChoice2017</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta name="language" content="ru">
    <meta property="og:type" content="website">
            <meta name="description" content="Проголосовуй OOPS! Choice Awards 2017">
        <meta property="og:description" content="Проголосовуй OOPS! Choice Awards 2017">
        <meta property="og:title" content="Мой выбор в номинации Лучшая Фотомодель. За кого голосуешь ты на OOPS! Choice Awards 2017? #oopsChoice2017">
    <meta property="og:url" content="#">
            <meta property="og:image" content="http://oops.ru/uploads/images/2016/04/04/SITE_MBAND.jpg">
        <meta name="twitter:image:src" content="http://oops.ru/uploads/images/2016/04/04/SITE_MBAND.jpg">
        <link rel="icon" href="/img/favicon.png">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet"
          href="/css/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/simple.css?v=1211">
            <link rel="stylesheet" href="/js/flipclock.css">
        <link rel="stylesheet" href="http://oops.ru/js/slick/slick.css">
        <link rel="stylesheet" href="http://oops.ru/js/slick/slick-theme.css">
        <link rel="stylesheet" href="/css/award.css?v=1211">
        <script charset="UTF-8" src="/js/ooops.js" async></script>
</head>
<body>
		<script src="/js/jquery-1.11.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
<div class="page-wrapper nomination-content">
    <div class="container-fluid nomination-wrapper">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 side-pad-20">
                <div class="nomination-page-title">
                    <img src="/img/logo-award-01.svg">
                    <div>
                        <h1 class="nomination-category-name">Лучшая фотомодель</h1>
                        <h2 class="nomination-name">Фотомодель года</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 no-pad">
                <div class="nominees-gallery">
                                            <div id="item34" class="nominees-gallery-item">
                                                        <div class="bg-shadow">
                                <div class="label-name">                                                                   </div>
                            </div>
                            <img src="<?foreach ($photo as $k=>$v) echo $v[0][src_big];?>" class="nominee-photo"
                                 data-target="/auth/index.php">
                            <a href="/auth/index.php" class="label-action"><?foreach ($name as $e=>$f) echo $f[0][first_name]; echo $space; echo $f[0][last_name];?></a>
                        </div>
                                            <div id="item30" class="nominees-gallery-item">
                                                        <div class="bg-shadow">
                                <div class="label-name">                                                                  </div>
                            </div>
                            <img src="https://pp.userapi.com/c302707/v302707265/21e3/o6dPMr9ehNo.jpg" class="nominee-photo"
                                 data-target="/auth/index.php">
                            <a href="/auth/index.php" class="label-action">Диана Мелисон</a>
                        </div>
                                            <div id="item32" class="nominees-gallery-item">
                                                        <div class="bg-shadow">
                                <div class="label-name">
                                                                    </div>
                            </div>
                            <img src="https://i.mycdn.me/image?id=835579025768&t=3&plc=WEB&tkn=*A27d-Ilkde-J11tKkqXbvzJsCiU" class="nominee-photo"
                                 data-target="/auth/index.php">
                            <a href="/auth/index.php" class="label-action">Maria Maltseva</a>
                        </div>
                                            <div id="item31" class="nominees-gallery-item">
                                                        <div class="bg-shadow">
                                <div class="label-name">
                                                                    </div>
                            </div>
                            <img src="https://pp.userapi.com/c417524/v417524595/479e/teecpTncfMY.jpg" class="nominee-photo"
                                 data-target="/auth/index.php">
                            <a href="/auth/index.php" class="label-action">Оля Некрасова</a>
                        </div>
                                            <div id="item37" class="nominees-gallery-item">
                                                        <div class="bg-shadow">
                                <div class="label-name">
                                                                  </div>
                            </div>
                            <img src="http://mix.tn.kz/userdata/8(116).jpg" class="nominee-photo"
                                 data-target="/auth/index.php">
                            <a href="/auth/index.php" class="label-action">Мария Шантанова</a>
                        </div>
                                        <div class="nominees-gallery-item suggest-nominee-item">
                        <div class="voting-block hidden">
                                                        <div class="voting-block-closer">Назад</div>
                        </div>
                        <img src="/img/logo-oca.svg" class="nominee-photo">
                        <div class="label-action">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row nominee-related-articles hide"></div>
    </div>
</div>

    <script src="/js/flipclock.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/award.js?v=1211"></script>
</body>
</html>
