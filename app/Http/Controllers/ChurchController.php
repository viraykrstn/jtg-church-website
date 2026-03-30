<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChurchController extends Controller
{
    public function index()
{
    $churchData = [
        'name' => 'JTG Church Global Manila',
        'location' => 'Lope De Vega, Sta. Cruz, Manila, Philippines',
        'tagline' => 'Where Christ is REAL, Disciples are MADE.',
        'schedule' => [
            'Sunday Service' => '10:00 AM & 4:00 PM',
            'Midweek Service' => 'Wednesdays 7:00 PM',
            'Fellowship Night' => 'Saturdays 5:00 PM'
        ],
        //Pastors & Leaders Data
        'leaders' => [
            ['name' => 'Blenn Ramos', 'role' => 'Lead Pastor', 'image' => 'pastor1.jpg'],
            ['name' => 'Marinelle Ramos', 'role' => 'Executive Pastor', 'image' => 'pastor2.jpg']
        ]
    ];

    return view('landing', compact('churchData'));

    }
}
