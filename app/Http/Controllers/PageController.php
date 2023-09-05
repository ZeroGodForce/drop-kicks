<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Display the homepage.
     * @return View
     */
    public function home(): View
    {
        return view('shop', ['page' => Page::where('slug', Page::HOMEPAGE_SLUG)->first()]);
    }

    /**
     * Display the requested Page.
     * @param Page $page
     * @return View
     */
    public function show(Page $page): View
    {
        return view('shop', ['page' => $page]);
    }
}
