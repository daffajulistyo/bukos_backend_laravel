<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\BoardingHouse;
use Illuminate\Http\Request;

class BoardingHouseController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $location = $request->input('location');
        $description = $request->input('description');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');
        $discount = $request->input('discount');
        $years = $request->input('years');
        $pengelola_id = $request->input('pengelola_id');

        if ($id) {
            $boardingHouse = BoardingHouse::find($id);

            if ($boardingHouse) {
                return ResponseFormatter::success(
                    $boardingHouse,
                    'Data Boarding House berhasil diambil',
                    200
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Boarding House tidak ada',
                    404
                );
            }
        }

        $boardingHouse = BoardingHouse::with(['name']);

        if ($name) {
            $boardingHouse->where('name', 'Like', '%' . $name . '%');
        }
        if ($description) {
            $boardingHouse->where('description', 'Like', '%' . $description . '%');
        }
        if ($location) {
            $boardingHouse->where('location', 'Like', '%' . $location . '%');
        }
    }
}
