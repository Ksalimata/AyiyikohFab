<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ── Page d'accueil ──
$routes->get('/', 'Home::index');

// ── Formulaire contact ──
$routes->post('contact/send', 'Contact::send');

// ── Futures routes (à décommenter au besoin) ──
// $routes->get('formations',  'Formations::index');
// $routes->get('projets',     'Projets::index');
// $routes->get('adhesion',    'Adhesion::index');
// $routes->get('entreprises', 'Entreprises::index');
