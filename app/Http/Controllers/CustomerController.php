<?php


namespace App\Http\Controllers;


class CustomerController
{
    public function getCustomer()
    {
        return [
            'Turkish Airlines' => [
                'image' => asset('img/brands/1.png'),
                'name'  => 'Turkish Airlines',
            ],
            'Pegasus' => [
                'image' => asset('img/brands/2.png'),
                'name'  => 'Pegasus',
            ],
            'SunExpress' => [
                'image' => asset('img/brands/3.png'),
                'name'  => 'SunExpress',
            ],
            'Onur Air' => [
                'image' => asset('img/brands/4.png'),
                'name'  => 'Onur Air',
            ],
            'Deik' => [
                'image' => asset('img/brands/5.png'),
                'name'  => 'Deik',
            ],
            'TİM' => [
                'image' => asset('img/brands/6.png'),
                'name'  => 'TİM',
            ],
            'Turkcell' => [
                'image' => asset('img/brands/7.png'),
                'name'  => 'Turkcell',
            ],
            'Vodafone' => [
                'image' => asset('img/brands/8.png'),
                'name'  => 'Vodafone',
            ],
            'Arçelik' => [
                'image' => asset('img/brands/9.png'),
                'name'  => 'Arçelik',
            ],
            'BMW' => [
                'image' => asset('img/brands/10.png'),
                'name'  => 'BMW',
            ],
            'Ford' => [
                'image' => asset('img/brands/11.png'),
                'name'  => 'Ford',
            ],
            'Koç' => [
                'image' => asset('img/brands/12.png'),
                'name'  => 'Koç',
            ],
            'Türk Telekom' => [
                'image' => asset('img/brands/13.png'),
                'name'  => 'Türk Telekom',
            ],
            'Volkswagen' => [
                'image' => asset('img/brands/14.png'),
                'name'  => 'Volkswagen',
            ],
            'Bosch' => [
                'image' => asset('img/brands/15.png'),
                'name'  => 'Bosch',
            ],
        ];
    }


    public function index()
    {
        $customers = $this->getCustomer();
        return view('pages.customer')->with('customers', $customers);
    }
}
