<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
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
    public function AfriChildBlog(Request $request)
    {
        $query = $request->input('q');
        $categorySlug = $request->input('category');

        // Fetch categories with post counts
        $categories = DB::table('categories')
            ->leftJoin('posts', 'categories.id', '=', 'posts.category_id')
            ->select('categories.id', 'categories.name', 'categories.slug', DB::raw('count(posts.id) as post_count'))
            ->groupBy('categories.id', 'categories.name', 'categories.slug')
            ->get();

        // Initialize query builder for posts
        $postsQuery = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'desc');

        // Check if there is a search query
        if ($request->has('q') && !empty($request->input('q'))) {
            $postsQuery->whereRaw('MATCH(posts.title, posts.excerpt, posts.body) AGAINST(? IN NATURAL LANGUAGE MODE)', [$query]);
        }

        // Check if there is a category filter
        if ($request->has('category') && !empty($request->input('category'))) {
            $postsQuery->where('categories.slug', $categorySlug);
        }

        // Fetch paginated posts with text limits
        $posts = $postsQuery->paginate(6)->through(function ($item) {
            $item->title = \Str::limit($item->title, 50);
            $item->excerpt = \Str::limit($item->excerpt, 100);
            return $item;
        });

        // Fetch recent posts with text limits
        $Recent = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'desc')
            ->limit(8)
            ->get()
            ->map(function ($item) {
                $item->title = \Str::limit($item->title, 50);
                $item->excerpt = \Str::limit($item->excerpt, 100);
                return $item;
            })
            ->shuffle(); // Randomize the collection

        // Prepare data for the view
        $data = [
            'Title' => 'AfriChild Centre',
            'Desc' => 'AfriChild Blog | Insights, News, and Research on Child Development and Advocacy in Africa',
            'posts' => $posts,
            'resources' => $this->HubReturn(),
            'Recent' => $Recent,
            'categories' => $categories,
        ];

        if ($request->has('q') && !empty($request->input('q'))) {
            $data['query'] = $query;

            if ($postsQuery->count() < 1) {
                return view('front.pages.BlogNoResults', $data);
            }
        }

        return view('front.pages.Blog', $data);
    }

    public function AfriChildBlogDetails($slug)
    {
        $categories = DB::table('categories')
            ->leftJoin('posts', 'categories.id', '=', 'posts.category_id')
            ->select('categories.id', 'categories.name', 'categories.slug', DB::raw('count(posts.id) as post_count'))
            ->groupBy('categories.id', 'categories.name', 'categories.slug')
            ->get();

        $post = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.slug', $slug)
            ->orderBy('posts.id', 'desc')
            ->first();

        $Recent = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'desc')
            ->limit(8)
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
            ->orderBy('posts.id', 'asc')
            ->limit(6)
            ->get()
            ->map(function ($item) {
                // Limit the text length
                $item->title = \Str::limit($item->title, 30);
                $item->excerpt = \Str::limit($item->excerpt, 100);
                return $item;
            })
            ->shuffle(); // Randomize the collection

        $Search = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'asc')

            ->get()
            ->map(function ($item) {
                // Limit the text length
                $item->title = \Str::limit($item->title, 1000);
                $item->excerpt = \Str::limit($item->excerpt, 1000);
                return $item;
            })
            ->shuffle(); // Randomize the collection

        $data = [
            'Title' => 'AfriChild Centre',
            'Desc' => 'AfriChild Blog | Insights, News, and Research on Child Development and Advocacy in Africa',
            'post' => $post,
            'resources' => $this->HubReturn(),
            'Recent' => $Recent,
            'categories' => $categories,
            'ForYou' => $ForYou,
            'tiny' => "true",
            'Search' => $Search,
        ];

        return view('front.pages.BlogDetails', $data);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Use Full-Text Search
        $posts = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.id', 'posts.title', 'posts.author_id', 'posts.category_id', 'posts.excerpt', 'posts.body', 'posts.image', 'posts.slug', 'posts.created_at', 'categories.name as category_name')
            ->whereRaw(
                "MATCH (posts.title, posts.body, posts.excerpt) AGAINST (? IN NATURAL LANGUAGE MODE)",
                [$query]
            )
            ->where('posts.status', 'PUBLISHED')
            ->orderBy('posts.id', 'desc')
            ->paginate(10);

        return view('front.pages.search-results', compact('posts', 'query'));
    }

}