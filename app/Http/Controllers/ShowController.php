<?php

namespace App\Http\Controllers;

use App\Models\Show;

class ShowController extends Controller
{
    public function index()
    {
        $shows = Show::all()->map(fn (Show $show) => [
            'id' => $show->id,
            'title' => $show->title,
            'venue' => $show->venue,
            'date' => $show->date->format('d/m/Y H:i'),
            'fill_rate' =>$show->fillRate(),
        ]);

        return response()->json($shows, 200, [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);    }
}
