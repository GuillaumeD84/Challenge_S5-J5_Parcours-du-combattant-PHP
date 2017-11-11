<?php
require_once '../inc/functions.php';

/*
 * Exo 3 : Mamie joue au loto
 *
 * Super ça, une fonction pour calculer combien ça me coûte d'aller à la plage !
 * Seul hic, j'ai fait le compte, et je n'ai pas assez. Du coup, je vais
 * jouer au loto pour me refaire, il parait que c'est pas une arnaque du tout.
 *
 * Alors, voyons voir.
 * Il faut choisir des numéros entre 1 et 49. OK…
 *
 * Dis-moi, je ne sais jamais quoi choisir, tu peux me créer une fonction
 * qui me choisit un entier entre 1 et 49 ?
 *
 *
 * Par exemple :
 *   numeroLoto() peut renvoyer 43
 *
 *
 * Merci mon sucre d'orge.
 * Tiens, un cadeau : http://php.net/manual/fr/function.mt-rand.php
 */

function numeroLoto() {
  return mt_rand(1, 49);
}






/*
 * Tests
 * Pas touche !
 */
displayExo(3, (
    is_int(numeroLoto())
    && numeroLoto() <= 49
    && numeroLoto() <= 49
    && numeroLoto() <= 49
    && numeroLoto() >= 1
    && numeroLoto() >= 1
    && numeroLoto() >= 1
));
