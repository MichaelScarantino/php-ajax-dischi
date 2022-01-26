<?php
require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- Header logo -->
        <div class="header-logo">
            <img src="images/logo.png" alt="Logo Spotify">
        </div>
    </header>
    <!-- END HEADER -->
    <!-- MAIN -->
    <main>
        <!-- Container -->
        <div class="container">
            <!-- Disc content -->
            <div class="disc-content">
                <?php foreach($discs as $disc) { ?>
                    <!-- Single disc -->
                    <div class="single-disc">
                        <!-- Single disc image -->
                        <div class="single-disc-image">
                            <img src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
                        </div>
                        <!-- Single disc title -->
                        <div class="single-disc-title">
                            <h2><?php echo $disc['title'] ?></h2>
                        </div>
                        <!-- Single disc author -->
                        <div class="single-disc-author">
                            <?php echo $disc['author'] ?>
                        </div>
                        <!-- Single disc year -->
                        <div class="single-disc-year">
                            <?php echo $disc['year'] ?>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</body>
</html>