<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistics extends Model
{
    use HasFactory;

    private $scoresOfTypes = [ //Коэфициенты сложности типов операций
        'summ' => 1,
        'diff' => 1.5,
        'mult' => 3,
        'div' => 4
    ];



    public function getUserStatistics($userId, $type) {
           $table = 'type_'.$type;
        $user = DB::table($table)
            ->where('user_id', '=', $userId)
            ->get()->toArray();
        dd($user);// Для отладки
        return $user;
    }

    public function getAllUsers($countOnPage = 10, $numPage = 1) {
        return DB::table('users_statistics')
            ->orderBy('points', 'desc')
            ->skip($countOnPage * ($numPage - 1))
            ->take($countOnPage)
            ->get()->toArray();
    }



    public function getRatingUsersTop($count = 3) {

        return DB::table('users_statistics')
            ->orderBy('points', 'desc')
            ->take($count)
            ->get()->toArray();

    }

    public function computeRaitingPoints($dataStat, $type) :object {
        //Формула подсчёта очков рейтинга
        $points = 100 * $dataStat['total_mistakes'];
        $points = $points/(2*20*$dataStat['count_easy']+4*40*$dataStat['count_hard']);
        $points = 1- $points;
        $points = $points/ 0.00001 / $dataStat['total_time'];
        $points = $points * (2*$dataStat['count_easy']+4*$dataStat['count_hard']);
        $points = $points * $this->scoresOfTypes[$type];
        return $points;
    }

}
