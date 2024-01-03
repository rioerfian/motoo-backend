<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VirtualMachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('virtual_machines')->insert([
                'name' => Str::random(30),
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit perspiciatis voluptate aperiam eum soluta, quidem, atque sed voluptatum culpa reiciendis facilis explicabo porro tempora fuga debitis, facere minima quas optio.',
                'environment' => 'production',
                'server_migration' => Str::random(10),
                'ip_address' => Str::random(10),
                'app_id' => 1
            ]);
           
        }
    }
}
