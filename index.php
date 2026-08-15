<!DOCTYPE html>
<html>
<head>
    <title>Ansible PHP Server</title>
</head>
<body>

    <h1>Welcome to Ansible Web Server</h1>

    <h2>PHP is Working Successfully!</h2>

    <?php
       echo "<p>Yesssssssss</p>";
        echo "<p>Hello from PHP</p>";
        echo "<p>Server Hostname: " . gethostname() . "</p>";
        echo "<p>PHP Version: " . phpversion() . "</p>";
    ?>

</body>
</html>
