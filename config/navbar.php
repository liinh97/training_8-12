<?php

    /** 
     * Properties
     * 
     * item => [
     *      home => [
     *          item_title => HOME
     *          item_url => #
     *          item_disable => false
     *          item_dropdown => true / false => not have item_drop-item
     *          item_drop-item = [
     *              action => [
     *                  dropdown_title => Action
     *                  dropdown_url => #
     *              ]
     *          ]
     *      ]
     * ]
     * form => [
     *      input => [
     *          form_title => Search
     *          form_input => true / flase => type button
     *      ]
     *      button => [
     *          form_title => Search
     *          form_input => false
     *      ]
     * ]
     * 
     * bg-color => navbar-dark bg-dark
     * brand => Your Brand
    */
    
    return [
        'item' => [
            'home' => [
                'item_title' => 'Home',
                'item_url' => '#',
                'item_disable' => false,
                'item_dropdown' => false,
            ],
            'link' => [
                'item_title' => 'Link',
                'item_url' => '#',
                'item_disable' => false,
                'item_dropdown' => false,
            ],
            'dropdown' => [
                'item_title' => 'Dropdown',
                'item_url' => '#',
                'item_disable' => false,
                'item_dropdown' => true,
                'item_drop-item' => [
                    'action' => [
                        'dropdown_title' => 'Action',
                        'dropdown_url' => '#',
                    ],
                    'another_action' => [
                        'dropdown_title' => 'Another Action',
                        'dropdown_url' => '#',
                    ],
                    'else' => [
                        'dropdown_title' => 'Something else here',
                        'dropdown_url' => '#',
                    ]
                ]
            ],
            'disable' => [
                'item_title' => 'Disable',
                'item_url' => '#',
                'item_disable' => true,
                'item_dropdown' => false,
            ]
        ],
        'form' => [
            'input' => [
                'form_title' => 'Search',
                'form_input' => true,
            ],
            'button' => [
                'form_title' => 'Search',
                'form_input' => false,
            ]
        ],
        'bg-color' => 'navbar-dark bg-dark',
        'brand' => 'MyNavBar'
    ];
    
?>