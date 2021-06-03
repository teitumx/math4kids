<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Statistics;

class Statistics extends Controller
{
    public function getUserStatistics(Request $request) {

        Statistics::getRatingUsersTop($request['count']);

    }

    public function getRateUsersTop() {

    }
}
