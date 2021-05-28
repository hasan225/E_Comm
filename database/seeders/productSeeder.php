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
             'name'=> 'Asus Zenphone Max Pro M2',
             'price'=> '17500tk',
             'description'=> "it's a shitty smartphone made by asus",
             'category'=> 'Mobile',
             'gallery'=> 'https: //cdn57.androidauthority.net/wp-content/uploads/2018/12/asus-zenfone-max-pro-m2-1.jpg'
        ],
             [
             'name'=> 'Kodak 43FHDXPRO Smart TV ',
             'price'=> '43500tk',
             'description'=> "AFFORDABLE BUT NOT EXCEPTIONAL",
             'category'=> 'Tv',
             'gallery'=> 'https: //techlife.news/wp-content/uploads/2020/01/kodak-android-tv-718x401.jpg'
        ],
             [
             'name'=> 'Lenovo IdeaPad',
             'price'=> '79500tk',
             'description'=> "Slim 3i 10th Gen Core i5 14 FHD Laptop with Windows 10",
             'category'=> 'laptop',
             'gallery'=> 'https: //cdn.mos.cms.futurecdn.net/vEcELHdn998wRTcCzqV5m9-1024-80.jpg.webp'
        ],
             [
             'name'=> 'T55 Smart watch (SM0097)',
             'price'=> '11500tk',
             'description'=> "SMart watch",
             'category'=> 'smart watch',
             'gallery'=> 'https: //www.shopkeepersmarket.com/wp-content/uploads/2021/01/2_71.jpg'
        ],
             [
             'name'=> 'Gaming PC 10th Gen Core i5-10400f',
             'price'=> '70500tk',
             'description'=> "The customized Gaming PC 10th Gen Core i5-10400f Desktop PC comes with Intel 10th Gen Core i5-10400F Processor, ASRock B460M Pro4 10th Gen DDR4 Motherboard,",
             'category'=> 'PC',
             'gallery'=> 'https: //www.startech.com.bd/image/cache/catalog/desktop-pc/gaming-pc/i5-10400f/10th-gen-i5-10400f-500x500.jpg'
        ],
        ]

);
    }
}
