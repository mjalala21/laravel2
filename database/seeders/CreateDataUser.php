<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateDataUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Rajeev',
            'phone'=>'8273877709',
            'address'=>'idukki',
            'dob'=>'2003-05-31',
            'status'=>rand(1,2),
            
        ]
        );
    }
}
