<?php
// Données pour les activités du laboratoire GSB
$activites = [
    ["Activité 1", "Recherche sur les vaccins", "2023-01-15"],
    ["Activité 2", "Développement de médicaments", "2023-03-22"],
    ["Activité 3", "Essais cliniques", "2023-05-10"],
];

$title = "Activités - GSB Lab";
include 'header.php';
?>

<main>
  <h2>Activités</h2>
  <p>Découvrez les activités récentes de GSB Lab.</p>
  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($activites as $activite): ?>
        <tr>
          <td><?php echo $activite[0]; ?></td>
          <td><?php echo $activite[1]; ?></td>
          <td><?php echo $activite[2]; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>

<?php include 'footer.php'; ?>
<script src="script.js"></script>