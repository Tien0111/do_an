<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 3/17/21 .
 * Time: 12:24 AM .
 */

return [
    [
        'name' => 'Tổng quan',
        'icon' => 'account_balance',
        'route' => 'get_admin.index'
    ],
    [
        'name' => 'Ngành nghề',
        'icon' => 'vertical_split',
        'route' => 'get_admin.career.index'
    ],
    [
        'name' => 'Thuộc tính',
        'icon' => 'sync_alt',
        'route' => 'get_admin.attribute.index'
    ],
    [
        'name' => 'Jobs',
        'icon' => 'turned_in_not',
        'route' => 'get_admin.job.index'
    ],
];
