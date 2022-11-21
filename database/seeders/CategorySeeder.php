<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $objs = [
            ['daşky işler üçin niýetlenen akril boýagy.', 'для качественного экстерьера', 'for exterior works', ],
            ['icki işler üçin niýetlenen akril boýagy. ', 'для внутреннего интерьера. ', 'for interior works'],
            ['potolok işler üçin niýetlenen akril boýagy. ', 'для качественных потолочных работ. ', 'for ceiling works'],
            ['BIRKIM', 'BIRKIM', 'BIRKIM'],
            ['DURS', 'DURS', 'DURS'],
        ];
//
        foreach ($objs as $obj) {
            Category::create([
                'name_tm' => $obj[0],
                'name_ru' => $obj[1],
                'name_en' => $obj[2],
            ]);
        }
    }
}
