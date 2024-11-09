<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\CareerUser;
use App\Models\Course;
use App\Models\CourseYear;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;

class SchoolDataSeeder extends Seeder
{
    public function run(): void
    {
        $courses = Course::factory(10)->create();
        $date = now()->subYears(5);
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
                'short_name' => substr($startYear, -2),
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);
            $courseCount = fake()->numberBetween(6, 10);
            $courses->random($courseCount)->each(function ($course) use ($courseYear) {
                Career::factory()->createOne([
                    'course_year_id' => $courseYear,
                    'course_id' => $course,
                ]);
            });

            $date->addDay();
        }

        $randomCareers = Career::all('id')->random(UsersSeeder::MAX);

        User::all('*')->each(function ($user) use ($randomCareers) {
            CareerUser::factory()->createOne([
                'user_id' => $user->id,
                'career_id' => $randomCareers->pop(),
            ]);
        });

        $careerUsers = CareerUser::all('id');
        $subjects = Subject::factory(40)->create();
        Grade::factory(30)->create(function () use ($careerUsers, $subjects) {
            return [
                'career_user_id' => $careerUsers->random(),
                'subject_id' => $subjects->random(),
            ];
        });
        $courses->each(function ($course) use ($subjects) {
            $course->subjects()->saveMany($subjects->random(fake()->numberBetween(5, 15)));
        });
    }
}
