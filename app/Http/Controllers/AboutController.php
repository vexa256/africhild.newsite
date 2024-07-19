<?php

namespace App\Http\Controllers;

use DB;

class AboutController extends Controller
{

    private function HubReturn()
    {

        return $resources = DB::table('FrontPageKnowlegdeHub')

            ->select('id', 'SmallTitle',
                'SmallDescription', 'ThumbNail',
                'ResourceLink', 'created_at',
                'updated_at')
            ->get()
            ->map(function ($item) {
                $item->SmallTitle = \Illuminate\Support\Str::limit($item->SmallTitle, 50);
                $item->SmallDescription = \Illuminate\Support\Str::limit($item->SmallDescription, 100);
                return $item;
            });
    }

    public function AfriChildGallery()
    {
        $Gallery = DB::table('Gallery')->paginate(12);

        $data = [
            'Title' => 'AfriChild Centre | Gallery',
            'resources' => $this->HubReturn(),
            'Gallery' => $Gallery,
        ];

        return view('front.pages.Gallery', $data);
    }

    public function AfriChildDirectors()
    {
        $directors = DB::table('directors')->paginate(12);

        $data = [
            'Title' => 'AfriChild Centre | Board of Directors',
            'resources' => $this->HubReturn(),
            'directors' => $directors,
        ];

        return view('front.pages.Directors', $data);
    }

    public function AfriChildFounders()
    {
        $founders = DB::table('founders')->paginate(12);

        $data = [
            'Title' => 'AfriChild Centre | Founders',
            'resources' => $this->HubReturn(),
            'founders' => $founders,
        ];

        return view('front.pages.Founders', $data);
    }

    public function AfriChildTeam()
    {
        $teamMembers = DB::table('team')->paginate(100);

        $data = [
            'Title' => 'AfriChild Centre | Team Members',
            'resources' => $this->HubReturn(),
            'teamMembers' => $teamMembers,
        ];

        return view('front.pages.Team', $data);
    }

    public function AfriChildPartners()
    {
        $founders = DB::table('Partners')->paginate(100);

        $data = [
            'Title' => 'AfriChild Centre | Promoting Partners',
            'resources' => $this->HubReturn(),
            'founders' => $founders,
        ];

        return view('front.pages.Promoting', $data);
    }
}