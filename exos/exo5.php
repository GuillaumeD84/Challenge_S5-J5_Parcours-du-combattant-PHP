<?php
require_once '../inc/functions.php';

/*
 * Exo 5 : Mamie reçoit les p’tits enfants
 *
 * Et mer…    …credi.
 * Mes p’tits enfants viennent me visiter ce week-end.
 *
 * Non non, que ce soit clair, je les aime bien. Simplement j'en ai 14.
 * Donc bon. Rien qu'à leur dire bonjour, je suis fatiguée.
 *
 * Eeeeh, tu pourrais m'être utile !
 * Peux-tu me faire une fonction qui renvoie une string du type :
 *   'Bonjour Elisa, comment tu vas ?'
 *   'Bonjour Théo, comment tu vas ?'
 *   etc.
 *
 * Aaaah, tu ne connais pas les 14 prénoms ?
 * Bon, fais-moi une fonction qui écoute le paramètre 'name' en URL,
 * ça sera très bien…
 *
 *
 * Par exemple :
 *   Pour l'URL `exo5.php?name=Zelda`
 *
 * hello() doit renvoyer :
 *   'Bonjour Zelda, comment tu vas ?'
 */

function hello() {
  return ('Bonjour '.$_GET['name'].', comment tu vas ?');
}




/*
 * Tests
 * Pas touche !
 */
displayExo(5, hello() === 'Bonjour Elisa, comment tu vas ?');
