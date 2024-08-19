<?php

namespace Database\Seeders;
use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class create_datas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Aromal',
            'phone'=>'3445868638',
            'address'=>'MANJERI',
            'dob'=>'2014-01-21',
            'status'=>rand(1,2),
            
        ]
        );

    
   
        User::create([
            'name'=>'Roopa',
            'phone'=>'827387778',
            'address'=>'kochi',
            'dob'=>'2003-05-26',
            'status'=>rand(1,2),
            
        ]
        );
    }

}