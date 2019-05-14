<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	$name = '';
	$email = '';
	$subject = '';
	$message = '';
	$err_msg = '';
	$complete_msg = '';
	
} else {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$err_msg = '';
	$complete_msg = '';


	if ($name == '' || $email == '' || $subject == '' || $message == '') {
		$err_msg = '全ての項目を入力して下さい。';
	}

	if ($err_msg == ''){
		$to = 'yw.forwork.info@gmail.com';
		$headers = 'From: ' . $email . "\r\n";
	
		$message .= "\r\n\r\n" . $name;
	
		mb_send_mail($to, $subject, $message, $headers);
	
		$complete_msg = '送信されました！';
	
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	}
}
?>
<!Doctype html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Yuma Watanabe">
	<meta name="keywords" content="PORTFOLIO, CONTACT">
	<meta name="description" content="当サイトは渡辺悠馬のポートフォリオサイトのお問い合わせページです。">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<link rel="canonical" href="https://portfolio.nwlftwrk.com/contact">
	<link rel="icon" type="image/png" href="/img/portfolio.png">
	<link rel="apple-touch-icon" href="/img/portfolio.png">
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<script src="/js/html5shiv.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/contact.css">
	<script src="/js/navigationbar.js"></script>
	<title>CONTACT</title> 
</head>
<body>

<header>
<h1>CONTACT</h1>
<section>
<i class="fas fa-bars"></i>
</section>
</header>
<nav>
  <ul>
   <li><a href="/">HOME</a></li>
   <li><a href="/work/">WORK</a></li>
   <li><a href="/cv/">CV</a></li>
   <li><a href="/about">ABOUT</a></li>
   <li><a href="/contact">CONTACT</a></li>
  </ul>
</nav>

<hr>

<main>

<?php if ($err_msg != ''): ?>
	<div>
		<?php echo $err_msg; ?>
	</div>
<?php endif; ?>

<?php if ($complete_msg != ''): ?>
	<section>
		<?php echo $complete_msg; ?>
	</section>
<?php endif; ?>

<form method="post">
<label>お名前</label>
<input type="text" name="name">
<label>メールアドレス</label>
<input type="email" name="email">
<label>件名</label>
<input type="text" name="subject">
<label>お問い合わせ内容</label>
<textarea name="message"></textarea>
<button type="submit">送信</button>
</form>

</main>

<footer>©︎ Yuma Watanabe</footer>
</body>
</html>
