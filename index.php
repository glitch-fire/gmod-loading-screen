<?php
$serverName = NULL;

if(isset($_GET['servername'])) {
	$serverName = $_GET["servername"];
}

$messages = [
  "Stealing printers",
  "Raiding the PD",
  "Robbing the bank",
  "Breaking the law",
  "Building a base",
  "Cracking the keypad",
  "Lockpicking the door",
  "Arresting the Thief",
  "Escaping the prison",
  "Selling bitcoins",
  "Printing money",
  "Initiating the orbital strike cannon"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Glitch Fire - Loading Screen</title>
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>
<body>
  <div class="loading">
    <div class="wrapper">
      <img class="logo" src="assets/img/logo.png" alt="">
      <h1>
        <?php
          if (isset($messages)) {
            echo $messages[array_rand($messages)] . '...';
          } else {
            echo "Error: No Message Found";
          }
        ?>
      </h1>
      
      <h2>
        <?php
          if (isset($serverName)) {
            echo "Loading " . $serverName;
          } else {
            echo "Error: No Server Specified";
          }
        ?>
      </h2>

      <div class="loader"><div></div><div></div><div></div><div></div></div>
    </div>
  </div>
</body>
</html>