<?php 
    function drawTable($cols=10, $rows=10, $tableBackground="beige") {
        echo "<table border='1'>";
        for($tr = 1; $tr <=$rows; $tr++) {
          echo "<tr>";
            for($td = 1; $td <= $cols; $td++) {
              if($tr == 1 or $td == 1)
                echo "<th style='background: $tableBackground;'>" . $tr*$td . "</th>";
              else
                echo "<td>" . $tr*$td . "</td>";
            }
          echo "</tr>";
        }
      echo "</table>";
    }

// Menu
  $mainMenu = [
    ['link'=>'Home', 'href'=> 'index.php'],
    ['link'=>'About', 'href'=> 'about.php'],
    ['link'=>'Contact', 'href'=> 'contact.php'],
    ['link'=>'Times table', 'href'=> 'table.php'],
    ['link'=>'Calculator', 'href'=> 'calc.php'],
  ];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Times table</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="assets/imgs/logo.gif" width="187" height="100" alt="Наш логотип" class="logo" />
    <span class="slogan">come to us for learning</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Times table</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action=''>
      <label>Number of columns: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Number of rows: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Color: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Create' />
    </form>
    <!-- Table -->
      <?php 
        drawTable();
      ?>
    <!-- /Table -->
    <!-- Main content -->
  </div>
  <div id="nav">
    <h2>Website navigation</h2>
    <!-- Menu -->
    <?php
    echo "<ul>";
      foreach($mainMenu as $item) {
        echo "<li>";
        echo "<a href='{$item['href']}'>{$item['link']}</a>";
        echo "</li>";
      }
    echo "</ul>";
    ?>
    <!-- /Menu -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; moek, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>