<?php
return array (
  'router' => 
  array (
    'routes' => 
    array (
      'home' => 
      array (
        'type' => 'Zend\\Mvc\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\Index',
            'action' => 'index',
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/application',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Application\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'form' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/form',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Form\\Controller',
            'controller' => 'Index',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
      'table' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/table',
          'defaults' => 
          array (
            '__NAMESPACE__' => 'Table\\Controller',
            'controller' => 'Table',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'default' => 
          array (
            'type' => 'Segment',
            'options' => 
            array (
              'route' => '/[:controller[/:action]]',
              'constraints' => 
              array (
                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'service_manager' => 
  array (
    'factories' => 
    array (
      'translator' => 'Zend\\I18n\\Translator\\TranslatorServiceFactory',
    ),
  ),
  'translator' => 
  array (
    'locale' => 'en_US',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'gettext',
        'base_dir' => 'C:\\xampp\\htdocs\\FatBoy\\module\\Application\\config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'controllers' => 
  array (
    'invokables' => 
    array (
      'Application\\Controller\\Index' => 'Application\\Controller\\IndexController',
      'Form\\Controller\\Index' => 'Form\\Controller\\IndexController',
      'Table\\Controller\\Table' => 'Table\\Controller\\TableController',
    ),
  ),
  'view_manager' => 
  array (
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_map' => 
    array (
      'layout/layout' => 'C:\\xampp\\htdocs\\FatBoy\\module\\Application\\config/../view/layout/layout.phtml',
      'application/index/index' => 'C:\\xampp\\htdocs\\FatBoy\\module\\Application\\config/../view/application/index/index.phtml',
      'error/404' => 'C:\\xampp\\htdocs\\FatBoy\\module\\Table\\config/../view/error/404.phtml',
      'error/index' => 'C:\\xampp\\htdocs\\FatBoy\\module\\Table\\config/../view/error/index.phtml',
      'form/index/index' => 'C:\\xampp\\htdocs\\FatBoy\\module\\Form\\config/../view/form/index/index.phtml',
    ),
    'template_path_stack' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FatBoy\\module\\Application\\config/../view',
      1 => 'C:\\xampp\\htdocs\\FatBoy\\module\\Form\\config/../view',
      2 => 'C:\\xampp\\htdocs\\FatBoy\\module\\Table\\config/../view',
    ),
  ),
  'module_listener_options' => 
  array (
    'config_cache_key' => 'Form',
    'module_map_cache_key' => 'Form',
  ),
);