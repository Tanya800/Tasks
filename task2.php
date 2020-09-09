<!DOCTYPE html>
<html>
<head>
	<title>Задание 2</title>
</head>

<?php
$worning=$_POST['worning'];
$errors=$_POST['errors'];
$countCommit=0;

if(($worning+$errors)%2==0){

    $countCommit= $worning*2; // считаем количество коммитов необходимых для исправления всех ворнингов на ошибки

    $errors+= $worning; // 1 ворнинг -> 2 ворнинга -> 1 ошибка == 1 ворнинг -> 1 ошибка 

    $countCommit+=$errors/2; // количество коммитов, чтобы исправить все ошибки(за один раз исправляются две ошибки)
    
}else {
	$countCommit=-1;
}
?>

<body>
	<h1>Задание 2. Помочь программисту Пете победить эрроры и ворнинги</h1>
	<p>У программиста Пети есть код на PHP. У него было N фатальных ошибок и M ворнингов. Петя решил заставить код работать без ошибок и ворнингов, для чего ему его друг подарил подписку на хорошую IDE и github, так как только с помощью этих инструментов Петя смог бы найти и устранить все проблемы. Петя не очень опытный разработчик. Если Петя исправляет одну фатальную ошибку за коммит, то вместо неё появляется одна новая, если исправляет ворнинг в коммите, то вместо него появляется два новых ворнинга. Если Петя исправляет два ворнинга за один коммит, то появляется одна новая фатальная ошибка, и только когда Петя исправляет сразу две фатальные ошибки за один коммит, то не появляется ничего нового. Петя считает, что код будет полностью рабочим только если исправить все фатальные ошибки и ворнинги. Определи минимальное количество коммитов, нужное для исправления всех багов.
</p>
	<form method="post" action="task2.php">
	<p><label>Количество ворнингов<input type="number" min=0 name="worning" required></label></p>
	<p><label>Количество фатальных ошибок<input type="number" min=0 name="errors" required></label></p>
	<input type="submit" value="Отправить"/>
	</form>
	<p>Количество коммитов: <?=$countCommit?></p>
</body>
</html>