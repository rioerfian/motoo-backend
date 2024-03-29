<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('applications')->insert([
                'name' => 'Excellent Production (EXPRO)',
                'url_prod' => 'https://expro.sig.id/',
                'url_dev' => 'https://dev-expro.sig.id/',
                'git_path' => Str::random(10),
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium aliquam molestiae eum. Necessitatibus veritatis, facere quia aut deleniti eius ullam rem ea ratione earum vel, obcaecati, officiis nobis enim. Dignissimos.',
                'image' => 'product09.png',
                'business_process' => 'digital reporting',
                'login_app' => Str::random(10),
                'category' => 'Turunan',
                'platform' => 'dekstop',
                'frontend' => 'laravel',
                'backend' => 'laravel',
                'web_server' => 'aktif',
                'db_server' => Str::random(10),
                'group_area' => 'SIG',
                'group' => 'Collaboration',
                'database' => Str::random(10),
                'db_connection_path' => Str::random(10),
                'sap_connection_path' => Str::random(10),
                'status' => 'DOWN',
                'user_login' => Str::random(10),
                'notes' => Str::random(10),
            ]);

            DB::table('applications')->insert([
                'name' => Str::random(10),
                'url_prod' => Str::random(10),
                'url_dev' => Str::random(10),
                'description' => Str::random(10),
                'image' => 'product06.png',
                'business_process' => Str::random(10),
                'login_app' => Str::random(10),
                'category' => Str::random(10),
                'platform' => 'website',
                'frontend' => Str::random(10),
                'backend' => Str::random(10),
                'web_server' => 'active',
                'db_server' => Str::random(10),
                'group_area' => Str::random(10),
                'group' => Str::random(10),
                'database' => Str::random(10),
                'db_connection_path' => Str::random(10),
                'sap_connection_path' => Str::random(10),
                'status' => 'UP',
                'user_login' => Str::random(10),
                'notes' => Str::random(10),
            ]);
        }
    }
}
