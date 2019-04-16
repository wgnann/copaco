<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NUSPController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function findNUSP(Request $request) {
        $f = fopen("/home/copaco/copaco/resources/listav1", "r");

        $user = "gnann";
        if (isset($request) and isset($request->ime_id))
            $user = $request->ime_id;

        while ($row = fgetcsv($f, 1000, ":")) {
            if ($row[0] == $user) {
                return response()->json(['nusp' => $row[2]]);
            }
        }
        fclose($f);

        return false;
    }
}

?>
