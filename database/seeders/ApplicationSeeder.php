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
                'git_path' => 'https://git-aws.sig.id/expro',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium aliquam molestiae eum. Necessitatibus veritatis, facere quia aut deleniti eius ullam rem ea ratione earum vel, obcaecati, officiis nobis enim. Dignissimos.',
                'image' => 'product09.png',
                'business_process' => 'digital reporting',
                'login_app' => 'User AD',
                'category' => 'turunan',
                'platform' => 'dekstop',
                'frontend' => 'laravel',
                'backend' => 'laravel',
                'web_server' => 'aktif',
                'db_server' => 'Aktif',
                'group_area' => 'SIG',
                'group' => 'collaboration',
                'database' => 'postgreSQL',
                'db_connection_path' => Str::random(10),
                'sap_connection_path' => Str::random(10),
                'status' => 'DOWN',
                'user_login' => Str::random(10),
                'notes' => Str::random(10),
            ]);

        }
    }
}
