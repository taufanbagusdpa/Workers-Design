<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Posts;
use App\Detail_Post;


Route::get('/', function () {
    $xml = array(
      'appName' => Config('app.name'),
      'pageTitle' => Config('app.name')
    );
    return view('home')->with($xml);
});

Route::get('/about.html', function () {
  $xml = array(
    'appName' => Config('app.name'),
    'pageTitle' => 'About Us | '.Config('app.name')
  );
    return view('about')->with($xml);
});

Route::get('/contact.html', function () {
  $xml = array(
    'appName' => Config('app.name'),
    'pageTitle' => 'Contact Us | '.Config('app.name')
  );
    return view('contact')->with($xml);
});

Route::get('/service.html', function () {
  $xml = array(
    'appName' => Config('app.name'),
    'pageTitle' => 'Service | '.Config('app.name')
  );
    return view('service')->with($xml);
});

Route::get('/portfolio.html', function () {
  $Posts = Posts::all();
  $xml = array(
    'appName' => Config('app.name'),
    'pageTitle' => 'Portfolio | '.Config('app.name')
  );
    return view('portfolio')->with($xml)->with('Posts',$Posts);
});

Route::get('/portfolio/{slug}.html', function ($slug) {
  $Posts = Posts::where('slug', $slug)->first();
  $Detail_Post = Detail_Post::where('slug', $slug)->first();
  $exist = Detail_Post::where('slug', $slug)->increment('view');
  $eImage = explode(",", $Detail_Post->image);
  $eDesc = explode("/", $Detail_Post->description);
  $xml = array(
    'appName' => Config('app.name'),
    'pageTitle' => $Posts->title.' | '.Config('app.name'),
    'title' => $Posts->title,
    'eImage' => $eImage,
    'eDesc' => $eDesc
  );
    return view('detail_post')->with($xml)->with('Detail_Post', $Detail_Post);
});

Route::get('sitemap.xml', function()
{
    $sitemap = App::make("sitemap");
    $sitemap->setCache('laravel.sitemap', 3600);
    $sitemap->addSitemap(URL::to('sitemap-pages.xml'),'2018-08-14T12:30:00+02:00');
    $sitemap->addSitemap(URL::to('sitemap-portfolios.xml'),'2018-08-14T12:30:00+02:00');
    return $sitemap->render('sitemapindex');
});

Route::get('sitemap-pages.xml', function()
{
    $sitemap_pages = App::make("sitemap");
    $sitemap_pages->setCache('laravel.sitemap-pages', 3600);
    $sitemap_pages->add(URL::to('/'), '2018-08-15T12:30:00+05:00', '0.5', 'weekly');
    $sitemap_pages->add(URL::to('/about.html'), '2018-08-14T12:30:00+04:00', '0.5', 'weekly');
    $sitemap_pages->add(URL::to('/service.html'), '2018-08-13T12:30:00+03:00', '0.5', 'weekly');
    $sitemap_pages->add(URL::to('/portfolio.html'), '2018-08-12T12:30:00+02:00', '0.5', 'weekly');
    return $sitemap_pages->render('xml');
});

Route::get('sitemap-portfolios.xml', function()
{
    $sitemap_portfolios = App::make("sitemap");
    $sitemap_portfolios->setCache('laravel.sitemap-portfolios', 3600);
    $posts = Detail_Post::get();
    foreach ($posts as $p)
    {
        $sitemap_portfolios->add(URL::to('/portfolio/'.$p->slug.'.html'), $p->updated_at, '0.5', 'weekly');
    }
    return $sitemap_portfolios->render('xml');
});
