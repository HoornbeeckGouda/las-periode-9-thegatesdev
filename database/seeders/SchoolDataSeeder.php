<?php

namespace Database\Seeders;

use App\Models\CourseYear;
use Illuminate\Database\Seeder;

class SchoolDataSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedCourseYears();
    }


    private function seedCourseYears(): void
    {
        $date = now();
        if ($date->month < 8) $date->subYear();
        $date->setMonth(8)->setDay(1);

        for ($i = 0; $i < 5; $i++) {
            $startYear = $date->format('Y');
            $startDate = $date->format('Y-m-d');
            $date->addYear()->subDay();
            $endYear = $date->format('Y');
            $endDate = $date->format('Y-m-d');

            CourseYear::factory()->createOne([
                'name' => "$startYear-$endYear",
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);

            $date->addDay();
        }
    }
}
