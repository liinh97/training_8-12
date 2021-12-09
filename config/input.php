<?php

    /**
     * Properties
     * 
     * item => [
     *      name => [
     *          title => Name
     *          lable => true
     *          type => input
     *          select => false
     *          select = true => select_item => [
     *              home => Home
     *          ]
     *          placeholder => input your placeholder / ''
     *      ]
     * ]
     * 
     */

    return [
        'item' => [
            'username' => [
                'title' => 'Username',
                'label' => true,
                'type' => 'text',
                'select' => false,
                'placeholder' => 'Input your name',
            ],
            'password' => [
                'title' => 'Password',
                'label' => true,
                'type' => 'text',
                'select' => false,
                'placeholder' => 'Input your password',
            ]
        ],
    ];

?>