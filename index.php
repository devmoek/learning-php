<?php 
  // date format
  setlocale(LC_ALL, "english");
  $mon = strftime('%B');
  $mon = iconv('windows-1251', 'utf-8', $mon);
  $day = strftime('%d');
  $year = strftime('%Y');

  /* 
    получаем текущий час в виде строки от 00 до 23 
    и приводим строку к целому числу от 0 до 23
  */

  $hour = (int)strftime('%H');
  $welcome = ''; // инициализируем переменную для приветствия
  if($hour>0 and $hour<6) {
    $welcome = "Good night!";
  } elseif ($hour>=6 and $hour<12) {
    $welcome = "Good morning!";
  } elseif ($hour>=12 and $hour<18) {
    $welcome = "Good day!";
  }  elseif ($hour>=18 and $hour<23) {
    $welcome = "Good evening!";
  } else {
    $welcome = "Good night!";
  }
?>

<!DOCTYPE html>
<html>

<head>
  <title>moek learns php</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="assets/imgs/logo.gif" width="187" height="100px" alt="logo" class="logo">
    <span class="slogan">come to us for learning</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id = "content">
    <!-- Заголовок -->
    <h1><?= $welcome ?>, Guest!</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <blockquote>
      <?php echo "Сегодня $day число, $mon месяц, $year год." ?>
    </blockquote>
    
    <h3>Зачем мы ходим в школу?</h3>
    <p>
      У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
    </p>
    <h3>Что такое ЕГЭ?</h3>
    <p>
      Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
    </p>
    <p>
      Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия данного документа истекает 31 декабря года, следующего за годом его выдачи, поэтому у абитуриентов есть возможность поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
    </p>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <h2>Website navigation</h2>
    <!-- Меню -->
    <?php 
    $mainMenu = [
      ['link'=>'Home', 'href'=> 'index.php'],
      ['link'=>'About', 'href'=> 'about.php'],
      ['link'=>'Contact', 'href'=> 'contact.php'],
      ['link'=>'Times table', 'href'=> 'table.php'],
      ['link'=>'Calculator', 'href'=> 'calc.php'],
    ];
    ?>
    <ul>
      <li><a href='<?= $mainMenu[0]['href']?>'><?=$mainMenu[0]['link']?></a></li>
      <li><a href='<?= $mainMenu[1]['href']?>'><?=$mainMenu[1]['link']?></a></li>
      <li><a href='<?= $mainMenu[2]['href']?>'><?=$mainMenu[2]['link']?></a></li>
      <li><a href='<?= $mainMenu[3]['href']?>'><?=$mainMenu[3]['link']?></a></li>
      <li><a href='<?= $mainMenu[4]['href']?>'><?=$mainMenu[4]['link']?></a></li>
    </ul>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; moek, 2020 &ndash; <?=$year ?>.
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>