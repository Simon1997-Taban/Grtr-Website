@extends('layouts.custom')

@section('content')
<style>
    .guide-shell {
        max-width: 1100px;
        margin: 40px auto 80px;
        padding: 30px 20px;
    }

    .guide-card {
        background: #fff;
        border: 1px solid #e7e7e7;
        border-radius: 18px;
        box-shadow: 0 14px 40px rgba(26, 33, 52, 0.08);
        padding: 32px 28px;
    }

    .guide-header {
        text-align: center;
        margin-bottom: 28px;
        padding-bottom: 18px;
        border-bottom: 2px solid #f0f0f0;
    }

    .guide-tag {
        display: inline-block;
        padding: 8px 12px;
        background: #eaf5ff;
        color: #0d6efd;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .guide-header h1 {
        margin: 0;
        font-size: 2.3rem;
        font-weight: 800;
        color: #1d2736;
    }

    .guide-header p {
        margin-top: 8px;
        color: #58657a;
        font-size: 1rem;
    }

    .guide-actions {
        display: flex;
        justify-content: center;
        margin: 18px 0 26px;
    }

    .guide-btn {
        border: none;
        background: #0d6efd;
        color: white;
        padding: 12px 20px;
        border-radius: 10px;
        font-weight: 700;
        cursor: pointer;
        transition: 0.2s ease;
    }

    .guide-btn:hover {
        background: #0b5ed7;
    }

    .guide-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 22px;
    }

    .info-box {
        padding: 18px 18px 14px;
        background: #f9fafb;
        border: 1px solid #eef1f5;
        border-radius: 14px;
    }

    .info-box h3 {
        margin-bottom: 12px;
        font-size: 1.1rem;
        color: #1b2430;
    }

    .info-box ul, .info-box ol {
        margin: 0;
        padding-left: 18px;
        color: #465469;
        line-height: 1.7;
    }

    .section-block {
        margin-top: 28px;
        padding-top: 22px;
        border-top: 2px solid #f0f0f0;
    }

    .section-block h2 {
        margin-bottom: 14px;
        font-size: 1.55rem;
        color: #1d2736;
    }

    .section-block p, .section-block li {
        color: #48576d;
        line-height: 1.8;
    }

    .codebox {
        background: #0f172a;
        color: #dfe7ff;
        padding: 16px 18px;
        border-radius: 10px;
        font-family: 'Courier New', monospace;
        font-size: 0.9rem;
        overflow-x: auto;
        white-space: pre-wrap;
        word-break: break-word;
    }

    .mini-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 12px;
        font-size: 0.95rem;
    }

    .mini-table th, .mini-table td {
        border: 1px solid #e7eaee;
        padding: 10px 12px;
        text-align: left;
        vertical-align: top;
    }

    .mini-table th {
        background: #f3f7ff;
        color: #153352;
    }

    @media print {
        body {
            background: white !important;
        }

        .guide-btn {
            display: none !important;
        }

        .guide-shell {
            margin: 0;
            max-width: none;
            padding: 0;
        }

        .guide-card {
            box-shadow: none;
            border: none;
            padding: 0;
        }

        .navbar,
        .footer,
        .header-social-links,
        #scroll-top,
        .mobile-nav-toggle {
            display: none !important;
        }

        .main {
            padding: 0 !important;
        }
    }
</style>

<div class="guide-shell">
    <div class="guide-card">
        <div class="guide-header">
            <div class="guide-tag">Project Guide</div>
            <h1>GRTR Website Documentation</h1>
            <p>Laravel website overview, architecture, page map, and customization notes.</p>
        </div>

        <div class="guide-actions">
            <button class="guide-btn" onclick="window.print()">Download as PDF</button>
        </div>

        <div class="guide-grid">
            <div class="info-box">
                <h3>Project type</h3>
                <ul>
                    <li>Laravel 8 website</li>
                    <li>Blade templates</li>
                    <li>Bootstrap 5 frontend</li>
                    <li>Static/marketing site layout</li>
                </ul>
            </div>

            <div class="info-box">
                <h3>Core stack</h3>
                <ul>
                    <li>PHP / Laravel</li>
                    <li>Blade views</li>
                    <li>Bootstrap CSS/JS</li>
                    <li>Theme assets in public/theme</li>
                </ul>
            </div>

            <div class="info-box">
                <h3>Primary purpose</h3>
                <ul>
                    <li>NGO / organizational website</li>
                    <li>About pages</li>
                    <li>Program pages</li>
                    <li>Gallery, projects, contact</li>
                </ul>
            </div>
        </div>

        <div class="section-block">
            <h2>1. Website overview</h2>
            <p>
                This project is a Laravel-based organization website built around a theme-driven frontend. The content pages are mostly hardcoded as Blade files, and navigation routes point to those views. The site is designed for public-facing information rather than a full CMS or database-driven content management system.
            </p>
        </div>

        <div class="section-block">
            <h2>2. Main project structure</h2>
            <table class="mini-table">
                <thead>
                    <tr>
                        <th>Folder / File</th>
                        <th>Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>routes/web.php</td>
                        <td>Defines all public URLs and route mappings.</td>
                    </tr>
                    <tr>
                        <td>app/Http/Controllers/</td>
                        <td>Handles route logic and page loading.</td>
                    </tr>
                    <tr>
                        <td>resources/views/frontend/</td>
                        <td>Contains the actual content pages for the site.</td>
                    </tr>
                    <tr>
                        <td>resources/views/layouts/</td>
                        <td>Stores the shared layout, header, footer, scripts.</td>
                    </tr>
                    <tr>
                        <td>public/theme/assets/</td>
                        <td>Holds CSS, JS, images, fonts, and vendor libraries.</td>
                    </tr>
                    <tr>
                        <td>public/theme/index.html</td>
                        <td>Theme template source, useful for design reference.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-block">
            <h2>3. Routing and page loading</h2>
            <p>The route file contains page entries such as:</p>
            <div class="codebox">Route::get('/who-we-are', [PageController::class, 'index']);
