<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <section class="projects">

        <h2>My Projects</h2>

        <div class="projects-container">

            <?php foreach ($projets as $projet): ?>

                <article class="project-card">

                    <img src="<?= $projet['image'] ?>"
                         alt="<?= $projet['titre'] ?>">

                    <div class="project-info">

                        <p class="project-category">
                            <?= $projet['categorie'] ?>
                        </p>

                        <h3><?= $projet['titre'] ?></h3>

                        <p><?= $projet['description'] ?></p>

                        <?php if ($projet['featured']): ?>
                            <p>Featured Project</p>
                        <?php endif; ?>

                        <a href="<?= $projet['lien'] ?>"
                           class="project-button">
                            View Project
                        </a>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </section>

</body>
</html>