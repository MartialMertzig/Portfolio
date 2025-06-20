<?php while (have_posts()) : the_post();

$project_title = get_the_title();
$project_description = get_field('description');
$project_integration_images = get_field('images_du_projet');
$project_archives_links = get_field('liens_archives_projet');

$project_languages = [
    'types_langage_html',
    'types_langage_css',
    'types_langage_javascript',
    'types_langage_php',
    'types_langage_sql'
];

?>

<?php include('header.php'); ?>

<!-- Section Profil -->
<div class="dashboard-hello">
    <div class="welcome">
        <h1>Bonjour, ravi de vous revoir !</h1>
        <div class="bouton-cv">
            <p>martialmertzig@outlook.com</p>
            <p>06 56 74 16 40</p>
            <a href="<?= esc_url(get_theme_file_uri('/assets/images/Curriculum_Vitæ_Martial_Mertzig_Paris.pdf')); ?>" target="_blank">
                <input type="button" class="bouton" value="Consultez mon CV →">
            </a>
        </div>
    </div>
</div>

<div class="project-page">

    <!-- Description -->
    <section class="project-details">
        <div class="titre-du-site">
            <img src="<?= esc_url(get_theme_file_uri('/assets/images/icon-projet-presentation.png')); ?>" alt="Icône présentation">
            <h2><?= esc_html($project_title); ?></h2>
        </div>
        <p><?= esc_html($project_description); ?></p>
    </section>

    <!-- Intégration -->
    <section class="project-screenshots">
        <div class="titre-du-site">
            <img src="<?= esc_url(get_theme_file_uri('/assets/images/icon-projet-img.png')); ?>" alt="Icône intégration">
            <h2>Intégration :</h2>
        </div>
        <div class="screenshot-box" style="width: 100%; height: 450px; overflow: auto; margin-top: 28px;">
            <div class="screenshot img">
                <?php
                if ($project_integration_images) {
                    $image_info = wp_get_attachment_image_src($project_integration_images, 'full');
                    if ($image_info) {
                        $alt = get_post_meta($project_integration_images, '_wp_attachment_image_alt', true);
                        echo '<img src="' . esc_url($image_info[0]) . '" alt="' . esc_attr($alt ?: 'Image du projet') . '">';
                    } else {
                        echo '<p>Erreur lors de la récupération de l’image.</p>';
                    }
                } else {
                    echo '<p>Aucune image à afficher.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Langages -->
    <section class="project-tech">
        <div class="titre-du-site">
            <img src="<?= esc_url(get_theme_file_uri('/assets/images/icon-projet-langage.png')); ?>" alt="Icône langages">
            <h2>Langages :</h2>
        </div>
        <div class="Logo-outils">
            <div class="icons-langage img">
                <?php
                foreach ($project_languages as $langage_field) {
                    $langage_image = get_field($langage_field);
                    if ($langage_image) {
                        $img_info = wp_get_attachment_image_src($langage_image, 'full');
                        if ($img_info) {
                            $alt = get_post_meta($langage_image, '_wp_attachment_image_alt', true);
                            echo '<img src="' . esc_url($img_info[0]) . '" alt="' . esc_attr($alt ?: 'Icône langage') . '">';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Liens archives -->
    <section class="project-links">
        <div class="titre-du-site">
            <img src="<?= esc_url(get_theme_file_uri('/assets/images/icon-projet-github.png')); ?>" alt="Icône GitHub">
            <h2>GitHub :</h2>
        </div>
        <?php if ($project_archives_links): ?>
            <a href="<?= esc_url($project_archives_links); ?>" target="_blank">Repository GitHub</a>
        <?php else: ?>
            <br>
            <p>Aucune archive du projet trouvée.</p>
        <?php endif; ?>
    </section>

    <!-- Contact -->
    <section class="dashboard-item contact-form">
        <div class="titre-du-site">
            <img src="<?= esc_url(get_theme_file_uri('/assets/images/icon-contact.png')); ?>" alt="Icône contact">
            <h2>Contact :</h2>
        </div>
        <br>
         <p>Email : <b>martialmertzig@outlook.com</b></p>
         <p>Téléphone : <b>06 56 74 16 40</b></p>
        <p>Mobilité : <b>Île-de-France</b></p>
    </section>

    <!-- Retour -->
    <div class="back-to-dashboard">
        <div class="back-to-dashboard-button">
            <a href="<?= esc_url(home_url('/')); ?>">Retour à l’accueil →</a>
        </div>
    </div>

</div>

<?php endwhile; ?>
<?php get_footer(); ?>
