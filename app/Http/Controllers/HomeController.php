<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function aboutus()
    {
        //
        return view('home.aboutus');
    }
    public function article()
    {
        //
        return view('home.article');
    }
    public function blog()
    {
        //
        return view('home.blog');
    }
    public function commingsoon()
    {
        //
        return view('home.commingsoon');
    }
    public function contactus()
    {
        //
        return view('home.contactus');
    }
    public function faqs()
    {
        //
        return view('home.faqs');
    }
    public function godriver()
    {
        //
        return view('home.godriver');
    }
    public function gopartner()
    {
        //
        return view('home.gopartner');
    }
    public function index()
    {
        //
        return view('home.index');
    }
    public function privacypolicy()
    {
        //
        $url = "https://dashboard.gofeast.io/api/v1/privacy-policy/19";
        $data = Http::get($url);
        $data = json_decode($data);
        dd($data);
        return view('home.privacypolicy', compact('data'));
    }
    public function refundpolicy()
    {
        //
        $url = "https://dashboard.gofeast.io/api/v1/refund-policy/19";
        $data = Http::get($url);
        $data = json_decode($data);
        return view('home.refundpolicy', compact('data'));
    }
    public function termsandconditions()
    {
        $url = "https://dashboard.gofeast.io/api/v1/terms-and-conditions/19";
        $data = Http::get($url);
        $data = json_decode($data);
        return view('home.termsandconditions', compact('data'));
    }
    public function termsofuse()
    {
        //
        return view('home.termsofuse');
    }
    public function siteMap()
    {
        //
        return view('home.sitemap');
    }
    public function vendorterms()
    {
        //
        return view('home.vendorterms');
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
