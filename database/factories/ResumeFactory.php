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
                    "name" => $this->faker->name(),
                    "label" => $this->faker->jobTitle,
                    "picture" => "/storage/pictures/arch.png",
                    "email" => $this->faker->safeEmail,
                    "phone" => $this->faker->phoneNumber,
                    "website" => $this->faker->url,
                    "summary" => "A summary of John Doe...",
                    "location" => [
                        "adress" => "C/ de la piruleta nº 69",
                        "postalCode" => "29 200",
                        "city" => "Antequera",
                        "countryCode" => "ES",
                        "region" => "Málaga"
                    ],
                    "profiles" => [
                        [
                            "network" => "Linkedin",
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
                        "summary" => "Description...",
                        "highlights" => [
                            "Started the company"
                        ]
                    ]
                ],
                "education" => [
                    [
                        "institution" => "University",
                        "area" => "Software Development",
                        "studyType" => "Bachelor",
                        "startDate" => "2021-01-01",
                        "endDate" => "2022-04-01",
                        "gpa" => "8.0",
                        "courses" => [
                            "Courses UMA - Expert Docker"
                        ],
                    ]
                ],
                "awards" => [
                    [
                        "title" => "Award",
                        "date" => "2021-11-01",
                        "awarder" => "Company",
                        "summary" => "There is no spoon."
                    ]
                ],
                "skills" => [
                    [
                        "name" => "Web Development",
                        "level" => "Master",
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
