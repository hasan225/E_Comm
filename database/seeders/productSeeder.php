<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table( 'products' )->insert([
             [
             'name'=> 'Asus Zenphone Max Pro M1',
             'price'=> '17500tk',
             'description'=> "it's another shitty smartphone made by asus",
             'category'=> 'Mobile',
             'gallery'=> 'https: //www.mobiledokan.co/wp-content/uploads/2019/02/Asus-Zenfone-Max-Pro-M1-ZB601KL-ZB602K.jpg'
        ],
             [
             'name'=> 'Kodak 43FHDXPRO Smart TV ',
             'price'=> '43500tk',
             'description'=> "AFFORDABLE BUT NOT EXCEPTIONAL",
             'category'=> 'Tv',
             'gallery'=> 'https: //images.firstpost.com/wp-content/uploads/large_file_plugin/2019/08/1567063219_43FHDXPRO.jpg'
        ],
             [
             'name'=> 'Lenovo IdeaPad',
             'price'=> '79500tk',
             'description'=> "Slim 3i 10th Gen Core i5 14 FHD Laptop with Windows 10",
             'category'=> 'laptop',
             'gallery'=> 'https: //www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3i/ideapad-slim-3i-001-500x500.jpg'
        ],
             [
             'name'=> 'T55 Smart watch (SM0097)',
             'price'=> '11500tk',
             'description'=> "T55 Smart Watch is a perfect and most high graded copy of Apple Watch Series 5 (a master clone). This smartwatch has all the next level features one ...",
             'category'=> 'smart watch',
             'gallery'=> 'https: //www.shopkeepersmarket.com/wp-content/uploads/2021/01/2_71.jpg'
        ],]

);
    }
}
