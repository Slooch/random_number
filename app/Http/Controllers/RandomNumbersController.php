<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RandomNumbers;
use Illuminate\Http\Request;

class RandomNumbersController extends Controller
{
    public function generate() {
        $randomNumber = new RandomNumbers;
        $randomNumber->number = rand(1, 100);
        $randomNumber->save();
        return response()->json($randomNumber->number);
    }

    public function generateInRange(int $min, int $max) {
        $randomNumber = new RandomNumbers;
        $randomNumber->number = rand($min, $max);
        $randomNumber->save();
        return response()->json($randomNumber->number);
    }

    public function retrieve(int $id) {
        $randomNumber = RandomNumbers::find($id);

        if (!empty($randomNumber)) {
            return response()->json($randomNumber->number);
        } else {
            return response()->json([
                'message' => 'Number with this id not found'
            ], 404);
        }
    }
}
