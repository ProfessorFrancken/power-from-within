<?php

return [
    'production' => false,

    'items' => [
        [
            'url' => '/study',
            'title' => 'Study',
            'subItems' => [
                ['url' => "/study/books", 'title' => 'Books'],
                ['url' => "/study/research-groups", 'title' => 'Research Groups'],
                ['url' => "/study/representation/university-council", 'title' => 'University Council'],
                ['url' => "/study/representation/faculty-council", 'title' => 'Faculty Council'],
            ],
            'icon' => 'book',
        ],
        [
            'url' => '/association',
            'title' => 'Association',
            'subItems' => [
                ['url' => "/association/news", 'title' => 'News'],
                ['url' => "/association/history", 'title' => 'History'],
                ['url' => "/association/honorary-members", 'title' => 'Honerary members'],
                ['url' => "/association/boards", 'title' => 'Boards'],
                ['url' => "/association/committees", 'title' => 'Committees'],
                ['url' => "/association/francken-vrij", 'title' => 'Francken Vrij']
            ],
            'icon' => 'beer',
        ],
        [
            'url' => '/career',
            'title' => 'Career',
            'subItems' => [
                ['url' => "/career/job-openings", 'title' => 'Job openings'],
                ['url' => "/career/companies", 'title' => 'Company profiles'],
                ['url' => "/career/excursions", 'title' => 'Excursions']
            ],
            'icon' => 'briefcase',
        ],
    ]
];
