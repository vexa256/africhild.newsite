<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{

    public function AfriChildHome()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            // 'Page' => 'rcm.ModuleTechnicalReport',
            // 'Modules' => $Modules,

        ];

        return view('front.index', $data);
    }

    public function AfriChildOurWork()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre |  Our Work',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.OurWork',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.OurWork', $data);
    }

    public function AfriChildBoardOfDirectors()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre |  Our Board of Directors',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Board',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Board', $data);
    }

    public function AfriChildSecretariat()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre |  Our Secretariat Team',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Secretariat',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Secretariat', $data);
    }

    public function AfriChildCorePrograms()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre |  Our Core Program Areas',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Program',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Program', $data);
    }

    public function AfriChildFounders()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre |  AfriChild Founders',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Founders',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Founders', $data);
    }

    public function AfriChildPromotingPartners()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre | Our Promoting Partners',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Partners',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Partners', $data);
    }

    public function AfriChildGallery()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre | Our Portfolio',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Gallery',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Gallery', $data);
    }

    public function AfriChildContactUs()
    {

        // $Modules = DB::table('ActivityProgress')->get()->unique('ModuleName');

        $data = [
            'Title' => 'AfriChild Centre | Contact Us',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            'Page' => 'front.pages.Gallery',
            // 'Modules' => $Modules,

        ];

        return view('front.pages.Contact', $data);
    }
}
