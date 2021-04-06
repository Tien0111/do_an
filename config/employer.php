<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 3/14/21 .
 * Time: 10:51 PM .
 */


return [
    'sidebar' => [
        [
            'title' => 'Thông tin công ty',
            'icon' => 'la la-file-text',
            'route' => 'get_employer.company.index'
        ],
        [
            'title' => 'Danh sách job',
            'icon' => 'la la-briefcase',
            'route' => 'get_employer.job.index'
        ],
        [
            'title' => 'Ứng tuyển',
            'icon' => 'la la-money',
            'route' => 'get_employer.apply_job.index'
        ],
        [
            'title' => 'Cập nhật mật khẩu',
            'icon' => 'la la-lock',
            'route' => ''
        ],
        [
            'title' => 'Đăng xuất',
            'icon' => 'la la-unlink',
            'route' => ''
        ],
    ]
];
