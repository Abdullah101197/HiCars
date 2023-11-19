<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarSearchService;


class SearchController extends Controller
{
    protected $carSearchService;

    public function __construct(CarSearchService $carSearchService)
    {
        $this->carSearchService = $carSearchService;
    }

    public function search(Request $request)
    {
        $carRegistration = $request->input('carRegistration');
        $postcode = $request->input('postcode');

        // Use the service to perform the search
        $result = $this->carSearchService->search($carRegistration, $postcode);

        dd($result);
        $result = $result['Cars'][0];

        if ($result !== null) {
            return view('book.vehicle', compact('result', 'postcode'));
        } else {
            return redirect()->back()->with('error', 'No matching records found.');
        }
    }

    public function location(Request $request)
    {
        $location = [
            'Mileage' => $request->Mileage,
            'lastServiceDate' => $request->lastServiceDate,
            'car_detail' => json_decode($request->car_detail, true) // true to convert to associative array
        ];

        return view('book.location', [
            'title' => 'HiQ Centre',
            'location' => $location
        ]);
    }

    public function services(Request $request)
    {
        $centerData = json_decode($request->centerData, true);

        $servicesData = [
            'address' => $request->address,
            'companyDetails' => $request->companyDetails,
            'Mileage' => $centerData['Mileage'],
            'lastServiceDate' => $centerData['lastServiceDate'],
            'car_detail' => $centerData['car_detail'] ?? null
        ];

        return view('book.services', [
            'title' => 'Services',
            'servicesData' => $servicesData
        ]);
    }


    function Appointment(Request $request)
    {

        
        dd($request->all());
        return view('book.Appointment')->with('title', 'Appointment');
    }

    function Contact()
    {

        return view('book.Contact')->with('title', 'Contact');
    }
}
