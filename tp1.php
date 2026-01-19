<!DOCTYPE html>
<html>
<head>
    <title>Gestion des étudiants</title>
</head>
<body>

<?php

$module = "projet management";
$enseignant = "Mme asmae";
$nb_etudiants = 5;
$note_validation = 10;

echo "<h2>Informations du module</h2>";
echo "Module : $module<br>";
echo "Enseignant : $enseignant<br>";
echo "Nombre total d'étudiants : $nb_etudiants<br>";
echo "Note minimale de validation : $note_validation<br><br>";

$etudiants = ["Hadil", "Yassine", "Sara", "Omar", "Lina"];
$notes = [14, 9, 12, 8, 16];


$etudiants[] = "Nour";
$notes[] = 11;

echo "<h2>Liste des étudiants (avant suppression)</h2>";
for ($i = 0; $i < count($etudiants); $i++) {
    echo ($i+1) . ". " . $etudiants[$i] . " - Note : " . $notes[$i] . "<br>";
}

$index = array_search("Omar", $etudiants);
if ($index !== false) {
    unset($etudiants[$index]);
    unset($notes[$index]);

    $etudiants = array_values($etudiants);
    $notes = array_values($notes);
}

echo "<h2>Liste des étudiants (après suppression)</h2>";
for ($i = 0; $i < count($etudiants); $i++) {
    echo ($i+1) . ". " . $etudiants[$i] . " - Note : " . $notes[$i] . "<br>";
    
}
function calculerMoyenne($notes) { 
    return array_sum($notes) / count($notes); } 
function estValide($note, $seuil) {
         return $note >= $seuil; }
function messageNote($note) {
     if ($note >= 16) return "Excellent !";
     elseif ($note >= 12) return "Bien joué."; elseif ($note >= 10) return "Passable."; else return "Échec."; }
$moyenne = calculerMoyenne($notes); 
$max = max($notes); 
$min = min($notes); 
echo "<h2>Statistiques</h2>"; 
echo "Moyenne de la classe : $moyenne<br>";
echo "Note maximale : $max<br>"; 
echo "Note minimale : $min<br><br>";
$valide_count = 0; $non_valide_count = 0;
for ($i = 0; $i < count($etudiants); $i++) { 
    $num = $i + 1; $nom = $etudiants[$i]; 
    $note = $notes[$i]; 
    $valide = estValide($note, $note_validation);
     $message = messageNote($note);
      echo "$num. $nom - Note : $note - " . ($valide ? "Validé" : "Non validé") . " - $message<br>";
       if ($valide) $valide_count++; else $non_valide_count++; } 
 echo "<br><strong>Étudiants validés :</strong> $valide_count<br>"; 
echo "<strong>Étudiants non validés :</strong> $non_valide_count<br>";
?>

</body>
</html>
