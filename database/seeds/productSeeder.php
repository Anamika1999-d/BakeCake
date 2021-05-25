<?php

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
        DB::table('products')->insert([
            [
                'name'=>'Chocolate Oreo Cake',
                'priceForhalfkg'=>'350',
                'priceFor1kg'=>'550',
                'priceFor1halfkg'=>'1050',
                'priceFor2kg'=>'1250',
                'category'=>'chocolate cake',
                'detail'=>'1kg , Oreo Cake',
                'gallery'=>'https://www.lifeloveandsugar.com/wp-content/uploads/2015/02/Chocolate-Oreo-Cake2.jpg'
            ],
            [
                'name'=>'Daisy Vanilla Cake',
                'priceForhalfkg'=>'350',
                'priceFor1kg'=>'550',
                'priceFor1halfkg'=>'950',
                'priceFor2kg'=>'1150',
                'category'=>'Vanlla cake',
                'detail'=>'1kg , Vanlla Cake',
                'gallery'=>'https://i.pinimg.com/564x/be/7c/e7/be7ce73ac501a84e638e41846d7fab05.jpg'
            ],
            [
                'name'=>'Blue Rose Birthday cake',
                'priceForhalfkg'=>'550',
                'priceFor1kg'=>'1000',
                'priceFor1halfkg'=>'1250',
                'priceFor2kg'=>'2250',
                'category'=>'Birthday cake',
                'detail'=>'1kg , creamy Cake',
                'gallery'=>'https://i.pinimg.com/564x/dc/67/de/dc67de8a03f249e37098340684726338.jpg'
            ],
            [
                'name'=>'Vanilla Butterfly  cake',
                'priceForhalfkg'=>'850',
                'priceFor1kg'=>'1250',
                'priceFor1halfkg'=>'1750',
                'priceFor2kg'=>'2350',
                'category'=>'Birthday cake',
                'detail'=>'1.5kg , eggless Cake',
                'gallery'=>'https://i.pinimg.com/564x/e9/a8/bf/e9a8bf89a060d0e246729c60868db51b.jpg'
            ],
            [
                'name'=>'Rainbow cake',
                'priceForhalfkg'=>'850',
                'priceFor1kg'=>'1050',
                'priceFor1halfkg'=>'1500',
                'priceFor2kg'=>'2050',
                'category'=>'Designer cake',
                'detail'=>'1.5kg , egg Cake',
                'gallery'=>'https://storcpdkenticomedia.blob.core.windows.net/media/recipemanagementsystem/media/recipe-media-files/recipes/retail/desktopimages/rainbow-cake600x600_2.jpg?ext=.jpg'
            ],
            [
                'name'=>'white Strawberry cake ',
                'priceForhalfkg'=>'850',
                'priceFor1kg'=>'1350',
                'priceFor1halfkg'=>'1600',
                'priceFor2kg'=>'2600',
                'category'=>'Birthday cake',
                'detail'=>'1.5kg , egg Cake',
                'gallery'=>'https://storcpdkenticomedia.blob.core.windows.net/media/recipemanagementsystem/media/recipe-media-files/recipes/retail/desktopimages/rainbow-cake600x600_2.jpg?ext=.jpg'
            ],
            [
                'name'=>'white and red rosey cake ',
                'priceForhalfkg'=>'550',
                'priceFor1kg'=>'1050',
                'priceFor1halfkg'=>'1200',
                'priceFor2kg'=>'1900',
                'category'=>'Birthday cake',
                'detail'=>'1.5kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/564x/29/98/f6/2998f6b87fee8b0fb2598148318692fd.jpg'
            ],
            [
                'name'=>'Corn Cake ',
                'priceForhalfkg'=>'750',
                'priceFor1kg'=>'1380',
                'priceFor1halfkg'=>'1910',
                'priceFor2kg'=>'2700',
                'category'=>'Birthday cake',
                'detail'=>'1.5kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/474x/79/2f/75/792f75e219665068d908e1d939f32429.jpg'
            ],
            [
                'name'=>'Chocolate icecream Overloaded Cake ',
                'priceForhalfkg'=>'1050',
                'priceFor1kg'=>'2050',
                'priceFor1halfkg'=>'3050',
                'priceFor2kg'=>'3950',
                'category'=>'Birthday cake',
                'detail'=>'2kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/564x/75/be/e0/75bee0a71374a80a1ae77d7bce0d9f9c.jpg'
            ],
            [
                'name'=>'Lovely Pink Birthday Cake ',
                'priceForhalfkg'=>'700',
                'priceFor1kg'=>'1400',
                'priceFor1halfkg'=>'1900',
                'priceFor2kg'=>'2300',
                'category'=>'Birthday cake',
                'detail'=>'2kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/474x/46/59/0a/46590a2b717eb315b61fc3678beca784.jpg'
            ],
            [
                'name'=>'Chocolate bar  Cake ',
                'priceForhalfkg'=>'1500',
                'priceFor1kg'=>'2500',
                'priceFor1halfkg'=>'3000',
                'priceFor2kg'=>'5500',
                'category'=>'Chocolate cake',
                'detail'=>'2kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/564x/ca/4f/12/ca4f120083049ce0132e788aff903ac9.jpg'
            ],
            [
                'name'=>'Chocolate bar Overloaded Cake ',
                'priceForhalfkg'=>'1800',
                'priceFor1kg'=>'2900',
                'priceFor1halfkg'=>'3800',
                'priceFor2kg'=>'5500',
                'category'=>'Chocolate cake',
                'detail'=>'2kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/474x/fc/61/2e/fc612efba7bcd6e1de502333906b1c6b.jpg'
            ],
            [
                'name'=>'Chocolate Bar 27 Cake ',
                'priceForhalfkg'=>'1000',
                'priceFor1kg'=>'2000',
                'priceFor1halfkg'=>'3000',
                'priceFor2kg'=>'4000',
                'category'=>'Birthday cake',
                'detail'=>'2kg , egg Cake',
                'gallery'=>'https://i.pinimg.com/474x/39/10/86/391086e6a01857882f3ab817d6338bd7.jpg'
            ],
            [
                'name'=>'Princess Wedding Cake ',
                'priceForhalfkg'=>'1800',
                'priceFor1kg'=>'2700',
                'priceFor1halfkg'=>'3400',
                'priceFor2kg'=>'4300',
                'category'=>'Wedding cake',
                'detail'=>'2kg ,2 layer, egg Cake',
                'gallery'=>'https://i.pinimg.com/564x/15/65/2b/15652b7b9f6a86ecc5cb7d0635cc4734.jpg'
            ],
            [
                'name'=>'Flowery Wedding Cake ',
                'priceForhalfkg'=>'3800',
                'priceFor1kg'=>'5500',
                'priceFor1halfkg'=>'7600',
                'priceFor2kg'=>'9000',
                'category'=>'Wedding cake',
                'detail'=>'5kg ,3 layer, egg Cake',
                'gallery'=>'https://i.pinimg.com/474x/6d/50/26/6d5026aa1fe3220d5955ca1b2a023c36.jpg'
            ],





            


        ]);
    }
}
