<html>


<head>

<title>My</title>

<link rel="stylesheet" href="My.css">

</head>


<body>

<h1 align=center>
 This is a personal web-site of Andrey Artemov
</h1>

<p>
My page
</p>

<p> <?php 
$sender = 't-andra@mail.ru';
$recipient = 'andrey.artemov@hsgroup.ru';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}


 ?> </p>

<p> <img src="Photo.jpg" alt=""/> </p>

<p> <?php echo "I am at the bottom of the photo. My contact phone number +79036248420. My mail t-andra@mail.ru. I am Russian business/IT consultant. " ?> </p>

<!--LiveInternet counter--><a href="https://www.liveinternet.ru/click"
target="_blank"><img id="licnt6881" width="88" height="120" style="border:0" 
title="LiveInternet: показано количество просмотров и посетителей"
src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
alt=""/></a><script>(function(d,s){d.getElementById("licnt6881").src=
"https://counter.yadro.ru/hit?t29.6;r"+escape(d.referrer)+
((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
";h"+escape(d.title.substring(0,150))+";"+Math.random()})
(document,screen)</script><!--/LiveInternet-->

</body>

</html>



