<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    public function getCast(){
        return [
            'emre' => [
                'image' => asset('img/team/Emre_Yalcin.jpg'),
                'name'  => 'EMRE YALÇIN',
                'desc'  => __('page.managing.partner'),
            ],
            'tankut' => [
                'image' => asset('img/team/Tankut_Tonger.jpg'),
                'name'  => 'TANKUT TONGER',
                'desc'  => __('page.managing.partner'),
            ],
            'ozlem' => [
                'image' => asset('img/team/Ozlem_Belen.jpg'),
                'name'  => 'ÖZLEM BELEN',
                'desc'  => __('page.advertising.president'),
            ],
            'tuna' => [
                'image' => asset('img/team/Tuna_Bayik.jpg'),
                'name'  => 'TUNA BAYIK',
                'desc'  => __('page.general.coordinator'),
            ],
            'kubilay' => [
                'image' => asset('img/team/Kubilay_Metin.jpg'),
                'name'  => 'KUBİLAY METİN',
                'desc'  => __('page.advertising.director'),
            ],
            'erdogan' => [
                'image' => asset('img/team/Erdogan_Genc.jpg'),
                'name'  => 'ERDOĞAN GENÇ',
                'desc'  => __('page.regional.director'),
            ],
            'serdar' => [
                'image' => asset('img/team/Serdar_Karacelik.jpg'),
                'name'  => 'SERDAR KARAÇELİK',
                'desc'  => __('page.regional.director'),
            ],
            'nuray' => [
                'image' => asset('img/team/Nuray_Gomec.jpg'),
                'name'  => 'NURAY GÖMEÇ',
                'desc'  => __('page.advertising.booking'),
            ],
            'yalcin' => [
                'image' => asset('img/team/Yalcin_Zenger.jpg'),
                'name'  => 'YALÇIN ZENGER',
                'desc'  => __('page.creative.director'),
            ],
            'can' => [
                'image' => asset('img/team/Can_Pektaş.jpg'),
                'name'  => 'CAN PEKTAŞ',
                'desc'  => __('page.post.manager'),
            ],
            'burhan' => [
                'image' => asset('img/team/Burhan_Polat.jpg'),
                'name'  => 'BURHAN POLAT',
                'desc'  => __('page.visual.artist'),
            ],
            'burak' => [
                'image' => asset('img/team/Burak_Zeka.jpg'),
                'name'  => 'BURAK ZEKA',
                'desc'  => __('page.director.photo'),
            ],
            'ugur' => [
                'image' => asset('img/team/Ugur_Dogan_Aydin.jpg'),
                'name'  => 'UĞUR DOĞAN AYDIN',
                'desc'  => __('page.director.photo'),
            ],
            'ahmet' => [
                'image' => asset('img/team/Ahmet_Palalıoğlu.jpg'),
                'name'  => 'AHMET PALALIOĞLU',
                'desc'  => __('page.post.supervisor'),
            ],
            'samet' => [
                'image' => asset('img/team/Samet_Colakel.jpg'),
                'name'  => 'SAMET ÇOLAKEL',
                'desc'  => __('page.video.3d'),
            ],
            'muhammed' => [
                'image' => asset('img/team/Muhammed_Diner.jpg'),
                'name'  => 'MUHAMMED DİNER',
                'desc'  => __('page.video.editor'),
            ],
            'giray' => [
                'image' => asset('img/team/Giray_Bozalp.jpg'),
                'name'  => 'GİRAY BOZALP',
                'desc'  => __('page.video.editor'),
            ],
            'talip' => [
                'image' => asset('img/team/Talip_Demirci.jpg'),
                'name'  => 'TALİP DEMİRCİ',
                'desc'  => __('page.colorist'),
            ],
            'erhan' => [
                'image' => asset('img/team/Erhan_Bayram.jpg'),
                'name'  => 'ERHAN BAYRAM',
                'desc'  => __('page.director.photo'),
            ],
            'okan' => [
                'image' => asset('img/team/Okan_Bayraktar.jpg'),
                'name'  => 'OKAN BAYRAKTAR',
                'desc'  => __('page.assistant.director'),
            ],
            'mucahit' => [
                'image' => asset('img/team/Mucahit_Hasimi.jpg'),
                'name'  => 'MÜCAHİT HAŞİMİ',
                'desc'  => __('page.assistant.director'),
            ],
            'arda' => [
                'image' => asset('img/team/Arda_Ugur.jpg'),
                'name'  => 'ARDA UĞUR',
                'desc'  => __('page.actor'),
            ],
            'okay' => [
                'image' => asset('img/team/Okay_Arda.jpg'),
                'name'  => 'OKAY ARDA',
                'desc'  => __('page.screenwriter'),
            ],
            'emel' => [
                'image' => asset('img/team/Emel_Murtezaoglu.jpg'),
                'name'  => 'EMEL MURTEZAOĞLU',
                'desc'  => __('page.editor'),
            ],
            'gizem' => [
                'image' => asset('img/team/Gizem_Dalgic.jpg'),
                'name'  => 'GİZEM DALGIÇ',
                'desc'  => __('page.graphic.designer'),
            ],
            'bilal' => [
                'image' => asset('img/team/Bilal_Cavdar.jpg'),
                'name'  => 'BİLAL ÇAVDAR',
                'desc'  => __('page.graphic.designer'),
            ],
            'okan-k' => [
                'image' => asset('img/team/Okan_Kileciler.jpg'),
                'name'  => 'OKAN KİLECİLER',
                'desc'  => __('page.budget.executive'),
            ],
            'abdullah' => [
                'image' => asset('img/team/Abdullah_Karsavran.jpg'),
                'name'  => 'ABDULLAH KARSAVRAN',
                'desc'  => __('page.financial.specialist'),
            ],

        ];
    }

    public function index()
    {
        $casts = $this->getCast();
        return view('pages.our-cast')->with('casts', $casts);
    }
}
