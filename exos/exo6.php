<?php
require_once '../inc/functions.php';

/*
 * Exo 6 : Mamie reçoit les p’tits enfants
 *
 * Bon, tant qu'on y est, ça serait bien aussi de calculer leur âge.
 * J'ai toujours eu la bonne mémoire des dates, je connais leur
 * date de naissance par coeur.
 *
 * Seulement, pour calculer leur âge à partir de leur date de naissance,
 * saperlipopette !
 *
 * Si je te rajoute un paramètre `birth` à l'URL, tu crois que tu pourrais
 * aussi me rajouter l'âge ? Je te passe la date sous la forme DD-MM-YYYY.
 * Par exemple :
 *   `exo5.php?name=Zelda&birth=18-05-2003`
 *
 * Ensuite, il te "suffirait" qu'à récupérer, découper, puis comparer…
 *   http://php.net/manual/fr/function.explode.php
 *   http://php.net/manual/fr/function.date.php
 *
 *
 * Allez, bon courage… (mouhahaha)
 */

function hello() {
  // On divise le 'string' $_GET['birth'] en plusieurs parties que l'on stocke dans un tableau grâce à la fonction 'explode()'
  $birthDate = explode('-', $_GET['birth']);

  // On créé la date d'aujourd'hui
  $todayDate = date('U');

  // On créé la date récupérée de $_GET['birth']
  $birthDateInSeconds = mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2]);

  // On compare les deux dates et on calcul l'âge en conséquence.
  // date('md', $timestamp) retourne un nombre représentant le jour et le mois contenu dans $timestamp
  if (date('md', $birthDateInSeconds) >= date('md', $todayDate)) {
    $age = date('Y') - $birthDate[2] - 1;
  }
  else {
    $age = date('Y') - $birthDate[2];
  }

  // print_r(date('Y').' '.$birthDate[2]);
  // echo '<br>';
  // print_r(date('md', $birthDateInSeconds).' '.date('md', $todayDate));
  // echo '<br>';
  // print_r($_GET['name'].' '.$age);

  return 'Bonjour '.$_GET['name'].', comment tu vas ? Tu as '.$age.' ans maintenant !';
}




/*
 * Tests
 * Pas touche !
 */
displayExo(6, (
    hello() === 'Bonjour Elisa, comment tu vas ? Tu as 15 ans maintenant !'
));
