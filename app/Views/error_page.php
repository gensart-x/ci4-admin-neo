<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="At your service.">
    <meta name="author" content="gensart">

    <!-- Title -->
    <title>Whoops!</title>

    <!-- Styles -->
    <?= $this->include('templates/header_script') ?>
</head>

<body class="error-page err-404">
    <div class="container">
        <div class="error-container">
            <div class="error-info">
                <h1>Oops!</h1>
                <p>It seems that the page you are looking for no longer exists.<br>Please contact our <a href="#">help center</a>.</p>
            </div>
            <div class="error-image"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <?= $this->include('templates/footer_script') ?>
</body>

</html>