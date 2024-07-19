<?php

namespace App\Http\Controllers;

use DB;

class AppController extends Controller
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
    public function AfriChildHome()
    {

        $resources = DB::table('FrontPageKnowlegdeHub')
            ->select('id', 'SmallTitle', 'SmallDescription', 'ThumbNail', 'ResourceLink', 'created_at', 'updated_at')
            ->get()
            ->map(function ($item) {
                $item->SmallTitle = \Illuminate\Support\Str::limit($item->SmallTitle, 50);
                $item->SmallDescription = \Illuminate\Support\Str::limit($item->SmallDescription, 100);
                return $item;
            });
        $posts = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'desc')
            ->limit(4)
            ->get()
            ->map(function ($item) {
                // Limit the text length
                $item->title = \Str::limit($item->title, 50);
                $item->excerpt = \Str::limit($item->excerpt, 100);
                return $item;
            });

        $Recent = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'asc')
            ->limit(6)
            ->get()
            ->map(function ($item) {
                // Limit the text length
                $item->title = \Str::limit($item->title, 50);
                $item->excerpt = \Str::limit($item->excerpt, 100);
                return $item;
            })
            ->shuffle(); // Randomize the collection

        $ForYou = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'desc')
            ->limit(6)
            ->get()
            ->map(function ($item) {
                // Limit the text length
                $item->title = \Str::limit($item->title, 50);
                $item->excerpt = \Str::limit($item->excerpt, 100);
                return $item;
            })
            ->shuffle(); // Randomize the collection

        // dd($posts->count());

        $faqs = DB::table('FAQ')->select('id', 'Question', 'Answer')->limit(6)->get();

        $ourWorks = DB::table('OurWork')
            ->select('id', 'Title', 'PostedBy', 'ThumbNail', 'CoverPhoto', 'Content', 'Description')
            ->limit(6)
            ->get()
            ->map(function ($item) {
                // Limit the text length
                $item->Title = \Str::limit($item->Title, 50);
                $item->Content = \Str::limit($item->Content, 100);
                $item->Description = \Str::limit($item->Description, 80);
                return $item;
            });

        $data = [
            'Title' => 'AfriChild Centre',
            // 'Desc' => 'We are a Centre of Excellence in the study of the African child',
            // 'Page' => 'rcm.ModuleTechnicalReport',
            'ourWorks' => $ourWorks,
            'faqs' => $faqs,
            'posts' => $posts,
            'resources' => $resources,
            'Recent' => $Recent,
            'ForYou' => $ForYou,
            // 'categories' => $categories,

        ];

        return view('front.index', $data);
    }

    public function AfriChildOurWork()
    {

        $ourWorks = DB::table('OurWork')
            ->select('id', 'Title', 'PostedBy', 'ThumbNail', 'CoverPhoto', 'Content', 'Description')
        // ->limit(6)
            ->get();
        $data = [
            'Title' => 'AfriChild Centre',
            'Desc' => 'We are a Centre of Excellence in the study of the African child',
            // 'Page' => 'rcm.ModuleTechnicalReport',
            'ourWorks' => $ourWorks,

        ];

        return view('front.pages.OurWork', $data);
    }

    // public function AfriChildBlog(Request $request)
    // {
    //     // Fetch categories with post counts
    //     $categories = DB::table('categories')
    //         ->leftJoin('posts', 'categories.id', '=', 'posts.category_id')
    //         ->select('categories.id', 'categories.name', 'categories.slug', DB::raw('count(posts.id) as post_count'))
    //         ->groupBy('categories.id', 'categories.name', 'categories.slug')
    //         ->get();

    //     // Initialize query builder for posts
    //     $postsQuery = DB::table('posts')
    //         ->join('categories', 'posts.category_id', '=', 'categories.id')
    //         ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
    //         ->where('posts.status', 'PUBLISHED')
    //         ->orderBy('posts.id', 'desc');

    //     // Check if there is a search query
    //     if ($request->has('q') && !empty($request->input('q'))) {

    //         dd($request->q);

    //         $searchTerm = $request->input('q');
    //         $postsQuery->whereRaw('MATCH(posts.title, posts.excerpt, posts.body) AGAINST(? IN BOOLEAN MODE)', [$searchTerm]);
    //     }

    //     // Fetch paginated posts with text limits
    //     $posts = $postsQuery->paginate(6)->through(function ($item) {
    //         $item->title = \Str::limit($item->title, 50);
    //         $item->excerpt = \Str::limit($item->excerpt, 100);
    //         return $item;
    //     });

    //     // Fetch recent posts with text limits
    //     $Recent = DB::table('posts')
    //         ->join('categories', 'posts.category_id', '=', 'categories.id')
    //         ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
    //         ->where('posts.status', 'PUBLISHED')
    //         ->orderBy('posts.id', 'desc')
    //         ->limit(8)
    //         ->get()
    //         ->map(function ($item) {
    //             $item->title = \Str::limit($item->title, 50);
    //             $item->excerpt = \Str::limit($item->excerpt, 100);
    //             return $item;
    //         })
    //         ->shuffle(); // Randomize the collection

    //     // Prepare data for the view
    //     $data = [
    //         'Title' => 'AfriChild Centre',
    //         'Desc' => 'AfriChild Blog | Insights, News, and Research on Child Development and Advocacy in Africa',
    //         'posts' => $posts,
    //         'resources' => $this->HubReturn(),
    //         'Recent' => $Recent,
    //         'categories' => $categories,
    //     ];

    //     // Return the view with data
    //     return view('front.pages.Blog', $data);
    // }
}