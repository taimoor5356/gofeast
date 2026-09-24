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
        $data = $this->normalizeEmailLinks($data);
        return view('home.privacypolicy', compact('data'));
    }
    public function refundpolicy()
    {
        //
        $url = "https://dashboard.gofeast.io/api/v1/refund-policy/19";
        $data = Http::get($url);
        $data = json_decode($data);
        $data = $this->normalizeEmailLinks($data);
        return view('home.refundpolicy', compact('data'));
    }
    public function termsandconditions()
    {
        $url = "https://dashboard.gofeast.io/api/v1/terms-and-conditions/19";
        $data = Http::get($url);
        $data = json_decode($data);
        $data = $this->normalizeEmailLinks($data);
        return view('home.termsandconditions', compact('data'));
    }

    /**
     * The dashboard-sourced policy pages have inconsistent email markup:
     * mailto links missing target="_blank" (opens a blank tab when no mail
     * client is configured), mailto links whose visible text doesn't match
     * the address (e.g. just "c"), and bare "info@gofeast.pk"/"cs@gofeast.pk"
     * mentions that aren't links at all. This normalizes all of the above so
     * every @gofeast.pk email is a proper, correctly-labelled mailto link.
     */
    private function normalizeEmailLinks($html)
    {
        if (!is_string($html) || trim($html) === '') {
            return $html;
        }

        $doc = new \DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML(
            '<?xml encoding="UTF-8"><div id="__root__">' . $html . '</div>',
            LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
        );
        libxml_clear_errors();

        $xpath = new \DOMXPath($doc);

        // Fix existing mailto anchors: label them with their own address and open in a new tab.
        foreach (iterator_to_array($xpath->query('//a[starts-with(@href, "mailto:")]')) as $anchor) {
            $email = explode('?', substr($anchor->getAttribute('href'), strlen('mailto:')))[0];
            if ($email === '') {
                continue;
            }
            $anchor->setAttribute('target', '_blank');
            while ($anchor->firstChild) {
                $anchor->removeChild($anchor->firstChild);
            }
            $anchor->appendChild($doc->createTextNode($email));
        }

        // Wrap bare @gofeast.pk email mentions (not already inside a link) in their own mailto link.
        $emailPattern = '/([a-zA-Z0-9._%+-]+@gofeast\.pk)/';
        foreach (iterator_to_array($xpath->query('//text()[not(ancestor::a)]')) as $textNode) {
            if (!preg_match($emailPattern, $textNode->nodeValue)) {
                continue;
            }

            $fragment = $doc->createDocumentFragment();
            foreach (preg_split($emailPattern, $textNode->nodeValue, -1, PREG_SPLIT_DELIM_CAPTURE) as $i => $part) {
                if ($part === '') {
                    continue;
                }
                if ($i % 2 === 1) {
                    $a = $doc->createElement('a', $part);
                    $a->setAttribute('href', 'mailto:' . $part);
                    $a->setAttribute('target', '_blank');
                    $fragment->appendChild($a);
                } else {
                    $fragment->appendChild($doc->createTextNode($part));
                }
            }
            $textNode->parentNode->replaceChild($fragment, $textNode);
        }

        $root = $xpath->query('//div[@id="__root__"]')->item(0);
        $result = '';
        foreach ($root->childNodes as $child) {
            $result .= $doc->saveHTML($child);
        }

        return $result;
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
