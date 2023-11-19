<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CarSearchService
{
    public function search($carRegistration, $postcode)
    {
        // Make an API request to fetch car models

        $response = Http::get("https://b2b.bondint.co.uk/scripts/cgiip.exe/WService=BondWSLive/WEBS/prodsearch.p?accesskey=cdhaYiibkdikikHh&customer=IN00009&attributes=yes&qty=2&postcode={$postcode}&size=2254018&fuel=c&speed=w&ProductCode=1822540WBRT005XL");
        // $response = Http::get("https://myfakeapi.com/api/cars/model/{$carRegistration}");


        if ($response->successful()) {
            $cars = $response->json();
            return $cars;
        }

        return null;
    }
}
