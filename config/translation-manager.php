<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Available Application Locales
    |--------------------------------------------------------------------------
    |
    | The available application locales that can be used.
    | For flag codes, please refer to https://flagicons.lipis.dev/ (e.g. nl for Netherlands).
    |
    */

    'available_locales' => [
        ['code' => 'en', 'name' => 'English', 'flag' => 'gb'],
        // ['code' => 'nl', 'name' => 'Nederlands', 'flag' => 'nl'] ,
    ],

    /*
    |--------------------------------------------------------------------------
    | Disable key and group editing
    |--------------------------------------------------------------------------
    |
    | Whether editing the key and group values is disabled. By default, this is true
    | because these values are automatically added by the synchronization process.
    |
    */

    'disable_key_and_group_editing' => true,

    /*
    |--------------------------------------------------------------------------
    | Language Switcher
    |--------------------------------------------------------------------------
    |
    | Enable the language switcher feature in the Filament top bar.
    |
    */

    'language_switcher' => true,

    /*
    |--------------------------------------------------------------------------
    | Navigation Group
    |--------------------------------------------------------------------------
    |
    | The navigation group the translation manager is shown in, for example: 'Admin'.
    |
    */

    'navigation_group' => null,

    /*
    |--------------------------------------------------------------------------
    | Hide groups
    |--------------------------------------------------------------------------
    |
    | You can  choose to hide certain groups from the translation manager.
    |
    */

    'hide_groups' => [ ],

    /*
    |--------------------------------------------------------------------------
    | Remove unused translations
    |--------------------------------------------------------------------------
    |
    | You can choose to remove unused translations on the fly.
    |
    */

    'remove_unused' => true,

];
