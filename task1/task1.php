<!DOCTYPE html>
<html>
<head>
	<title>Задание 1</title>
</head>

<?php
//проблема: приходится дополнительно хранить большие строки
$articleText="In connection with the education reform, a new subject has been introduced in which various alternative sciences are studied. One of these sciences is strange mathematics. Its basic ordinary mathematics is that the numbers in it are ordered not in ascending order, but lexicographically, that is, as in the format (first by the first digit, by equal to the first digit - by the second, and so on). Also, natural numbers, but only the first n numbers.";
$articleLink="task1_text.php";
$articlePreview = trim($articleText);// Удаляем лишние пробелы с начала и конца статьи
$limit = 200;
//статья может быть написана с множеством знаков препинания
if(strlen($articlePreview) > $limit){//Если количество символов больше лимита
	$articlePreview= substr($articlePreview,0, $limit); //обрезаем статью до лимита символов
	$length  = mb_strripos($articlePreview, ' ');// поиск последнего пробела
	$end     = mb_substr($articlePreview, $length - 1, 1);// выбираем последний символ
	if (in_array($end, array('.', '!', '?'))) {// проверяем этот последний символ
		$articlePreview= mb_substr($articlePreview, 0, $length); 

	} elseif (in_array($end, array(',', ':', ';', '«', '»', '…', '(', ')', '—', '–', '-'))) {//если заканчивается на данные символы- удаляем их
		$articlePreview= trim(mb_substr($articlePreview, 0, $length - 1)) ;
	} else {
		$articlePreview= trim(mb_substr($articlePreview, 0, $length));
	}
}

//ссылка
$Link=" " ;
$LinkOnText=explode(" ", $articlePreview); // разбираем анонс на слова

if(count($LinkOnText)>3){ // если слов больше 3
	for($i= count($LinkOnText) - 3 ; $i<count($LinkOnText);$i++){ 
		$Link.=$LinkOnText[$i]." ";
		// формируем строку из трех последних слов
	}
	$articlePreview=str_replace(trim($Link), " ", $articlePreview);//удаляем данные этой строки из анонса
	$Link.="...";
}elseif (count($LinkOnText)<=3) {// если слов меньше 3
	$Link.=implode(" ", $articlePreview);
	$Link.="...";
}

?>

<body>
	<h1>Задание 1. Реализовать скрипт на PHP</h1>
	<p>Анонс статьи:</p>
	<p> <?=$articlePreview?><a href=<?=$articleLink?>><?=$Link?></a></p>
</body>
</html>
