<?php

namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // 可能有冲突，手动指定表名
    protected $table = 'user';
}
