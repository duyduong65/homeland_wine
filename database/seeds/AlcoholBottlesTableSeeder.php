<?php

use App\AlcoholBottle;
use Illuminate\Database\Seeder;

class AlcoholBottlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alcoholBottle = new AlcoholBottle();
        $alcoholBottle->name = "Nếp cái hoa vàng";
        $alcoholBottle->price = 5;
        $alcoholBottle->origin = "Dương'House";
        $alcoholBottle->description = "rượu ngon chất lượng, khử độc, uống không đau đầu";
        $alcoholBottle->image = "upload/nep_cai_hoa_vang.png";
        $alcoholBottle->save();

        $alcoholBottle = new AlcoholBottle();
        $alcoholBottle->name = "Chuối hột";
        $alcoholBottle->price = 6;
        $alcoholBottle->origin = "Dương'House";
        $alcoholBottle->description = "rượu ngon chất lượng, khử độc, uống không đau đầu";
        $alcoholBottle->image = "upload/chuoi_hot.jpg";
        $alcoholBottle->save();

        $alcoholBottle = new AlcoholBottle();
        $alcoholBottle->name = "Ba kích";
        $alcoholBottle->price = 6;
        $alcoholBottle->origin = "Dương'House";
        $alcoholBottle->description = "rượu ngon chất lượng, khử độc, uống không đau đầu";
        $alcoholBottle->image = "upload/ba-kich.jpg";
        $alcoholBottle->save();
    }
}
