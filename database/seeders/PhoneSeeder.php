<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Phone;
use App\Models\Person;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phones = [
            ['phoneable_id' =>1, 'ddi' => '55', 'ddd' => '61', 'number'=>'983117967'],
            ['phoneable_id' =>2, 'ddi' => '55', 'ddd' => '98', 'number'=>'991073804'],
            ['phoneable_id' =>4, 'ddi' => '55', 'ddd' => '66', 'number'=>'999893374'],
            ['phoneable_id' =>8, 'ddi' => '55', 'ddd' => '69', 'number'=>'981060066'],
            ['phoneable_id' =>9, 'ddi' => '55', 'ddd' => '13', 'number'=>'988051966'],
            ['phoneable_id' =>15, 'ddi' => '55', 'ddd' => '91', 'number'=>'989164439'],
            ['phoneable_id' =>16, 'ddi' => '55', 'ddd' => '97', 'number'=>'991441213'],
            ['phoneable_id' =>17, 'ddi' => '55', 'ddd' => '61', 'number'=>'981082507'],
            ['phoneable_id' =>19, 'ddi' => '55', 'ddd' => '94', 'number'=>'981409440'],
            ['phoneable_id' =>21, 'ddi' => '55', 'ddd' => '92', 'number'=>'993442390'],
            ['phoneable_id' =>24, 'ddi' => '55', 'ddd' => '62', 'number'=>'984443530'],
            ['phoneable_id' =>25, 'ddi' => '55', 'ddd' => '61', 'number'=>'981662765'],
            ['phoneable_id' =>26, 'ddi' => '55', 'ddd' => '94', 'number'=>'981418644'],
            ['phoneable_id' =>27, 'ddi' => '55', 'ddd' => '61', 'number'=>'981456073'],
            ['phoneable_id' =>28, 'ddi' => '55', 'ddd' => '66', 'number'=>'984131792'],
            ['phoneable_id' =>30, 'ddi' => '55', 'ddd' => '62', 'number'=>'985789938'],
            ['phoneable_id' =>32, 'ddi' => '55', 'ddd' => '92', 'number'=>'981485554'],
            ['phoneable_id' =>36, 'ddi' => '55', 'ddd' => '12', 'number'=>'996379788'],
            ['phoneable_id' =>37, 'ddi' => '55', 'ddd' => '67', 'number'=>'999589577'],
            ['phoneable_id' =>38, 'ddi' => '55', 'ddd' => '66', 'number'=>'996203472'],
            ['phoneable_id' =>42, 'ddi' => '55', 'ddd' => '61', 'number'=>'981252840'],
            ['phoneable_id' =>43, 'ddi' => '55', 'ddd' => '61', 'number'=>'981031560'],
            ['phoneable_id' =>46, 'ddi' => '55', 'ddd' => '61', 'number'=>'983646704'],
            ['phoneable_id' =>47, 'ddi' => '55', 'ddd' => '91', 'number'=>'982110658'],
            ['phoneable_id' =>48, 'ddi' => '55', 'ddd' => '67', 'number'=>'077626494'],
            ['phoneable_id' =>49, 'ddi' => '55', 'ddd' => '93', 'number'=>'992149294'],
            ['phoneable_id' =>50, 'ddi' => '55', 'ddd' => '24', 'number'=>'56543420'],
            ['phoneable_id' =>51, 'ddi' => '55', 'ddd' => '66', 'number'=>'984634532'],
            ['phoneable_id' =>52, 'ddi' => '55', 'ddd' => '95', 'number'=>'981240444'],
            ['phoneable_id' =>53, 'ddi' => '55', 'ddd' => '66', 'number'=>'984271647'],
            ['phoneable_id' =>55, 'ddi' => '55', 'ddd' => '67', 'number'=>'077626495'],
            ['phoneable_id' =>56, 'ddi' => '55', 'ddd' => '11', 'number'=>'941479788'],
            ['phoneable_id' =>57, 'ddi' => '55', 'ddd' => '61', 'number'=>'982425511'],
            ['phoneable_id' =>58, 'ddi' => '55', 'ddd' => '32', 'number'=>'988209591'],
            ['phoneable_id' =>61, 'ddi' => '55', 'ddd' => '61', 'number'=>'982095850'],
            ['phoneable_id' =>64, 'ddi' => '55', 'ddd' => '66', 'number'=>'984335423'],
            ['phoneable_id' =>65, 'ddi' => '55', 'ddd' => '62', 'number'=>'981640861'],
            ['phoneable_id' =>66, 'ddi' => '55', 'ddd' => '91', 'number'=>'981987510'],
            ['phoneable_id' =>67, 'ddi' => '55', 'ddd' => '91', 'number'=>'988468614'],
            ['phoneable_id' =>68, 'ddi' => '55', 'ddd' => '27', 'number'=>'670462653'],
            ['phoneable_id' =>69, 'ddi' => '55', 'ddd' => '91', 'number'=>'980431220'],
            ['phoneable_id' =>70, 'ddi' => '55', 'ddd' => '69', 'number'=>'993923038'],
            ['phoneable_id' =>71, 'ddi' => '55', 'ddd' => '11', 'number'=>'958989387'],
            ['phoneable_id' =>72, 'ddi' => '55', 'ddd' => '61', 'number'=>'996567731'],
            ['phoneable_id' =>73, 'ddi' => '55', 'ddd' => '87', 'number'=>'998095778'],
            ['phoneable_id' =>74, 'ddi' => '55', 'ddd' => '61', 'number'=>'098091102'],
            ['phoneable_id' =>79, 'ddi' => '55', 'ddd' => '47', 'number'=>'999614005'],
            ['phoneable_id' =>82, 'ddi' => '55', 'ddd' => '11', 'number'=>'977731209'],
            ['phoneable_id' =>83, 'ddi' => '55', 'ddd' => '24', 'number'=>'56326928'],
            ['phoneable_id' =>84, 'ddi' => '55', 'ddd' => '61', 'number'=>'983348446'],
            ['phoneable_id' =>87, 'ddi' => '55', 'ddd' => '61', 'number'=>'982704520'],
            ['phoneable_id' =>90, 'ddi' => '55', 'ddd' => '91', 'number'=>'9841609380'],
            ['phoneable_id' =>91, 'ddi' => '55', 'ddd' => '61', 'number'=>'981630855'],
            ['phoneable_id' =>92, 'ddi' => '55', 'ddd' => '93', 'number'=>'992210717'],
            ['phoneable_id' =>93, 'ddi' => '55', 'ddd' => '61', 'number'=>'984987304'],
            ['phoneable_id' =>94, 'ddi' => '55', 'ddd' => '87', 'number'=>'998095778'],
            ['phoneable_id' =>95, 'ddi' => '55', 'ddd' => '61', 'number'=>'983200966'],
            ['phoneable_id' =>96, 'ddi' => '55', 'ddd' => '62', 'number'=>'991999873'],
            ['phoneable_id' =>97, 'ddi' => '55', 'ddd' => '67', 'number'=>'575978987'],
            ['phoneable_id' =>98, 'ddi' => '55', 'ddd' => '91', 'number'=>'991463361'],
            ['phoneable_id' =>99, 'ddi' => '55', 'ddd' => '61', 'number'=>'981174871'],
            ['phoneable_id' =>102, 'ddi' => '55', 'ddd' => '64', 'number'=>'981142022'],
            ['phoneable_id' =>103, 'ddi' => '55', 'ddd' => '61', 'number'=>'985632220'],
            ['phoneable_id' =>105, 'ddi' => '55', 'ddd' => '91', 'number'=>'982940869'],
            ['phoneable_id' =>106, 'ddi' => '55', 'ddd' => '61', 'number'=>'981535959'],
            ['phoneable_id' =>108, 'ddi' => '55', 'ddd' => '95', 'number'=>'984017736'],
            ['phoneable_id' =>109, 'ddi' => '55', 'ddd' => '61', 'number'=>'991529229'],
            ['phoneable_id' =>111, 'ddi' => '55', 'ddd' => '62', 'number'=>'981266190'],
            ['phoneable_id' =>114, 'ddi' => '55', 'ddd' => '22', 'number'=>'677701851'],
            ['phoneable_id' =>115, 'ddi' => '55', 'ddd' => '61', 'number'=>'981190926'],
            ['phoneable_id' =>116, 'ddi' => '55', 'ddd' => '91', 'number'=>'992331388'],
            ['phoneable_id' =>117, 'ddi' => '55', 'ddd' => '58', 'number'=>'4124844842'],
            ['phoneable_id' =>118, 'ddi' => '55', 'ddd' => '91', 'number'=>'992901388'],
            ['phoneable_id' =>119, 'ddi' => '55', 'ddd' => '61', 'number'=>'982224983'],
        ];

        foreach ($phones as $phone) {
            $phone['phoneable_type'] = Person::class;
            $phone['phonetype_id'] = 1;
            Phone::factory(1)->create($phone);
        }

    }
}
