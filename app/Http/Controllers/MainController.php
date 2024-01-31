<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrlVisits;
use App\Models\User;


class MainController extends Controller
{
    function test(Request $request)
    {
        $ip = $request->ip();
        $ip = "188.43.235.177";

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://find-any-ip-address-or-domain-location-world-wide.p.rapidapi.com/iplocation?apikey=873dbe322aea47f89dcf729dcc8f60e8&ip=188.43.235.177",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: find-any-ip-address-or-domain-location-world-wide.p.rapidapi.com",
                "X-RapidAPI-Key: 55d288a6b3mshf83a35195873e65p1e7383jsna7cef6fe3fd3"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = json_decode($response);
            $country = $result->country;

            $row = [
                'short_url_id' => '24',
                'ip_address' => $ip,
                'operating_system' => $country,
            ];

            ShortUrlVisits::Create($row);
        }


        return redirect('https://stackoverflow.com/questions/63945287/routes-on-laravel-8-1-0', 301);
    }
}
