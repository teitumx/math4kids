<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

/**
 * App\Models\Statistics
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Statistics newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistics newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Statistics query()
 * @mixin \Eloquent
 */
class Statistics extends Model
{
    use HasFactory;

    private $scoresOfTypes = [ //Коэфициенты сложности типов операций
        'summ' => 1,
        'diff' => 1.5,
        'mult' => 3,
        'div' => 4
    ];

    public $countTop = 3;



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

        $rating = DB::table('users_statistics')->select('user_id', 'total_time', 'points')
            ->orderBy('points', 'desc')
            ->take($count)
            ->get();
        return $rating;
    }

    public function computeRatingPoints($dataStat, $type) {
        //Формула подсчёта очков рейтинга
        $score = $this->scoresOfTypes[$type];
        $points = 100 * $dataStat['total_mistakes'];
        $points = $points/(2*20*$dataStat['count_easy']+4*40*$dataStat['count_hard']);
        $points = 1- $points;
        $points = $points/ 0.01 / $dataStat['total_time'];
        $points = $points * (2*$dataStat['count_easy']+4*$dataStat['count_hard']);
        $points = $points * $score;
        return (int) $points;
    }

}
