<?php
/**
 * Copyright 2010 - 2019, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2018, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/*
 * IMPORTANT:
 * This is an example configuration file. Copy this file into your config directory and edit to
 * setup your app permissions.
 *
 * This is a quick roles-permissions implementation
 * Rules are evaluated top-down, first matching rule will apply
 * Each line define
 *      [
 *          'role' => 'role' | ['roles'] | '*'
 *          'prefix' => 'Prefix' | , (default = null)
 *          'plugin' => 'Plugin' | , (default = null)
 *          'controller' => 'Controller' | ['Controllers'] | '*',
 *          'action' => 'action' | ['actions'] | '*',
 *          'allowed' => true | false | callback (default = true)
 *      ]
 * You could use '*' to match anything
 * 'allowed' will be considered true if not defined. It allows a callable to manage complex
 * permissions, like this
 * 'allowed' => function (array $user, $role, Request $request) {}
 *
 * Example, using allowed callable to define permissions only for the owner of the Posts to edit/delete
 *
 * (remember to add the 'uses' at the top of the permissions.php file for Hash, TableRegistry and Request
   [
        'role' => ['user'],
        'controller' => ['Posts'],
        'action' => ['edit', 'delete'],
        'allowed' => function(array $user, $role, Request $request) {
            $postId = Hash::get($request->params, 'pass.0');
            $post = TableRegistry::getTableLocator()->get('Posts')->get($postId);
            $userId = Hash::get($user, 'id');
            if (!empty($post->user_id) && !empty($userId)) {
                return $post->user_id === $userId;
            }
            return false;
        }
    ],
 */

$permissions = [
    [
        'plugin' => 'CakeDC/Users',
        'controller' => 'Users',
        'action' => [
            // LoginTrait
            'socialLogin',
            'login',
            'logout',
            'socialEmail',
            'verify',
            // RegisterTrait
            'register',
            'validateEmail',
            // PasswordManagementTrait used in RegisterTrait
            'changePassword',
            'resetPassword',
            'requestResetPassword',
            // UserValidationTrait used in PasswordManagementTrait
            'resendTokenValidation',
            'linkSocial',
        ],
        'bypassAuth' => true,
    ],
    [
        'role' => '*',
        'controller' => 'Pages',
        'action' => 'display',
        'bypassAuth' => true,
    ],
    [
        'role' => '*',
        'controller' => 'Changelogs',
        'action' => ['index', 'view'],
        'bypassAuth' => true,
    ],
    [
        'role' => '*',
        'prefix' => false,
        'controller' => 'Projects',
        'action' => ['index', 'view'],
        'bypassAuth' => true,
    ],
    [
        'role' => '*',
        'controller' => 'Writers',
        'action' => ['index'],
        'bypassAuth' => true,
    ],
    [
        'role' => '*',
        'controller' => 'Contacts',
        'action' => ['rapid', 'roadTrip'],
        'bypassAuth' => true,
    ],
    [
        'role' => 'user',
        'controller' => 'Dashboards',
        'action' => ['index'],
        'prefix' => 'admin',
    ],
    [
        'role' => 'user',
        'controller' => 'Projects',
        'action' => '*',
        'prefix' => 'admin',
    ],
    [
        'role' => '*',
        'plugin' => 'DebugKit',
        'controller' => '*',
        'action' => '*',
        'bypassAuth' => true,
    ],
    [
        'role' => '*',
        'controller' => ['_css', '_js'],
        'action' => '*',
        'bypassAuth' => true,
    ],
];

return ['CakeDC/Auth.permissions' => $permissions];
