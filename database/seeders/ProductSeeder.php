<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $objs = [

            [
                'category_id' => 1,
                'name' => '“Dürs” ýokary hilli daşky işler üçin niýetlenen akril boýagy.',
                'description' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                                          Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                                          Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'image' => 'Luks-imulsiya-wedra_01.png',
            ],
//
        ];
        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'name' => $obj['name'],
                'description' => $obj['description'],
                'image' => $obj['image']
            ]);

            }
        }
//
}
