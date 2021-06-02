<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistics extends Model
{
    use HasFactory;

    public function getUserStatistics($userId, $type) {
           $table = 'type_'.$type;
        $user = DB::table($table)
            ->where('user_id', '=', $userId)
            ->get()->toArray();
        dd($user);// Для отладки
        return $user;
    }
}
