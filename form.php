<html>
<head>
    <title>Form</title>
</head>
<body>
<div class="container">
    <form action="home.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="enter username" required><br/>
        <label for="password">password:</label>
        <input type="password" name="password" id="password" placeholder="enter password" required><br/>
        <input type="submit">
        <?php
        if(isset($_GET['logged']) && $_GET['logged']=='false'){
            echo "wrong bitch";
        }
        ?>

    </form>
</div>
</body>
</html>
