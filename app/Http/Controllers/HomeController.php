<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Post;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Scheb\YahooFinanceApi\ApiClientFactory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::limit(6)
            ->orderBy('created_at','DESC')
            ->with('category')
            ->get();

        $categories = Category::get();

        $quotes = $this->getQuotes();

        // Events later than today
        $events = Event::orderBy('starts','ASC')
            ->where('starts','>=', DB::raw('curdate()'))
            ->get();

        $videos = Post::where('category_id','8')->take(8)->get();

        return view('pages.home', compact('posts','categories','quotes', 'events','videos'));
    }

    public function sobre()
    {

        $categories = Category::get();

        return view('pages.sobre', compact('posts','categories'));
    }

    public function getQuotes()
    {
        try {
            // Create a new client from the factory
            $client = ApiClientFactory::createApiClient();

            // Or use your own Guzzle client and pass it in
            $options = [/*...*/];
            $guzzleClient = new Client($options);
            $client = ApiClientFactory::createApiClient($guzzleClient);

            $quotes = [];

            array_push($quotes,$client->getQuote("ETHUSD=X"));

            array_push($quotes,$client->getQuote("BTCUSD=X"));

            array_push($quotes,$client->getQuote("BRL=X"));

            array_push($quotes,$client->getQuote("AMZN"));

            return $quotes;
        }
        catch (\Exception $e) {

            if ($e->getCode() == 400)
                return false;

            return $e->getMessage();
        }
    }
}
