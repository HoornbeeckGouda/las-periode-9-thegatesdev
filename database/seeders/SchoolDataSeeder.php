<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Course;
use App\Models\CourseYear;
use Illuminate\Database\Seeder;

class SchoolDataSeeder extends Seeder
{
    public function run(): void
    {
        Course::factory(10)->create();
        $date = now();
        if ($date->month < 8) $date->subYear();
        $date->setMonth(8)->setDay(1);

        for ($i = 0; $i < 5; $i++) {
            $startYear = $date->format('Y');
            $startDate = $date->format('Y-m-d');
            $date->addYear()->subDay();
            $endYear = $date->format('Y');
            $endDate = $date->format('Y-m-d');

            $courseYear = CourseYear::factory()->createOne([
                'name' => "$startYear-$endYear",
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);
            $courseCount = fake()->numberBetween(6, 10);
            Course::all('id')->random($courseCount)->each(function ($course) use ($courseYear) {
                Career::factory()->createOne([
                    'course_year_id' => $courseYear,
                    'course_id' => $course,
                ]);
            });

            $date->addDay();
        }
    }
}
