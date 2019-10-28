<?php

$admin = '_superadmin';

$permissions = [
    'categories' => [
        'all' => '_category-editor',
        'list' => '_category-list',
        'edit' => '_category-edit',
        'delete' => '_category-delete',
        'add' => '_category-add',
        'external' => '_external',
    ]
];

return [
    /*
    |--------------------------------------------------------------------------
    | Admin panel menu items
    |--------------------------------------------------------------------------
    |
    | Here you can edit the items to show in the admin menu(on top of the page)
    |
    */
    "list" => [


            //Dashboard page
            [
                "name"        => "acl-admin.menu.dashboard",
                "route"       => "dashboard",
                "link"        => '/admin/users/dashboard',
                "permissions" => [$admin]
            ],

            /*
            |-----------------------------------------------------------------------
            | Admin permissions
            |-----------------------------------------------------------------------
            | 1. Users page
            | 2. Groups page
            | 3. Permissions page
            | 4. Categories
            |
            */


            //Users page
            [
                "name"        => "acl-admin.menu.users",
                "route"       => "users",
                "link"        => '/admin/users/list',
                "permissions" => [$admin, '_user-editor', '_user-leader'],
                "skip_permissions" => ["users.selfprofile.edit", "users.profile.edit", "users.profile.addfield", "users.profile.deletefield"]
            ],


            //Groups page
            [
                "name"        => "acl-admin.menu.groups",
                "route"       => "groups",
                "link"        => '/admin/groups/list',
                "permissions" => [$admin, "_group-editor"]
            ],

            [
                "name"        => "acl-admin.menu.groups",
                "route"       => "groups",
                "link"        => '/admin/groups/list',
                "permissions" => ['_student']
            ],

            //Permissions page
            [
                "name"        => "acl-admin.menu.permissions",
                "route"       => "permissions",
                "link"        => '/admin/permissions/list',
                "permissions" => [$admin, "_permission-editor"]
            ],


            // //Contexts - Subject
            // [
            //     'name'        => 'category-admin.menus.top-menu-contexts',
            //     // 'name'        => "Subjects",
            //     "route"       => "contexts",
            //     "link"        => '/admin/contexts/list',
            //     "permissions" => [$admin]
            // ],

            // //Categories - Learning Class
            // [
            //     'name'        => 'category-admin.menus.category',
            //     // 'name'        => 'Learning Classes',
            //     "route"       => "categories",
            //     "link"        => '/admin/categories/list',
            //     "permissions" => [$admin, '_user-editor']
            // ],

            // [
            //     'name'        => 'category-admin.menus.category',
            //     // 'name'        => 'Learning Classes',
            //     "route"       => "categories",
            //     "link"        => '/admin/categories/list',
            //     "permissions" => [$admin, '_user-editor']
            // ],
            
            // [
            //     'name'        => 'Projects',
            //     "route"       => "categories",
            //     "link"        => '/admin/categories/list',
            //     "permissions" => [$admin, '_user-editor']
            // ],

            // [
            //     'name'        => 'Teachers',
            //     "route"       => "categories",
            //     "link"        => '/admin/categories/list',
            //     "permissions" => [$admin, '_user-editor']
            // ],

            // [
            //     'name'        => 'Students',
            //     "route"       => "categories",
            //     "link"        => '/admin/categories/list',
            //     "permissions" => [$admin, '_user-editor']
            // ],
            // //Posts
            // [
            //     "name"        => 'post-admin.menus.top-menu',
            //     "route"       => "posts",
            //     "link"        => '/admin/posts',
            //     "permissions" => [$admin, "_rule"]
            // ],
            // //Slideshow
            // [
            //     "name"        => 'slideshow-admin.menus.top-menu',
            //     "route"       => "slideshows",
            //     "link"        => '/admin/slideshows',
            //     "permissions" => [$admin]
            // ],
            // //Checklist
            // [
            //     "name"        => 'checklist-admin.menus.top-menu',
            //     "route"       => "checklists",
            //     "link"        => '/admin/checklists',
            //     "permissions" => []
            // ],
    ]
];