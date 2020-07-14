<?php
session_start();
require_once './includes/php/session.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SkyBlueEducation</title>
    <link rel="stylesheet" href="./includes/css/styles.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="navbar">
          <button class="button navbar">Strona Główna</button>
          <button class="button navbar">Twoja Klasa</button>
      </div>
      <div class="chat">
        <widgetbot
        class="widgetbot-chat"
        server="723520331461034015"
        channel="725296161967046666"
          width="800"
          height="600"
        ></widgetbot>
        <script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
      </div>
      <div class="sidebar">
        <button class="button sidebar">Uruchom Lekcje</button>
        <button class="button sidebar">Ostatnia lekcja</button>
        <button class="button sidebar">Wszystkie lekcje</button>
        <button class="button sidebar">Odwołaj lekcje</button>
        <form action="includes/php/logout.php" method="post">
        <button class="button sidebar logout">Wyloguj</button>
        </form>
      </div>
    </div>
  </body>
</html>
