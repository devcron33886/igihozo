<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Category',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Product',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'slug'               => 'Slug',
            'slug_helper'        => ' ',
            'image'              => 'Image',
            'image_helper'       => ' ',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'size'               => 'Size',
            'size_helper'        => ' ',
            'stock'              => 'In Stock quantity',
            'stock_helper'       => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'color'              => 'Color',
            'color_helper'       => ' ',
        ],
    ],
    'paymentMethod' => [
        'title'          => 'Payment Method',
        'title_singular' => 'Payment Method',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'status'            => 'Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'shippingType' => [
        'title'          => 'Shipping Type',
        'title_singular' => 'Shipping Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Shipping Title',
            'title_helper'      => ' ',
            'price'             => 'Shipping Price',
            'price_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Setting',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'email'                  => 'Email',
            'email_helper'           => ' ',
            'mobile'                 => 'Mobile',
            'mobile_helper'          => ' ',
            'whatsapp_number'        => 'Whatsapp Number',
            'whatsapp_number_helper' => ' ',
            'location'               => 'Location',
            'location_helper'        => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'message' => [
        'title'          => 'Message',
        'title_singular' => 'Message',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Order',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'order_no'                => 'Order No',
            'order_no_helper'         => ' ',
            'client_name'             => 'Client Name',
            'client_name_helper'      => ' ',
            'client_phone'            => 'Client Phone',
            'client_phone_helper'     => ' ',
            'email'                   => 'Email',
            'email_helper'            => ' ',
            'status'                  => 'Status',
            'status_helper'           => ' ',
            'shipping_address'        => 'Shipping Address',
            'shipping_address_helper' => ' ',
            'notes'                   => 'Notes',
            'notes_helper'            => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'payment'                 => 'Payment Mode',
            'payment_helper'          => ' ',
            'shipping'                => 'Delivery Method',
            'shipping_helper'         => ' ',
            'total'                   => 'Total Amount',
            'total_helper'            => ' ',
            'updatedby'               => 'Updatedby',
            'updatedby_helper'        => ' ',
        ],
    ],
];
