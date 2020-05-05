<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProblemaRequest;
use App\Models\Problema;
use Illuminate\Support\Facades\Log;

class ProblemaController extends Controller
{
    public function store(ProblemaRequest $request)
    {
        try {
            Problema::create($request->all());
            return response()->json(['status' => true], 200);
        } catch (\Throwable $t) {
            Log::error([
                'msg' => $t->getMessage(),
                'file' => $t->getFile(),
                'line' => $t->getLine()
            ]);
            return response()->json(['status' => false], 500);
        }

    }
}
