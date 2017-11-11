<?php
require_once '../inc/functions.php';

/*
 * Exo 2 : Mamie à la plage II
 *
 * Bon, je ne vous ai pas tout dit. J'ai la mémoire qui flanche.
 * Du coup, je ne me rappelle jamais si ma fonction `calculPlage`
 * (oui, c'est MA fonction, tu m'as juste aidé un peu, ça va...)
 * prend plusieurs paramètres ou prend un seul paramètre sous forme
 * d'array. Non parce que vous verrez, après 50 ans de dev, si vous
 * avez encore les variables en face des trous.
 *
 * Bref.
 *
 * J'aimerais bien que la fonction puisse prendre :
 *  - soit 3 paramètres : prix maillot, prix lunettes, prix crème
 *  - soit 1 paramètre : un array qui a la forme [prix maillot, prix lunettes, prix crème]
 *
 * Peu importe ce que je lui passe, la fonction saura me faire le calcul !
 *
 *
 * Par exemple :
 *      calculPlage(1, 2, 3) doit renvoyer 9
 *      calculPlage([1, 2, 3]) doit renvoyer 9
 *
 *
 * Une dernière chose, je m'étais noté un pense-bête, ça peut peut-être aider.
 * Attend que je le retrouve… Ah, voilà :
 * http://php.net/manual/fr/function.is-array.php
 */

function calculPlage() {

  // On se sert de la fonction func_get_args() qui retourne les arguments d'une fonction sous la forme d'un tableau
  $args = func_get_args();

  // On test si on a passé un tableau en argument, autrement dit si le tableau $args que l'on a obtenu grâce à la fonction func_get_args() contient un tableau dans son premier index
  if (is_array($args[0])) {
    $totalPrice = $args[0][0] + $args[0][1] + $args[0][2] * 2;
  }
  else {
    $totalPrice = $args[0] + $args[1] + $args[2] * 2;
  }

  return $totalPrice;
}










/*
 * Tests
 * Pas touche !
 */
displayExo(2, (
    calculPlage(10, 10, 10) === 40
    && calculPlage(1, 2, 3) === 9
    && calculPlage(27.90, 59.00, 6.50) === 99.90
    && calculPlage([10, 10, 10]) === 40
    && calculPlage([1, 2, 3]) === 9
    && calculPlage([27.90, 59.00, 6.50]) === 99.90
));
