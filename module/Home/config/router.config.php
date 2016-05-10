<?php

return array(
    'routes' => array(
        'home' => array(
            'type' => 'Zend\Mvc\Router\Http\Literal',
            'options' => array(
                'route'    => '/',
                'defaults' => array(
                    'controller' => 'Home\Controller\Home',
                    'action'     => 'exibir',
                ),
            ),
        ),
    ),
);
