<?php
require_once '../inc/functions.php';

/*
 * Exo 1 : Mamie à la plage.
 *
 * Bah ouais, c'est pas parce qu'on n'arrive plus trop à coder
 * qu'on peut pas encore se dorer tranquillement la pilule
 * et faire trempette de temps en temps.
 *
 * Bref.
 *
 * A chaque saison, j'ai besoin d'aller faire un peu de shopping.
 * Pas question d'être has been en m'habillant pareil chaque été !
 *
 * Il me faut 4 articles :
 *  - 1 maillot de bain
 *  - 1 paire de lunettes
 *  - 2 bouteilles de crème solaire
 *
 * J'aimerais une fonction qui prend 3 paramètres :
 *  - le prix d'un maillot
 *  - le prix d'une paire de lunettes
 *  - le prix d'une bouteille de crème solaire
 *
 * et qui me retourne le prix total pour l'achat de mes 4 articles.
 *
 *
 * Par exemple :
 *      calculPlage(1, 2, 3) doit renvoyer 9
 */

function calculPlage($swimsuitPrice, $glassesPrice, $sunscreenPrice) {

  $totalPrice = $swimsuitPrice + $glassesPrice + $sunscreenPrice * 2;

  return $totalPrice;
}







/*
 * Tests
 * Pas touche !
 */
displayExo(1, (
    calculPlage(10, 10, 10) === 40
    && calculPlage(1, 2, 3) === 9
    && calculPlage(27.90, 59.00, 6.50) === 99.90
));
