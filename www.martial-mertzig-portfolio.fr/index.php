<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    <!-- Section Profil -->
   <div class="dashboard-hello">
    <div class="welcome">
        <h1>Bonjour, ravi de vous revoir !</h1>
        <div class="bouton-cv">
            <p>martialmertzig@outlook.com</p>
            <p>06 56 74 16 40</p>
            <a href="<?php echo get_theme_file_uri() . '/assets/images/Curriculum_Vitæ_Martial_Mertzig_Paris.pdf'; ?>" target="_blank">
                <input type="button" class="bouton" value="Consultez mon CV →">
            </a>
        </div>
    </div>
</div>
<!-- Section du Dashboard -->
<div class="dashboard" id="sortable-container">
    <!-- Accueil -->
    <div class="dashboard-item site-title">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Historique.png'; ?>" alt="Votre Logo">
            <h2>Bienvenue sur mon portfolio :</h2>
        </div>
        <p class="site-description">
            🌳🦖Vous y découvrirez mes projets, compétences et réalisations en tant que Développeur.
            Chaque page vous plonge dans mon univers et reflète mon évolution continue dans le développement.<br><br>
            Chaque projet est une étape marquante de mon parcours, et je suis heureux de pouvoir les partager avec vous.
            N’hésitez pas à explorer les différentes sections et à me contacter pour échanger ou envisager une collaboration.<br><br>
            Bonne visite !🌳🌳
        </p>
    </div>
    <!-- Projets -->
    <div class="dashboard-item portfolio">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Projet.png'; ?>" alt="Votre Logo">
            <h2>PROJETS :</h2>
        </div>

        <div class="project-description">
            <?php
            $args = array(
                'post_type' => 'projets',
                'posts_per_page' => 10,
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => 1,
            );

            $projet_query = new WP_Query($args);

            if ($projet_query->have_posts()) {
                while ($projet_query->have_posts()) {
                    $projet_query->the_post();

                    $project_title = get_the_title();
                    $project_description = get_field('description_du_projet');
                    $project_image = get_field('image_du_projet');
                    $project_links = get_field('liens_du_projet');

                    echo '<a href="' . esc_url(get_permalink()) . '">';
                    echo '<div class="project">';
                    if ($project_image) {
                        echo '<img src="' . esc_url($project_image['url']) . '" alt="' . esc_attr($project_image['alt']) . '">';
                    }
                    echo '<div>';
                    echo '<h3>' . esc_html($project_title) . '</h3>';
                    echo '<p>' . esc_html($project_description) . '</p>';

                    if ($project_links) {
                        echo '<div class="project-links"><h4>Liens</h4>';
                        foreach ($project_links as $link) {
                            echo '<a href="' . esc_url($link['lien']) . '">' . esc_html($link['label']) . '</a>';
                        }
                        echo '</div>';
                    }

                    echo '</div></div>';
                    echo '</a>';
                }
                wp_reset_postdata();
            } else {
                echo 'Aucun projet trouvé.';
            }
            ?>
        </div>
    </div>

    <!-- Compétences -->
        <div class="dashboard-item-skills skills">
            <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Competences.png'; ?> " alt="Votre Logo">
        <h2>HARD SKILLS :</h2>
    </div>
            <div class="animated-schema" id="skills-schema">
                <!-- Cartes de compétences seront ajoutées par JavaScript -->
            </div>
        </div>

    <!-- Expériences -->
    <div class="dashboard-item portfolio">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/Icon-Experiences.png'; ?>" alt="Votre Logo">
            <h2>EXPÉRIENCES :</h2>
        </div>
        <div class="experience">
            <div><h3>Développeur Web et Graphiste · Indépendant</h3><p>févr. 2022 - aujourd'hui - Wolfisheim</p></div>
        </div>
        <div class="experience">
            <div><h3>Graphiste Maquettiste - BNP Paribas</h3><p>sept. 2022 - nov. 2022 · 3 mois - Paris</p></div>
        </div>
        <div class="experience">
            <div><h3>Graphiste multimédia - Groupe Quintésens</h3><p>oct. 2020 - sept. 2021 · 1 an - Paris</p></div>
        </div>
        <div class="experience">
            <div><h3>Graphiste Maquettiste - Zariel</h3><p>nov. 2019 - juil. 2020 · 9 mois - Paris</p></div>
        </div>
        <div class="experience">
            <div><h3>Graphiste multimédia - Planet 7</h3><p>sept. 2018 - juil. 2019 · 11 mois - Paris</p></div>
        </div>
        <div class="experience">
            <div><h3>Développeur web et graphiste - Digiplace</h3><p>sept. 2017 - sept. 2018 · 1 an - Saint-Mandé</p></div>
        </div>
        <div class="experience">
            <div><h3>Développeur web - Scarabe</h3><p>avr. 2017 - mai 2017 · 2 mois - Paris</p></div>
        </div>
    </div>

    <!-- Formations -->
    <div class="dashboard-item portfolio">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-Formations.png'; ?>" alt="Votre Logo">
            <h2>FORMATIONS :</h2>
        </div>
        <div class="formations"><div><h3>Mastère expert dev full stack</h3><p>2025 - 2027 - Paris Ynov Campus</p></div></div>
        <div class="formations"><div><h3>Développeur Wordpress</h3><p>2023-2024 - OpenClassrooms</p></div></div>
        <div class="formations"><div><h3>Licence Designer Graphique</h3><p>2020 - 2021 - Fonderie de l'Image</p></div></div>
        <div class="formations"><div><h3>Designer Graphique - Médias Numériques</h3><p>2018 - 2020 - Fonderie de l'Image</p></div></div>
        <div class="formations"><div><h3>MIM (Maquettiste Infographiste Multimédia)</h3><p>2017 - 2018 - Fonderie de l'Image</p></div></div>
        <div class="formations"><div><h3>Passerelle vers l’apprentissage</h3><p>Fév - Juil. 2017 - Fonderie de l'Image</p></div></div>
    </div>

    <!-- À propos -->
    <div class="dashboard-item about">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-a-propos.png'; ?>" alt="Votre Logo">
            <h2>À PROPOS :</h2>
        </div>
        <p>
            Passionné par l’informatique et toujours en quête de nouveaux défis. Actuellement admis en Mastère Expert en 
            Développement Full Stack à Paris YNOV Campus, je recherche une alternance en tant que Développeur Full Stack.<br><br>

            🧩 Mes objectifs :<br><br>

            ✅ Mettre mes compétences au service de projets innovants<br>
            ✅ Évoluer dans un environnement technique et stimulant<br>
            ✅ Renforcer mes expertises en Front-End & Back-End<br><br>

            📍 Zone recherchée : Paris & Île-de-France<br>
            📅 Disponibilité : Septembre 2025 (facultatif)<br><br>

            🌳 Si vous êtes à la recherche d’un alternant motivé, curieux et prêt à relever des défis techniques, n’hésitez pas à me contacter !<br><br>

            Merci pour votre visite, et au plaisir d’échanger ! 🌳🦖
        </p>
    </div>

    <!-- Contact -->
    <div class="dashboard-item contact-form">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-contact.png'; ?>" alt="Votre Logo">
            <h2>CONTACT :</h2>
        </div>
        <div class="infos-contact">
            <p>Email : <b>martialmertzig@outlook.com</b></p>
            <p>Téléphone : <b>06 56 74 16 40</b></p>
            <p>Mobilité : <b>Île-de-France</b></p>
        </div>
    </div>

    <!-- Centres d'intérêt -->
    <div class="dashboard-item-infos contact-form">
        <div class="titre-du-site">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-centre-interet.png'; ?>" alt="Votre Logo">
            <h2>UN PEU PLUS :</h2>
        </div>
        <div class="centres">
            <p><b>Passions :</b> Programmation • Art • Jeux Vidéo • Photographie ...</p>
            <p><b>Voyage :</b> Brésil • Portugal ...</p>
            <p><b>Cinéma :</b> SF • HF • Horreur ...</p>
            <p><b>Musique :</b> Pop • New Wave ...</p>
        </div>
    </div>

   <!-- Lien vers GitHub -->

<div class="dashboard-item contact-form">
    <div class="titre-du-site">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/icon-projet-github.png'; ?>" alt="Votre Logo">
        <h2>GITHUB :</h2>
    </div>
    <div class="centres">
        <p>
            <a href="https://github.com/MartialMertzig/Portfolio" target="_blank" rel="noopener noreferrer" style="font-family: 'IBMPlexSans', sans-serif; font-size: 15px; color: #0d1b1e; font-weight: 400; text-decoration: none;">
                Les archives de mon portfolio.
            </a>
        </p>
    </div>
</div>

</div>
    <?php get_footer(); ?>
</body>
</html>