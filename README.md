# Задачи по разработке php страниц
### Запуск страниц 
Для того, чтобы посмотреть решение первой задачи, необходимо загрузить папку "task1" и открыть в браузере страницу "task1.php".
Для второй задачи - запустить  в браузере страницу "task2.php", третью задачу аналогично.
Задание 1. Реализовать скрипт на PHP
-----------------------------------
В переменной $articleText хранится текст статьи. В переменной $articleLink хранится ссылка на страницу с полным текстом этой статьи.
Нужно в переменную $articlePreview записать анонс статьи (сокращённый текст) по правилам:
— обрезать до 200 символов;
— приписать многоточие;
— последние 3 слова и многоточие сделать ссылкой на полный текст статьи.

Задание 2. Помочь программисту Пете победить эрроры и ворнинги
-----------------------------------
У программиста Пети есть код на PHP. У него было N фатальных ошибок и M ворнингов. Петя решил заставить код работать без ошибок и ворнингов, для чего ему его друг подарил подписку на хорошую IDE и github, так как только с помощью этих инструментов Петя смог бы найти и устранить все проблемы. Петя не очень опытный разработчик. Если Петя исправляет одну фатальную ошибку за коммит, то вместо неё появляется одна новая, если исправляет ворнинг в коммите, то вместо него появляется два новых ворнинга. Если Петя исправляет два ворнинга за один коммит, то появляется одна новая фатальная ошибка, и только когда Петя исправляет сразу две фатальные ошибки за один коммит, то не появляется ничего нового. Петя считает, что код будет полностью рабочим только если исправить все фатальные ошибки и ворнинги.
Определи минимальное количество коммитов, нужное для исправления всех багов. Напиши php-скрипт, который определит минимальное количество коммитов, необходимых для исправления кода.
Входные данные
В форму на странице можно ввести два числа N, M (0 ≤ N, M ≤ 1000).
Выходные данные
Нужно вывести одно число – минимальное количество коммитов, или -1, если исправить код Пети невозможно.
######Пример входных данных:
3 3
######Пример выходных данных:
9

Задание 3. Помочь ученикам в изучении странной математики
-----------------------------------
В связи с реформой образования был введен новый предмет, на котором изучаются различные альтернативные науки. Одной из таких наук является странная математика. Её основное отличие от обычной математики в том, что числа в ней упорядочены не по возрастанию, а лексикографически, то есть как в словаре (сначала по первой цифре, затем, при равной первой цифре – по второй, и так далее). Кроме того, рассматривается не бесконечное множество натуральных чисел, а лишь первые n чисел. Так, например, если n=11, то числа в странной математике оказываются упорядочены следующим образом: 1, 10, 11, 2, 3, 4, 5, 6, 7, 8, 9.
Помоги ученикам в изучении этой науки – напиши программу, которая по заданному n находит место заданного числа k в порядке, определенном в странной математике. Например, если n=11 и k=2, программа должна выдать в качестве ответа 4.
