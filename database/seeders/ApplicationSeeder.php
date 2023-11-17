<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 8; $i++) {

            DB::table('applications')->insert([
                'name' => Str::random(10),
                'url' => Str::random(10),
                'description' => Str::random(10),
                'image' => 'product07.png',
                'business_process' => Str::random(10),
                'login_app' => Str::random(10),
                'category' => Str::random(10),
                'turunan' => Str::random(10),
                'platform' => Str::random(10),
                'frontend' => Str::random(10),
                'backend' => Str::random(10),
                'web_server' => Str::random(10),
                'db_server' => Str::random(10),
                'ip_db' => Str::random(10),
                'group_area' => Str::random(10),
                'group' => Str::random(10),
                'priority' => Str::random(10),
                'impact' => Str::random(10),
                'ip' => Str::random(10),
                'ip_public' => Str::random(10),
                'database' => Str::random(10),
                'db_host' => Str::random(10),
                'db_connection_path' => Str::random(10),
                'sap_connection_path' => Str::random(10),
                'status' => 'UP',
                'migration_status' => Str::random(10),
                'user_login' => Str::random(10),
                'notes' => Str::random(10),
                'pic_id' => '2'
            ]);
        }
    }
}
