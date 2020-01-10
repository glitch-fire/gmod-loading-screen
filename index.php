<?php
$serverName = NULL;

if(isset($_GET['servername'])) {
	$serverName = $_GET["servername"];
}

$memes = [
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
</head>
<body>
  <div class="loading">
    <div class="wrapper">
      <img class="logo" src="assets/img/logo.png" alt="">
      <h1 class="meme">
        <?php
          if (isset($memes)) {
            echo $memes[array_rand($memes)] . '...';
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