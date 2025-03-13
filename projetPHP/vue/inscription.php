<?php
// Données pour les médicaments (simulées, à remplacer par une API REST)
$medicaments = [
    [
        "id" => 1,
        "nom" => "Paracétamol 500mg",
        "effets_therapeutiques" => "Soulage la douleur et réduit la fièvre.",
        "effets_secondaires" => "Nausées, maux d'estomac.",
        "interactions" => "Éviter avec l'alcool."
    ],
    [
        "id" => 2,
        "nom" => "Ibuprofène 400mg",
        "effets_therapeutiques" => "Anti-inflammatoire, antidouleur.",
        "effets_secondaires" => "Brûlures d'estomac, vertiges.",
        "interactions" => "Ne pas associer avec d'autres anti-inflammatoires."
    ],
    [
        "id" => 3,
        "nom" => "Amoxicilline 500mg",
        "effets_therapeutiques" => "Antibiotique pour infections bactériennes.",
        "effets_secondaires" => "Diarrhée, éruptions cutanées.",
        "interactions" => "Éviter avec les anticoagulants."
    ],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
   <script src="script.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Médicaments - Laboratoire GSB</title>
  <style>
    /* Variables de couleur et typographie */
    :root {
      --primary-color: #1272ea;
      --font-title: 'Poppins', sans-serif;
      --font-text: 'Inter', sans-serif;
    }

    /* Reset CSS */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: var(--font-text);
      line-height: 1.6;
      color: #333;
      background-color: #fff;
      display: flex;
    }

    /* Barre de navigation à gauche */
    .navbar {
      width: 250px;
      background-color: var(--primary-color);
      color: #fff;
      padding: 1rem;
      height: 100vh;
      position: fixed;
    }

    .navbar .logo {
      font-family: var(--font-title);
      font-size: 1.5rem;
      margin-bottom: 2rem;
    }

    .nav-links {
      list-style: none;
    }

    .nav-links li {
      margin-bottom: 1rem;
    }

    .nav-links a {
      color: #fff;
      text-decoration: none;
      font-family: var(--font-text);
      font-size: 1.1rem;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    /* Contenu principal à droite */
    .content {
      margin-left: 250px;
      padding: 2rem;
      width: calc(100% - 250px);
    }

    .section {
      display: none; /* Masquer toutes les sections par défaut */
    }

    .section.active {
      display: block; /* Afficher la section active */
    }

    /* Tableau des médicaments */
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1rem;
    }

    table th, table td {
      padding: 0.75rem;
      text-align: left;
      border: 1px solid #ddd;
    }

    table th {
      background-color: var(--primary-color);
      color: #fff;
    }

    table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .navbar {
        width: 100%;
        height: auto;
        position: relative;
      }

      .content {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Inter&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Barre de navigation à gauche -->
  <nav class="navbar">
    <div class="logo">GSB Lab</div>
    <ul class="nav-links">
      <li><a href="#accueil" class="nav-link">Accueil</a></li>
      <li><a href="#medicament" class="nav-link active">Médicaments</a></li>
      <li><a href="#activite" class="nav-link">Activités</a></li>
      <li><a href="#inscription" class="nav-link">Inscription</a></li>
      <li><a href="#utilisateur" class="nav-link">Utilisateurs</a></li>
    </ul>
  </nav>

  <!-- Contenu principal à droite -->
  <div class="content">
    <!-- Section Médicaments -->
    <section id="medicament" class="section active">
      <h2>Médicaments</h2>
      <p>Découvrez nos médicaments et leurs informations détaillées.</p>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Effets thérapeutiques</th>
            <th>Effets secondaires</th>
            <th>Interactions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($medicaments as $medicament): ?>
            <tr>
              <td><?php echo htmlspecialchars($medicament['nom']); ?></td>
              <td><?php echo htmlspecialchars($medicament['effets_therapeutiques']); ?></td>
              <td><?php echo htmlspecialchars($medicament['effets_secondaires']); ?></td>
              <td><?php echo htmlspecialchars($medicament['interactions']); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </div>

  <script>
    // Gestion de la navigation
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();

        // Retirer la classe active de tous les liens et sections
        navLinks.forEach(link => link.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));

        // Ajouter la classe active au lien cliqué et à la section correspondante
        link.classList.add('active');
        const target = link.getAttribute('href');
        document.querySelector(target).classList.add('active');
      });
    });
  </script>
</body>
</html>