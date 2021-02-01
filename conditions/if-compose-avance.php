<?php
/*****************************************/
/********** Conditions Avancées *********/
/*****************************************/
echo "CONDITIONS COMPOSEES AVANCEES <br><br><br>";

$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

echo "1.Est ce que c'est mon chat ? ";
echo "<br>";
echo "Mon chat est vivant, de couleur blanc et a les yeux Vert";
echo "<br>";
if($animal == "Chat" && $vivant && $couleur = "Blanc" && $yeux = "Vert"){
  echo "Oui";
}else{
  echo "Non";
}
echo "<br><br>";

//----------------------------------------
/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "1.Est-ce que c'est un animal fait l'affaire ? ";
echo "<br>";
echo "Je veux un chien ou chat couleur marron avec des yeux verts ";
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Marron";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if( $animal === ("Chat" || "Chien") && $couleur === "Marron" && $yeux === "Vert" ){
  echo 'Oui';
}
else {
  echo 'Non';
}
echo "<br><br>";


// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "2.Est ce que c'est un de mes chat ? ";
echo "<br>";
echo "Un de mes chat est vivant, a des yeux verts et est de couleur marron. 
Et l'autre est aussi vivant, de couleur Blanc et des yeux verts  ";
echo "<br>";
//n'hésitez pas à changer les valeurs pour tester si ça fonctionne
$animal = "Chat";
$vivant = true;
$couleur = "Blanc";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if( $animal === "Chat" && $vivant === true && (($yeux ==="Vert" && $couleur==="Marron") || ( $couleur==="Blanc" && $yeux ==="Vert" ) ) ){
  echo 'Oui';
}
else {
  echo 'Non';
}
echo "<br><br>";

//----------------------------------------
// Écrivez le test qui vérifie la question suivante : (utilisez un seul if)
echo "3.Est ce que c'est un de mes animaux ? ";
echo "<br>";
echo "J'avais un chien de couleur noir avec des yeux bleus. 
J'ai un chat de couleur orange et des yeux bleus et 
un chien de couleur marron et des yeux bleus ";
echo "<br>";

$animal = "Chien";
$vivant = false;
$couleur = "Noir";
$yeux = "Vert";

/** remplacer le chiffre 0 par les bonnes conditions **/
if( (($animal === "Chien" && $couleur === ("Noir"||"Marron")) ||
        ($animal === "Chat" && $couleur === "Orange") )
    && $yeux === "Bleus" ){
  echo 'Oui';
}
else {
  echo 'Non';
}
echo "<br><br>";
//----------------------------------------
