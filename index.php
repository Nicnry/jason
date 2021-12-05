<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Amis de Jason</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php require_once('./Models/User.php'); ?>
        <?php require('./Views/App/header.php'); ?>
        <!-- Main section -->
        <main>
            <!-- New member form -->
            <?php require('./Views/Users/create.php'); ?>
            
            <!-- Member list -->
            <?php require('./Views/Users/read.php'); ?>
        </main>
        <?php require('./Views/App/footer.php'); ?>
    </body>
</html>