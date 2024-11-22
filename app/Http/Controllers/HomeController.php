<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home.privacypolicy');
    }
    public function refundpolicy()
    {
        //
        return view('home.refundpolicy');
    }
    public function termsandconditions()
    {
        //
        return view('home.termsandconditions');
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
    public function gomt()
    {
        //
        return view('home.gomt');
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
