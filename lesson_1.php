<?php
    $myName = 'Лирой Дженкинс';
    $myAge = 48;
    $myEmail = 'silverhand@knights.wow';
    $myCity = 'Ревущий Фьорд';
    $myBbiography = 'Однажды я накосячил и зафиксировал свой глупый поступок на видео. Это было во время кооперативного прохождения одного из подземелий игры World of Warcraft.';
   
?>

    <div style="width: 700px; margin: 50px auto; padding: 10px; border: 5px dashed #FF8383; border-radius: 5px; font-family: sans-serif;">
        <h1>Всем привет, меня зовут <?= $myName ?>!</h1>
        <p>Мой возраст - <?= $myAge ?>. Я живу в месте под названием: <em><?= $myCity ?></em>. Если хотите, можете отправить мне электронного голубя на <a href="mailto:<?= $myEmail ?>"><?= $myEmail ?></a>, я всем отвечу!</p>
        <p><?= $myBbiography ?> <span style="color: #333;">Посмотреть можно <a href="https://www.youtube.com/watch?v=yXWNQQKEMnE">тут</a>.</span></p>
    </div>