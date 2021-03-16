<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'attributes';
    protected $guarded = [''];

    const TYPE_EXPERIENCE   = 1; // kinh nghiem
    const TYPE_RANK         = 2; // cấp bậc
    const TYPE_FORM_OF_WORK = 3; // hình thức làm việc
}
