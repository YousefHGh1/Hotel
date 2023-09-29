<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Room;
use App\Models\Section;
use App\Models\Viedo;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class HomeController extends Controller
{
    private $footers;

    public function __construct()
    {
        $this->footers = Footer::get();

        // $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function Hotel_website()
    {
        $sections = Section::with('category')->get();
        $viedos = Viedo::get();

        $accessToken = 'IGQWRQa29yZA1MzYk41aU1uc0wxdzJMQXFNYlY1N3czNjRaNGRJRWlxcldVdVVZAYl83cFY4NUlfa0FZAR3VvUnMwaHU4R1NfeGNSQmFaTl9BeS1UTTkzbk51MDdha2FzQko4di1VSldHM0RPVVRCdTFzaFdBNGprU1EZD';
        $client = new Client();

        $response = $client->get("https://graph.instagram.com/v12.0/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink,timestamp&access_token={$accessToken}");
        $data = json_decode($response->getBody(), true);
        $images = $data['data'];
        // dd($images);

        return view('Website_Hotel.Hotel_website', compact('sections', 'viedos','images'))
            ->with('footers', $this->footers);
    }

    public function contact()
    {
        return view('Website_Hotel.contact')->with('footers', $this->footers);
    }

    public function gallery()
    {
        $sections = Section::with('category')->get();

        return view('Website_Hotel.gallery', compact('sections'))->with('footers', $this->footers);
    }

    public function apartmentdetails()
    {
        return view('Website_Hotel.apartment-details')->with('footers', $this->footers);
    }

    public function apartmentlist()
    {
        return view('Website_Hotel.apartment-list')->with('footers', $this->footers);
    }

    public function trending()
    {
        $sections = Section::with('category')->get();

        return view('Website_Hotel.trending', compact('sections'))->with('footers', $this->footers);
    }

    public function booking(Request $request)
    {
        session([
            'anreisedatum' => $request->anreisedatum,
            'abreisedatum' => $request->abreisedatum,
            'erwachsene' => $request->erwachsene,
            'kinder' => $request->kinder,
        ]);
        $rooms = Room::get(['id', 'name']);
        return view('Website_Hotel.booking', compact('rooms'))->with('footers', $this->footers);
    }

}