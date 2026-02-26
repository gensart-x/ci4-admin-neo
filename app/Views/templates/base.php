<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="At your service.">
    <meta name="author" content="gensart">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title><?= $title ?? 'Hmm, thou forgotten $title?' ?></title>

    <!-- Header Script -->
    <?= $this->include('templates/header_script') ?>
</head>

<body class="">
    <div class="page-container">
        <?= $this->include('templates/sidebar') ?>
        <div class="page-content">
            <?= $this->include('templates/navbar') ?>
            <div class="main-wrapper">
                <?= $this->renderSection('content') ?>
            </div>
            <?= $this->include('templates/footbar') ?>
        </div>
    </div>
</body>

</html>