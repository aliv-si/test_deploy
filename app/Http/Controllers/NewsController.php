<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::latest()->paginate(5);
        $latestNews = News::latest()->take(5)->get();

        return view('pages.berita', compact('newsList', 'latestNews'));
    }

    public function category($tag)
    {
        $newsList = News::whereJsonContains('tag', $tag)->paginate(5);
        $latestNews = News::latest()->take(5)->get();
        return view('pages.berita_category', compact('newsList', 'tag', 'latestNews'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $latestNews = News::latest()->take(5)->get();

        return view('pages.detail-berita', compact('news', 'latestNews'));
    }
}