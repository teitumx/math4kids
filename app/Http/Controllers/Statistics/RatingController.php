<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Statistics;

class RatingController extends Controller
{
    public function getUserStatistics(Request $request) {


    }

    public function getRatingUsersTop(Statistics $statistics) {

        return $statistics->getRatingUsersTop($statistics->countTop);

    }
}
