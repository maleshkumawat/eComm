<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
               [ 'name' => 'Galaxy S21 5G',
                'price' => '69999.00',
                'category' => 'Mobile',
                'gallery' => 'https://i.gadgets360cdn.com/large/samsung_galaxy_s21_ultra_5g_first_impressions_cameras_1611214488657.jpg',
                'description' => 'Best 8GB ram, 5000 MAH bettery backup',
            ],

            [ 'name' => 'honer-magicbook-15',
            'price' => '54999.00',
            'category' => 'laptop',
            'gallery' => 'https://i.gadgets360cdn.com/products/large/Honor-magicbook-15-DB-800x800-1596186227.jpg?downsize=*:180&output-quality=80&output-format=webp',
            'description' => 'light weight laptop best honer laptop',
            ],

            [ 'name' => 'Dell computers 2021',
            'price' => '10100.00',
            'category' => 'computer',
            'gallery' => 'https://image.shutterstock.com/image-photo/dell-monitor-computer-ukraine-kiev-260nw-772652092.jpg',
            'description' => 'Computer world best ,master in computer',
            ],

            [ 'name' => 'HP new Printer',
            'price' => '31000.00',
            'category' => 'printer',
            'gallery' => 'https://www.shutterstock.com/image-photo/jakarta-indonesia-january-22-2019-printer-1291215679',
            'description' => 'Printer ,HP best printer 2021',
             ],

             [ 'name' => 'HP scanner',
             'price' => '35300.00',
             'category' => 'scanner',
             'gallery' => 'http://www.hp.com/united-states/consumer/digital_photography/scanning/tips/images/improve_photos_CS612_4.jpg',
             'description' => 'scanner 2021,best of 2021',
           ],
        ]);
    }
}
