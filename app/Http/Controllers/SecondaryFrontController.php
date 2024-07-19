<?php

namespace App\Http\Controllers;

use DB;

class SecondaryFrontController extends Controller
{

    private function HubReturn()
    {

        return $resources = DB::table('FrontPageKnowlegdeHub')
            ->select('id', 'SmallTitle', 'SmallDescription', 'ThumbNail', 'ResourceLink', 'created_at', 'updated_at')
            ->get()
            ->map(function ($item) {
                $item->SmallTitle = \Illuminate\Support\Str::limit($item->SmallTitle, 50);
                $item->SmallDescription = \Illuminate\Support\Str::limit($item->SmallDescription, 100);
                return $item;
            });
    }

    public function AfriChildOurWork()
    {
        $ourWorks = DB::table('OurWork')
            ->select('id', 'Title', 'PostedBy', 'ThumbNail', 'CoverPhoto', 'Content', 'Description')
            ->paginate(6)
            ->through(function ($item) {
                // Limit the text length
                $item->Title = \Str::limit($item->Title, 25);
                $item->Content = \Str::limit($item->Content, 100);
                // $item->Description = \Str::limit($item->Description, 100);
                return $item;
            });

        $ourWorks2 = DB::table('OurWork')
            ->select('id', 'Title', 'PostedBy', 'ThumbNail', 'CoverPhoto', 'Content', 'Description')
            ->get();

        $data = [
            'Title' => 'AfriChild Centre',
            'resources' => $this->HubReturn(),
            'ourWorks' => $ourWorks,
            'ourWorks2' => $ourWorks2,
        ];

        return view('front.pages.OurWork', $data);
    }

}