<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use App\Models\Quiz;
use App\Models\Track;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Eloquent\Factories\Factory;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(adminseeder::class);
    }
}
