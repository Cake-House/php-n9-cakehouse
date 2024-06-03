<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwindcsss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- css -->
    <link rel="stylesheet" href="../admincp/css/login_css.css">

    <title>Admin Manager</title>
</head>

<body>
    <div class="wrapper">
        <?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/main.php");
        // include("../pages/footer.php");
        ?>
    </div>
</body>

</html>