<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            
            [
                'role_name' => 'admin',
                'created_at' => Carbon::now(),
            ],
            
            [
                'role_name' => 'employee', 
                'created_at' => Carbon::now(),
            ],
            
            [
                'role_name' => 'client', 
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
