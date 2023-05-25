<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['progetti di ricerca e sviluppo', 'progetti organizzativi', 'progetti di investimento', 'interni', 'esterni o su commissione'];

        Schema::disableForeignKeyConstraints();
        Type::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Str::slug($new_type->name);
            $new_type->save();
        }
    }
}
