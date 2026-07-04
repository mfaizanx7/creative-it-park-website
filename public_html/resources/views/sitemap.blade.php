{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- ===================== Static pages ===================== --}}

    <url>
        <loc>https://creativeitpark.org</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/about_us</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/our_experts</loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/experties</loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/services</loc>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/services-web</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/service-app</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/service-ui-ux</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/service-cloud</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/content_writing</loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/industries</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/portfolio</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/products</loc>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/csuite</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/coworkit</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/news</loc>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/blog</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/faqs</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>https://creativeitpark.org/career</loc>
        <changefreq>weekly</changefreq>
        <priority>0.6</priority>
    </url>

    {{-- ===================== Dynamic: Blog posts ===================== --}}

    @foreach($blogs as $blog)
    @if($blog->slug)
    <url>
        <loc>https://creativeitpark.org/blogs/{{ $blog->slug }}</loc>
        <lastmod>{{ $blog->updated_at ? $blog->updated_at->toDateString() : now()->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endif
    @endforeach

    {{-- ===================== Dynamic: Industry pages ===================== --}}

    @foreach($industries as $industry)
    @if($industry->slug)
    <url>
        <loc>https://creativeitpark.org/industry/{{ $industry->slug }}</loc>
        <lastmod>{{ $industry->updated_at ? $industry->updated_at->toDateString() : now()->toDateString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    @endif
    @endforeach

</urlset>
