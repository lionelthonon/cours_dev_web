<?php
/* --- routes --- */

/*
 * default
 * Affiche tous les posts
 */
$routes['default'] = 'index/posts';

/*
 * view
 * Affiche un post
 */
$routes['view'] = 'view/posts';

/*
 * add
 * Ajoute un post via le formulaire
 */
$routes['add'] = 'add/posts';

/*
 * delete
 * Supprime un post
 */
$routes['delete'] = 'delete/posts';

/*
 * update
 * Modifie un article
 */
$routes['update'] = 'update/posts';

/*
 * valideUpdate
 * Modifie un article
 */
$routes['validUpdate'] = 'validUpdate/posts';