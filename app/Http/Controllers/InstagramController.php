<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use GuzzleHttp\Client;

class InstagramController extends Controller
{
    //
    public function getInstagramFeed()
    {
        // $footers = Footer::get();
        $accessToken = 'IGQWRQa29yZA1MzYk41aU1uc0wxdzJMQXFNYlY1N3czNjRaNGRJRWlxcldVdVVZAYl83cFY4NUlfa0FZAR3VvUnMwaHU4R1NfeGNSQmFaTl9BeS1UTTkzbk51MDdha2FzQko4di1VSldHM0RPVVRCdTFzaFdBNGprU1EZD';
        $client = new Client();

        try {
            $response = $client->get("https://graph.instagram.com/v12.0/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink,timestamp&access_token={$accessToken}");
            $data = json_decode($response->getBody(), true);
            $images = $data['data'];
            // dd($images);

            return view('Website_Hotel.Hotel_website', [
                'images' => $images,
                // 'footers' => $footers,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to authenticate.']);
        }
    }

}
