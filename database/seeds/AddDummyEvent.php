<?php

use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['title'=>'Finacial forum', 'start_date'=>'2017-10-12', 'end_date'=>'2017-09-15','user_id'=>'2'],
            ['title'=>'Devtalk', 'start_date'=>'2017-10-13', 'end_date'=>'2017-09-25','user_id'=>'2'],
            ['title'=>'Super Event', 'start_date'=>'2017-09-23', 'end_date'=>'2017-09-24','user_id'=>'1'],
            ['title'=>'wtf event', 'start_date'=>'2017-09-19', 'end_date'=>'2017-09-27','user_id'=>'3'],
           ];
           \DB::table('attendances')->insert($data);
    }
}
