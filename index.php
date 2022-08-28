<?php

require __DIR__ . '/init.php';

$googleSiteKey = $_ENV['GOOGLE_SITE_KEY']; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Google reCaptcha Example</title>
        <script type="application/javascript"
                src="https://www.google.com/recaptcha/api.js?render=<?= $googleSiteKey ?>">
        </script>
        <script type="application/javascript">
            const googleSiteKey = '<?= $googleSiteKey ?>';
        </script>
        <script type="application/javascript" src="./script/main.js"></script>
        <link rel="stylesheet" href="./style/main.css">
    </head>
    <body>
        <form onsubmit="return false">
            <h1>Google reCaptcha Example</h1>
            <h2>Send message</h2>
            <textarea name="message"
                      placeholder="Enter a message"
                      required></textarea>
            <input type="submit" value="Send" onclick="submitForm()" />
        </form>
    </body>
</html>
