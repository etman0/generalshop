<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 
namespace Database\Seeds;

namespace Database\Seeder;
namespace Database\Seeder\User;
/*
namespace Database\Seeds;
use Database\Seeder;

namespace Database\Seeder\User;
use Database\Seeder\User;

namespace Database\Seeders\User;
use Database\Seeders\User;

Use DB;*/
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
    }
}
