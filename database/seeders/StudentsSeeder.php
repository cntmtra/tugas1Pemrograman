<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        db::table('students')->insert([
            
            'id' => '1',
            'name' => 'cinta',
            'age' => '19',
            'classroom' => 'A'
        ]
        );

        db::table('students')->insert([
            'id'=>'2',
            'name'=>'mutiara',
            'age'=> '20',
            'classroom'=> 'B'
        ]);
        
        db::table('students')->insert([
            'id' => '3',
            'name' => 'putri',
            'age' => '21',
            'classroom' => 'C'
        ]);

        db::table('students')->insert([
            'id' => '4',
            'name' => 'sinuraya',
            'age' => '19',
            'classroom' => 'D'
        ]);
        
        db::table('students')->insert([
            'id' => '5',
            'name' => 'ara',
            'age' => '19',
            'classroom' => 'E'
        ]);
    }
}
