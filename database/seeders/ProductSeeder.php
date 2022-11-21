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
                'brand_id' => 1,
                'name_tm' => '“Dürs” ýokary hilli ',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 1.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 1,
                'name_tm' => '“Dürs” ýokary hilli ',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 2.png',
            ],
            [
                'category_id' => 3,
                'brand_id' => 1,
                'name_tm' => '“Dürs” ýokary hilli ',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 3.png',
            ],
            [
                'category_id' => 1,
                'brand_id' => 2,
                'name_tm' => '“Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 4.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 2,
                'name_tm' => 'quality “Durs” acrylic paint.',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 5.png',
            ],
            [
                'category_id' => 3,
                'brand_id' => 2,
                'name_tm' => '“Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 6.png',
            ],
            [
                'category_id' => 3,
                'brand_id' => 3,
                'name_tm' => '“Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 7.png',
            ],
            [
                'category_id' => 1,
                'brand_id' => 3,
                'name_tm' => '"Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 4.png',
            ],
            [
                'category_id' => 1,
                'brand_id' => 3,
                'name_tm' => '“Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 9.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 3,
                'name_tm' => '“Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 3.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 3,
                'name_tm' => '“Durs”',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 5.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 5,
                'name_tm' => '"Durs"',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 5.png',
            ],
            [
                'category_id' => 2,
                'brand_id' => 5,
                'name_tm' => '"Durs"',
                'name_ru' => '“Dürs” Акриловая краска для ',
                'name_en' => 'High-quality “Durs” acrylic paint',
                'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
                'image' => 'Splashes 5.png',
            ],
            [
            'category_id' => 2,
            'brand_id' => 5,
            'name_tm' => '"Durs"',
            'name_ru' => '“Dürs” Акриловая краска для ',
            'name_en' => 'High-quality “Durs” acrylic paint',
            'description_tm' => 'Sarp edilişi. Bir gatlakda 1 inedördül metr
                    üçin 110-150 g boýag sarp edilýär. Sarp ediliş üstüniň taýýarlygyndan we çalynyş usulyna baglylykda üýtgeýär.
                    Ulanyş we häsiýetleri: adaty ulanyş, ýaşaýyş otaglaryň we dürli diwarlar üçin ulanylýan ak ýalpyldysyz reňkli boýag. 
                    Ulanylmazdan öň boýag gowy edip garylýar.  Öz agramynyň 5-10 % -ine barabar suw bilen garmak mümkindir. Işleriniň 
                    amala aşyrylýan döwründe we ondan 24 sagat soňunda temperatura +5 ̊C-dan pes bolmaly däldir. Doly guraýyş wagty 24 sagatdyr.',
                'description_ru' => 'Расход. На один слой расходуется 110-150 г краски на 1 кв.м. Расход варьируется в зависимости от 
                    подготовки поверхности и метода использования. 
                    Применение и свойства: Белая глянцевая краска для обычного применения для жилых комнат и различных стен.
                    Краску перед использованием хорошо перемешать. Можно смешать 5-10% его веса с водой. Температура во время 
                    работы и 24 часа после нее не должна быть ниже +5 ̊C. Полное время высыхания - 24 часа.',
                'description_en' => 'Consumption: 100-150 gr paint is consumed for 1 m2 on one layer. Consumption changes according 
                    to preparation of surface and applying method.  
                    Usage and types: normal usage, white dull colored paint used for inhabited rooms and various walls.  
                    Paint is mixed well before usage. The paint can be mixed with water that is equal to 5-10 % of its weight. 
                    Temperature shouldn’t be below +5oC during execution of works and at the end of 24 hours after painting. 
                    Complete drying time is 24 hours.',
            'image' => 'Splashes 5.png',
        ],

        ];
        foreach ($objs as $obj) {
            Product::create([
                'category_id' => $obj['category_id'],
                'brand_id' => $obj['brand_id'],
                'name_tm' => $obj['name_tm'],
                'name_ru' => $obj['name_ru'],
                'name_en' => $obj['name_en'],
                'description_tm' => $obj['description_tm'],
                'description_ru' => $obj['description_ru'],
                'description_en' => $obj['description_en'],
                'image' => $obj['image']
            ]);

//            foreach ($i = 0; $i < count($objs); $i++) {
//                Product::create([
//
//                ]);
//            }
            }
        }
//
}
