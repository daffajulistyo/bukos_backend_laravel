<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function all (Request $request)
    {
        $id = $request->input('id');
        $user_id = $request->input('user_id');
        $kos_id = $request->input('kos_id');
    }
}
