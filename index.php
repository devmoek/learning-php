<?php 
  // date format
  setlocale(LC_ALL, "english");
  $mon = strftime('%B');
  $mon = iconv('windows-1251', 'utf-8', $mon);
  $day = strftime('%d');
  $year = strftime('%Y');

  /* 
    get an hour in string view from 00 to 23
    and reduce the string to an integer from 0 to 23
  */

  $hour = (int)strftime('%H');
  $welcome = ''; // initilize the variable for welcome
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
    <!-- Upper part of the page -->
    <img src="assets/imgs/logo.gif" width="187" height="100px" alt="logo" class="logo">
    <span class="slogan">come to us for learning</span>
    <!-- /Upper part of the page -->
  </div>

  <div id = "content">
    <!-- Header -->
    <h1><?= $welcome ?> Guest!</h1>
    <!-- Header -->

    <!-- Main content -->
    <blockquote>
      <?php echo "Today's $day day, $mon month, $year year." ?>
    </blockquote>
    
    <h3>Why are we learning?</h3>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos adipisci est totam, error rem aut a necessitatibus autem nostrum. Quo, porro corrupti? Hic repudiandae cupiditate eum nihil rem, minus magnam.
    </p>
    <h3>What is PHP?</h3>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi tenetur eaque corporis nulla ipsa quod velit est cum minus ab distinctio in itaque non fugit, accusamus laboriosam natus. Itaque, porro!
    </p>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate incidunt nihil quo est ut architecto ipsa delectus aliquid ratione sunt, odit adipisci tenetur similique a officia ea neque aut et.
    </p>
    <!-- /Main content -->
  </div>

  <div id="nav">
    <!-- Navigation -->
    <h2>Website navigation</h2>

    <!-- Menu -->
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
    <!-- /Menu -->
    <!-- /Navigation -->
  </div>

  <div id="footer">
    <!-- Bottom part of the page -->
    &copy; moek, 2020 &ndash; <?=$year ?>.
    <!-- /Bottom part of the page -->
  </div>
</body>

</html>