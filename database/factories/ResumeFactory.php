<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResumeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => "Testing",
            "content" => [
                "basics" => [
                    "name" => "Pepe Guapo Bonito",
                    "label" => "Junio Developer",
                    "picture" => "/storage/pictures/arch.png",
                    "email" => "pepe.guapo@gmail.com",
                    "phone" => "722 40 87 43",
                    "website" => "http://www.pepehub.com",
                    "summary" => "I am a php programmer looking for a company where I can develop my full potential.",
                    "location" => [
                        "adress" => "C/ de la piruleta nº 69",
                        "postalCode" => "29 200",
                        "city" => "Antequera",
                        "countryCode" => "ES",
                        "region" => "Málaga"
                    ],
                    "profiles" => [
                        [
                            "network" => "LinkedIn",
                            "username" => "Sognol",
                            "url" => "http://www.linkedin.com/sognol"
                        ]
                    ]
                ],
                "work" => [
                    [
                        "company" => "Google",
                        "position" => "Backend Develooper PHP",
                        "website" => "http://www.gooogle.es/developer",
                        "startDate" => "2021-01-01",
                        "endDate" => "2022-01-01",
                        "summary" => "I worked on the team that developed the new Google Stadia user interface.",
                        "highlights" => [
                            "I only lasted a month at Google, but I really enjoyed playing Stadia, before it was canceled and I was kicked out of the company."
                        ]
                    ]
                ],
                "education" => [
                    [
                        "institution" => "ITEC professional training",
                        "area" => "Software Development",
                        "studyType" => "Advanced technician",
                        "startDate" => "2020-09-09",
                        "endDate" => "2022-06-06",
                        "gpa" => "9.0",
                        "courses" => [
                            "Courses UMA - Expert Docker"
                        ],
                    ]
                ],
                "awards" => [
                    [
                        "title" => "Best Developer in LLeego",
                        "date" => "2022-11-01",
                        "awarder" => "Lleego",
                        "summary" => "The best developer in the company"
                    ]
                ],
                "skills" => [
                    [
                        "name" => "Backend Developer",
                        "level" => "Senior",
                        "keywords" => [
                            "PHP",
                            "Laravel",
                            "Symfony"
                        ]
                    ]
                ],
            ]
        ];
    }
}
