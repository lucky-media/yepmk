<?php

return [
    'production' => false,
    'siteName' => 'Youth Empowerment Platform',
    'siteDescription' => 'Youth Empowerment Platform (YEP) is a youth-orientated non-governmental organization, located in Gostivar.',
    'baseUrl' => '',
    'menu' => [
        [
            'name' => 'Home',
            'url' => '/',
        ],
        [
            'name' => 'About Us',
            'url' => '/about',
        ],
        [
            'name' => 'Projects',
            'url' => '/projects',
        ],
        [
            'name' => 'Contact',
            'url' => '/contact',
        ],
    ],
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
            'title' => 'Goals',
            'image' => '/assets/images/icons/goal.png',
            'image_lg' => '/assets/images/icons/goal@2x.png',
            'desc' => 'Inspiring young people to take an active role in their futures, and teaching them that their voices are strong and vital to the decision-making process;',
        ],
    ],
    'impact' => [
        [
            'number' => '50',
            'title' => 'completed activities',
        ],
        [
            'number' => '600+',
            'title' => 'students impacted',
        ],
        [
            'number' => '200',
            'title' => 'youth engaged in 2018-19 alone',
        ],
        [
            'number' => '1st',
            'title' => 'youth NGO in the region',
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
        [
            'image' => '/assets/images/sponsors/undp.jpg',
            'image_lg' => '/assets/images/sponsors/undp@2x.jpg',
            'alt' => 'UNDP',
        ],
    ],
    'contact' => [
        [
            'icon' => '/assets/images/icons/location.png',
            'icon_lg' => '/assets/images/icons/location@2x.png',
            'name' => 'Borce Jovanoski nr.32, <br>  Gostivar 1230, <br> Republic of N. Macedonia',
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
    'social_media' => [
        [
            'name' => 'facebook',
            'url' => 'https://www.facebook.com/YEPmk/',
        ],
        [
            'name' => 'instagram',
            'url' => 'https://www.instagram.com/yep.mk/',
        ],
        [
            'name' => 'youtube',
            'url' => 'https: //www.youtube.com/channel/UCftepR6yOGtMu5ysdET73SA',
        ],
        [
            'name' => 'linkedin',
            'url' => 'https://www.linkedin.com/company/yepmk/',
        ],
    ],
    'getDescription' => function($page)
    {
        return strip_tags($page->getContent());
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'getStartDate' => function ($page) {
        return Datetime::createFromFormat('Y-m-d', $page->start_date)->format('F j, Y');
    },
    'getEndDate' => function ($page) {
        if ($page->end_date == 'ongoing')
        return $page->end_date;
        else
        return Datetime::createFromFormat('Y-m-d', $page->end_date)->format('F j, Y');
    },
    'collections' => [
        'projects' => [
            'path' => 'projects/{filename}',
            'extends' => '_layouts.project',
        ],
    ],
];
