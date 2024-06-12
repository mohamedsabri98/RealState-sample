<?php

namespace App\Http\Controllers;

use App\Models\RealData;
use Illuminate\Http\Response;

class RealstateController extends Controller
{
    // Fetch all data from the realdata table rondomlly
    public function index()
    {
        $realdata = RealData::inRandomOrder()->get();
        return view('home', compact('realdata'));
    }

    // Fetch the data for an item by id
    public function showItem($property_id)
    {
        $property = RealData::where('property_id', $property_id)->firstOrFail();

        $property->increment('views');

        $history = json_decode(request()->cookie('history'), true) ?? [];

        $existingHistoryIndex = array_search($property_id, array_column($history, 'property_id'));
        if ($existingHistoryIndex === false) {
            $history[] = [
                'property_id' => $property_id,
                'description' => $property->description,
            ];
        }


        $response = new Response(view('show', compact('property')));
        $response->cookie('history', json_encode($history), 1440);
        return $response;
    }

    //fetch most viewed property
    public function mostViewed()
    {
        $mostViewedItems = RealData::where('views', '>', 0)->orderBy('views', 'desc')->get();

        return view('mostViewed', compact('mostViewedItems'));
    }
}
