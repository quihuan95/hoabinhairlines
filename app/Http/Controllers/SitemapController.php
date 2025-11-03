<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\News;
session_start();


class SitemapController extends Controller
{
    public function index()
    {
        //return view('pages.sitemap');
        return response()->view('pages.sitemap')->header('Content-Type', 'text/xml');
    }
}
