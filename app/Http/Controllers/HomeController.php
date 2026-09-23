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
        return view('home.blog', ['posts' => config('blog.posts')]);
    }

    public function blogShow($slug)
    {
        $posts = config('blog.posts');

        if (!isset($posts[$slug])) {
            abort(404);
        }

        return view('home.blog-show', ['post' => $posts[$slug]]);
    }

    /**
     * Blog listing sourced from the dashboard API instead of the local config.
     */
    public function newBlogs()
    {
        $response = Http::get('https://dashboard.gofeast.io/api/v1/blogs');
        $items = $this->extractBlogCollection($response->json());

        $blogs = collect($items)
            ->filter(fn ($blog) => !empty($blog['status']))
            ->map(function ($blog) {
                $paragraphs = $this->decodeBlogParagraphs($blog['paragraphs'] ?? null);

                return [
                    'slug' => $blog['slug'] ?? '',
                    'title' => $blog['main_heading'] ?? '',
                    'excerpt' => $blog['sub_heading'] ?? ($paragraphs[0] ?? ''),
                    'image' => $this->resolveBlogImage($blog, 'card_banner'),
                ];
            })
            ->filter(fn ($blog) => !empty($blog['slug']))
            ->values();

        return view('home.new_blogs', ['blogs' => $blogs]);
    }

    public function newBlogShow($slug)
    {
        $response = Http::get('https://dashboard.gofeast.io/api/v1/blog/' . urlencode($slug));
        $blog = $this->extractBlogItem($response->json());

        if (empty($blog) || empty($blog['status'])) {
            abort(404);
        }

        $data = [
            'slug' => $blog['slug'] ?? $slug,
            'title' => $blog['main_heading'] ?? '',
            'subtitle' => $blog['sub_heading'] ?? '',
            'page_banner' => $this->resolveBlogImage($blog, 'page_banner'),
            'other_image' => $this->resolveBlogImage($blog, 'other_image'),
            'paragraphs' => $this->decodeBlogParagraphs($blog['paragraphs'] ?? null),
            'footer' => $blog['footer'] ?? null,
        ];

        return view('home.new_blog-show', ['blog' => $data]);
    }

    private function extractBlogCollection($json)
    {
        if (!is_array($json)) {
            return [];
        }

        if (isset($json['data']) && is_array($json['data'])) {
            return $json['data'];
        }

        return $json;
    }

    private function extractBlogItem($json)
    {
        if (!is_array($json)) {
            return null;
        }

        if (isset($json['data']) && is_array($json['data'])) {
            return $json['data'];
        }

        return $json;
    }

    private function resolveBlogImage($blog, $field)
    {
        if (!empty($blog[$field . '_full_url'])) {
            return $blog[$field . '_full_url'];
        }

        if (empty($blog[$field])) {
            return null;
        }

        return 'https://dashboard.gofeast.io/storage/app/public/blog/' . $blog[$field];
    }

    private function decodeBlogParagraphs($paragraphs)
    {
        if (is_array($paragraphs)) {
            return array_values($paragraphs);
        }

        if (is_string($paragraphs) && $paragraphs !== '') {
            $decoded = json_decode($paragraphs, true);
            if (is_array($decoded)) {
                return array_values($decoded);
            }
            return [$paragraphs];
        }

        return [];
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
        $data = Http::withoutVerifying()->get($url);
        $data = json_decode($data);
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
