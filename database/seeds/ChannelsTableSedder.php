<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name'=>'Laravel 5.8',
            'slug'=>str_slug('Laravel 5.8')
        ]);
        Channel::create([
            'name'=>'Vue js 3',
            'slug'=>str_slug('Vue js 3')
        ]);
        Channel::create([
            'name'=>'Php',
            'slug'=>str_slug('Php')
        ]);
        Channel::create([
            'name'=>'Python',
            'slug'=>str_slug('Python')
        ]);

    }
}
