<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Log;
use App\Models\BlogCategory;

class BlogFrontController extends Controller
{
    public function blogDetails($slug)
    {
        $blog = Blog::where('blog_slug', $slug)->first();
        $title = $blog->blog_seo_title;
        $desc = $blog->blog_seo_desc;
        $latestBlogs = Blog::where('blog_slug', '!=', $slug)
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get();
        // dd($latestBlogs);
        return view('front.blog-details')
            ->with(compact('title', 'desc', 'blog', 'latestBlogs'));
    }
}
