<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 3/19/21 .
 * Time: 1:30 AM .
 */

return [
    'drop_menu' => [
        [
            'name' => 'Cập nhật công ty',
            'icon' => 'la la-file-text',
            'route' => 'get_employer.company.index'
        ]
    ],
    'sidebar' => [
        [
            'title' => 'Danh sách ứng tuyển',
            'icon' => 'la la-file-text',
            'route' => 'get_user.apply_job.index'
        ],
        [
            'title' => 'Danh sách yêu thích',
            'icon' => 'la la-briefcase',
            'route' => 'get_user.job.favourite'
        ],
        [
            'title' => 'Cập nhật thông tin',
            'icon' => 'la la-user',
            'route' => 'get_user.user_info.index'
        ],
        [
            'title' => 'Cập nhật mật khẩu',
            'icon' => 'la la-lock',
            'route' => 'get_user.update_password.index'
        ],
        [
            'title' => 'Đăng xuất',
            'icon' => 'la la-unlink',
            'route' => 'get.logout'
        ],
    ]
];
