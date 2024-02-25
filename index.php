<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="tooltip"> &#x1F6C8;
  <span class="tooltiptext">Here, you're invited to send genuine wishes to yourself. Embrace this moment of self-appreciation!</span>
</div>
    <?php
        $username = isset($_POST["username"]) ? $_POST["username"] : ""; 
        $currentDate = date("d");
        $currentMonth = date("F");
        if ($username) {
        echo "<audio autoplay><source src='song.mp3' type='audio/mpeg'></audio>";
        }
    ?>
    <h2>
    <?php
            if ($username){
                echo "Happy B'Day ".$username." 🥳🤩🎂🎉";
                }
        ?>
    </h2>
    <h4 style="text-align:center;">
        <?php
            if ($username){
                echo "Born On ".$currentMonth." ".$currentDate;
                }
        ?>
    </h4>
    <div class="container">
        <div class="form-input">
            <form action="index.php" method="post">
                <input type="text" placeholder="Your Name" required name="username" autofocus> <br>
                <input type="submit" name="submit">
             </form>
        </div>
    </div>
    <footer>
        <h4>Made With 💖 <a href="https://dheerajpabolu.000.pe" target="_blank">DHEERAJ PABOLU</a></h4>
        <h4>Source Code <a href="https://github.com/dheeraj1918" target="_blank">GITHUB</a></h4>
        <h4>Version 1.0.0</h4>
        <h4>Last Modifiled : 19-02-2024</h4>
    </footer>
</body>
</html>