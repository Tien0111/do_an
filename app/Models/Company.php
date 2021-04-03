<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public $scale = [
        1 => 'Dưới 10 người',
        2 => '10 - 25 người',
        3 => '25 - 50 người',
        4 => '50 - 100 người',
        5 => '100 - 200 người',
        6 => '200 - 500 người',
        7 => 'Trên người',
    ];

    public $working_time = [
        1 => 'Thứ 2 - đến thứ 6',
        2 => 'Thứ 2 - đến thứ sáng thứ 7',
        3 => 'Thứ 2 - đến hết thứ 7',
        4 => 'Cả tuần',
        5 => 'Tự do',
        6 => 'Khác',
    ];

    public function careers()
    {
        return $this->belongsToMany(Career::class,'company_careers','cc_company_id','cc_careers_id');
    }

}
