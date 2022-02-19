<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/compte/adresses' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/compte/ajouter-une-adresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/mes-commandes' => [[['_route' => 'account_order', '_controller' => 'App\\Controller\\AccountOrderController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mon-mot-de-passe' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/term_of_use' => [[['_route' => 'use_term', '_controller' => 'App\\Controller\\AdministratifController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove_my_cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/nous-contacter' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'order_recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0], null, false, false, null]],
        '/nos-produits' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\ResetPasswordController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|om(?'
                        .'|pte/(?'
                            .'|m(?'
                                .'|odifier\\-une\\-adresse/([^/]++)(*:58)'
                                .'|es\\-commandes/([^/]++)(?'
                                    .'|(*:90)'
                                    .'|/download(*:106)'
                                .')'
                            .')'
                            .'|supprimer\\-une\\-adresse/([^/]++)(*:148)'
                        .')'
                        .'|mande/(?'
                            .'|erreur/([^/]++)(*:181)'
                            .'|merci/([^/]++)(*:203)'
                            .'|create\\-session/([^/]++)(*:235)'
                        .')'
                    .')'
                    .'|art/(?'
                        .'|add/([^/]++)(*:264)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:290)'
                            .'|crease/([^/]++)(*:313)'
                        .')'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:341)'
                .'|/modifier\\-mon\\-mot\\-de\\-passe/([^/]++)(*:388)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        58 => [[['_route' => 'account_address_edit', '_controller' => 'App\\Controller\\AccountAddressController::edit'], ['id'], null, null, false, true, null]],
        90 => [[['_route' => 'account_order_show', '_controller' => 'App\\Controller\\AccountOrderController::show'], ['reference'], null, null, false, true, null]],
        106 => [[['_route' => 'account_order_download', '_controller' => 'App\\Controller\\AccountOrderController::download'], ['reference'], null, null, false, false, null]],
        148 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        181 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        203 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderSuccessController::index'], ['stripeSessionId'], null, null, false, true, null]],
        235 => [[['_route' => 'stripe_create_session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        264 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        313 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null]],
        388 => [
            [['_route' => 'update_password', '_controller' => 'App\\Controller\\ResetPasswordController::update'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
