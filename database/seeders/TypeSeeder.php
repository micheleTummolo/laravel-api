<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Front-End', 'Back-End', 'Full Stack'];

        foreach($types as $type){
            $newType = new Type();

            $newType->type = $type;
            $newType->slug = Str::slug($newType->type, '-');

            $newType->save();
        }
    }
}
