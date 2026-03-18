<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->take(12)->get();
        $latestNews = News::latest()->take(7)->get();
        $categories = News::whereNotNull('tag')->pluck('tag')->flatten()->unique()->sort()->values();

        return view('pages.berita', compact('newsList', 'latestNews', 'categories'));
    }

    public function category($tag)
    {
        $newsList = News::whereJsonContains('tag', $tag)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $latestNews = News::latest()->take(7)->get();
        return view('pages.berita_category', compact('newsList', 'tag', 'latestNews'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $latestNews = News::latest()->take(7)->get();

        return view('pages.detail-berita', compact('news', 'latestNews'));
    }
}
