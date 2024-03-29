<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LocationController extends Controller
{
    public function findLocation(Request $request)
    {
        $address = $request->input('address');

        $client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'address' => $address,
                'key' => 'YOUR_GOOGLE_MAPS_API_KEY',
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        // Extract latitude and longitude from the response
        $latitude = $data['results'][0]['geometry']['location']['lat'];
        $longitude = $data['results'][0]['geometry']['location']['lng'];

        return response()->json([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);
    }
}
