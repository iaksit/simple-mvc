<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simple MVC</title>
        <link rel="stylesheet" href="<?php echo ASSET_ROOT; ?>/css/global.css">
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="main-content">
            <header class="main">
                <h1>Welcome to the home/index view</h1>
            </header>

            <p>Below is the result of the parameters passed into the URL. You can pass in the controller and model name too. Try it...</p>

            <code>/home/index/[name]/[mood]</code>

            <p><?php echo $data['name']; ?> is <?php echo $data['mood']; ?></p>
        </div>
    </body>
</html>
