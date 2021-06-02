<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Statistics;

class Statistics extends Controller
{
    public function getUserStatistics(Request $request) {
        $user = $request->get('user');
        $type = $request->get('type');
        Statistics::getUserStatistics($user, $type);
    }
}
