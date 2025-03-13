<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médicaments - GSB Lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-main">
        <!-- Barre de navigation -->
        <div class="navbar">
            <div class="logo">GSB Lab</div>
            <ul class="nav-links">
                <li><a href="accueil.html">Accueil</a></li>
                <li><a href="medicament.html">Médicaments</a></li>
                <li><a href="activites.html">Activités Complémentaires</a></li>
                <li><a href="mentions.html">Mentions Légales</a></li>
            </ul>
        </div>

        <!-- Contenu principal -->
        <div class="content">
            <div class="hero">
                <h1>Médicaments</h1>
                <p>Découvrez nos médicaments et leurs informations détaillées.</p>
            </div>

            <div class="about">
                <?php
                $medicaments = [
                    [
                        "nom" => "Paracétamol 500mg",
                        "effets_therapeutiques" => "Soulage la douleur et réduit la fièvre.",
                        "effets_secondaires" => "Nausées, maux d'estomac.",
                        "interactions" => "Éviter avec l'alcool."
                    ],
                    [
                        "nom" => "Ibuprofène 400mg",
                        "effets_therapeutiques" => "Anti-inflammatoire, antidouleur.",
                        "effets_secondaires" => "Brûlures d'estomac, vertiges.",
                        "interactions" => "Ne pas associer avec d'autres anti-inflammatoires."
                    ],
                    [
                        "nom" => "Amoxicilline 500mg",
                        "effets_therapeutiques" => "Antibiotique pour infections bactériennes.",
                        "effets_secondaires" => "Diarrhée, éruptions cutanées.",
                        "interactions" => "Éviter avec les anticoagulants."
                    ],
                ];
                foreach ($medicaments as $medicament): ?>
                  <div class="medicament-card">
                    <h3><?php echo htmlspecialchars($medicament['nom']); ?></h3>
                    <p><strong>Effets thérapeutiques :</strong> <?php echo htmlspecialchars($medicament['effets_therapeutiques']); ?></p>
                    <p><strong>Effets secondaires :</strong> <?php echo htmlspecialchars($medicament['effets_secondaires']); ?></p>
                    <p><strong>Interactions :</strong> <?php echo htmlspecialchars($medicament['interactions']); ?></p>
                  </div>
                <?php endforeach; ?>
            </div>

            <footer>
                &copy; 2025 GSB Lab - Tous droits réservés.
            </footer>
        </div>
    </div>
</body>
</html>
