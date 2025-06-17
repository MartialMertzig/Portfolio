<!DOCTYPE html>
<html lang="fr">

<style> <?php include ('style.css'); ?> </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <div class="header">
        <div class="logo-container-header">
        <a href="<?php echo esc_url(home_url('/home.php')); ?>">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/Logo-Header.png'; ?> " alt="Votre Logo">
        </a>
        </div>
        <!-- <div class="icon-social">
        <a href="https://openclassrooms.com/fr/">Linkedin</a>
        <a href="https://openclassrooms.com/fr/">Behance</a>
        <a href="https://openclassrooms.com/fr/">Instagram</a>-->
        <!-- <a href="https://openclassrooms.com/fr/">Curriculum Vitae Print</a>
        </div>-->
        <div class="infos-count">
            <div class="icon-profil-count">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-setting.png'; ?> " alt="Votre Logo">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-message.png'; ?> " alt="Votre Logo">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-notification.png'; ?> " alt="Votre Logo">
            </div>
            <!-- <div class="profil-img">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/Img_Profil_Account.png'; ?> " alt="Votre Logo">
            </div>
            <div class="name-count">
            <h4>Martial Mertzig</h4>
            <p>Développeur WordPress Junior</p> -->
            </div>
            </div>
        </div>
        <div class="line-header"></div>
    </div>
</body>