Route::get('/projects', [PageController::class, 'index']);
Route::get('/contact-us', [PageController::class, 'index']);</div>
            <p>
                The PageController extracts the last URL segment and tries to load a matching Blade file name. In other words, a URL like <strong>/who-we-are</strong> maps to a Blade view named <strong>resources/views/frontend/who-we-are.blade.php</strong>.
            </p>
        </div>

        <div class="section-block">
            <h2>4. Key controller logic</h2>
            <p>PageController is the main page loader:</p>
            <div class="codebox">$path = explode('/', url()->current());
$page_name = end($path);
return view()->first(["frontend.{$page_name}"]);</div>
            <p>This is a simple dynamic page resolver. It keeps the project lightweight and avoids creating a separate controller for every page.</p>
        </div>

        <div class="section-block">
            <h2>5. Shared layout structure</h2>
            <p>The common site shell is defined in:</p>
            <ul>
                <li>resources/views/layouts/custom.blade.php</li>
                <li>resources/views/layouts/partials/head.blade.php</li>
                <li>resources/views/layouts/partials/navbar.blade.php</li>
                <li>resources/views/layouts/partials/footer.blade.php</li>
                <li>resources/views/layouts/partials/footer-scripts.blade.php</li>
            </ul>
            <p>These files control the global header, footer, metadata, fonts, CSS, JS, and script initialization for the whole website.</p>
        </div>

        <div class="section-block">
            <h2>6. Pages included in the website</h2>
            <ul>
                <li>Home</li>
                <li>Who we are</li>
                <li>Donors & Partners</li>
                <li>What we do</li>
                <li>Education</li>
                <li>Research</li>
                <li>Livelihood</li>
                <li>Peace Building</li>
                <li>Environment Protection</li>
                <li>Water, Sanitation & Hygiene</li>
                <li>Projects</li>
                <li>Gallery</li>
                <li>Contact us</li>
                <li>Blog single post</li>
            </ul>
        </div>

        <div class="section-block">
            <h2>7. Main site sections</h2>
            <table class="mini-table">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Typical file</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Navbar</td>
                        <td>layouts/partials/navbar.blade.php</td>
                    </tr>
                    <tr>
                        <td>Footer</td>
                        <td>layouts/partials/footer.blade.php</td>
                    </tr>
                    <tr>
                        <td>Theme styling</td>
                        <td>public/theme/assets/css/main.css</td>
                    </tr>
                    <tr>
                        <td>Page content</td>
                        <td>resources/views/frontend/*.blade.php</td>
                    </tr>
                    <tr>
                        <td>Theme scripts</td>
                        <td>public/theme/assets/js/main.js</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-block">
            <h2>8. Where to customize the site</h2>
            <ul>
                <li><strong>Change header/menu:</strong> resources/views/layouts/partials/navbar.blade.php</li>
                <li><strong>Change footer:</strong> resources/views/layouts/partials/footer.blade.php</li>
                <li><strong>Update site-wide styling:</strong> public/theme/assets/css/main.css</li>
                <li><strong>Update a page:</strong> resources/views/frontend/[page-name].blade.php</li>
                <li><strong>Add a new page:</strong> create a Blade file and route it in routes/web.php</li>
            </ul>
        </div>

        <div class="section-block">
            <h2>9. How to run the project</h2>
            <div class="codebox">composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan serve
npm run dev</div>
            <p>You can also use <strong>npm run watch</strong> during development to automatically rebuild frontend assets.</p>
        </div>

        <div class="section-block">
            <h2>10. Important note</h2>
            <p>
                The project is a good example of a content-heavy marketing website built on Laravel, but it is not yet a full CMS. Most sections are static Blade pages, and the page structure is based on the theme/template plus direct view files.
            </p>
        </div>

        <div class="section-block">
            <h2>11. Conclusion</h2>
            <p>
                This website is built around a reusable layout system, matched Blade page views, and a theme asset bundle. It is easy to extend by creating new views and routes. For a non-profit or organization site, this structure is simple, maintainable, and fast to customize.
            </p>
        </div>
    </div>
</div>
@endsection
