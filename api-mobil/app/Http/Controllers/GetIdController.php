<?php

namespace App\Http\Controllers;

use App\Models\DataMobil;
use Illuminate\Http\Request;

class GetIdController extends Controller
{
    public function showId(Request $request)
    {
        $id = $request->id;
        return DataMobil::find($id);
    }
}
?>