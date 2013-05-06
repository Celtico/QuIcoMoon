<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */
return array(


    'controllers' => array(
        'invokables' => array(
            'qu_ico_moon_controller' => 'QuIcoMoon\Controller\QuIcoMoonController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

    'router' => array(
        'routes' => array(
            'qu_ico_moon_route' => array(
                'type'    => 'segment',
                'options' => array(
                    'route' => '[/:lang]/icomoon[/:action][/:id][/:id_parent]',
                    'constraints' => array(
                        'lang'      => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'        => '[0-9]+',
                        'id_parent' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'lang'          => 'es',
                        'controller'    => 'qu_ico_moon_controller',
                        'action'        => 'index',
                    ),
                ),
            ),
        ),
    ),
    /**
     *
     *
     * QuAdmin Navigation
     *
     *
     */
    'navigation' => array(

        'qu_admin_navigation' => array(
            'system' => array(
                'pages' => array(

                    'qu_ico_moon' => array(
                        'order' =>5,
                        'icon'   =>'&#xe054;',
                        'label' => 'IcoMoon',
                        'route' => 'system_route/qu_ico_moon_route',
                    ),

                ),
            ),
        ),
    ),


    /**
     *
     *
     * QuAdmin Strategy
     *
     *
     */
    'QuAdminConfig' => array(
        // NAMESPACE Layout Module
        'QuLayout' => array(
            'QuIcoMoon' => 'qu-admin/layout/qu-admin-layout'
        ),

        // NAMESPACE Base Path Module
        'QuBasePath' => array(
            'QuIcoMoon' => '/qu-admin'
        ),

        // NAMESPACE Redirect login
        'QuRedirectLogin' => array(
            'QuIcoMoon' => true
        ),
    ),

);