<?php

return [
    'production' => false,
    'baseUrl' => '',
    'values' => [
        [
            'title' => 'Mission',
            'image' => '/assets/images/icons/mission.png',
            'image_lg' => '/assets/images/icons/mission@2x.png',
            'desc' => 'Encouraging youth empowerment and potential fulfillment through different activities',
        ],
        [
            'title' => 'Vision',
            'image' => '/assets/images/icons/vision.png',
            'image_lg' => '/assets/images/icons/vision@2x.png',
            'desc' => 'Intellectually Empowered Youth',
        ],
        [
            'title' => 'Goal',
            'image' => '/assets/images/icons/goal.png',
            'image_lg' => '/assets/images/icons/goal@2x.png',
            'desc' => 'Lorem ipsum dolore sit amet',
        ],
    ],
    'impact' => [
        [
            'number' => '20',
            'title' => 'projects completed',
        ],
        [
            'number' => '120',
            'title' => 'volunteers',
        ],
        [
            'number' => '400',
            'title' => 'events hosted',
        ],
        [
            'number' => '500',
            'title' => 'community time',
        ],
    ],
    'sponsors' => [
        [
            'image' => '/assets/images/sponsors/komuna.jpg',
            'image_lg' => '/assets/images/sponsors/komuna@2x.jpg',
            'alt' => 'Komuna e Gostivarit',
        ],
        [
            'image' => '/assets/images/sponsors/usembskopje.jpg',
            'image_lg' => '/assets/images/sponsors/usembskopje@2x.jpg',
            'alt' => 'US Embassy Skopje',
        ],
        [
            'image' => '/assets/images/sponsors/peacecorps.jpg',
            'image_lg' => '/assets/images/sponsors/peacecorps@2x.jpg',
            'alt' => 'Peace Corps',
        ],
        [
            'image' => '/assets/images/sponsors/usaid.jpg',
            'image_lg' => '/assets/images/sponsors/usaid@2x.jpg',
            'alt' => 'USAID',
        ],
    ],
    'contact' => [
        [
            'icon' => '/assets/images/icons/location.png',
            'icon_lg' => '/assets/images/icons/location@2x.png',
            'name' => 'Major Cede Filiposki 158, <br>  Gostivar 1230, <br> Republic of N. Macedonia',
        ],
        [
            'icon' => '/assets/images/icons/time.png',
            'icon_lg' => '/assets/images/icons/time@2x.png',
            'name' => 'Monday - Saturday: <br> 10:00 - 18:00',
        ],
        [
            'icon' => '/assets/images/icons/phone.png',
            'icon_lg' => '/assets/images/icons/phone@2x.png',
            'name' => '+389 70 692 549',
        ],
        [
            'icon' => '/assets/images/icons/mail.png',
            'icon_lg' => '/assets/images/icons/mail@2x.png',
            'name' => 'yepmk2015@gmail.com',
        ],
    ],
    'getStartDate' => function ($page) {
        return Datetime::createFromFormat('Y-m-d', $page->start_date)->format('F j, Y');
    },
    'getEndDate' => function ($page) {
        return Datetime::createFromFormat('Y-m-d', $page->end_date)->format('F j, Y');
    },
    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'extends' => '_layouts.project',
        ],
    ],
];
