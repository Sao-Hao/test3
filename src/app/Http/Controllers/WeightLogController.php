<?php

namespace App\Http\Controllers;

use App\Models\WeightLog;
use Illuminate\Http\Request;

class WeightLogController extends Controller
{
    public function index()
    {
        $weight_logs = WeightLog::paginate(8);;
        return view('index', ['weight_logs' => $weight_logs]); // ← -（ハイフン）はNGなのでアンダースコアに修正
    }
}
