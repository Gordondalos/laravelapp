<?php

use Illuminate\Database\Seeder;
use App\Queryfixer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(PohotoManagerSeeder::class);
    }
}


class PohotoManagerSeeder extends Seeder {

	public function run()
	{
		DB::table('queryfixers')->delete();

// обращаемся к модели Queryfixer
		Queryfixer::create(
			[
			'client' => 'Василий Теркин',
			'number' => '200',
			'partner' => '12',
			'shop' => 'amason.com',
			'data_query' => '2016-09-01',
			'photos' => '',
			'published_at' => DB::raw('NOW()'), // для DateTime
//
		]);

		Queryfixer::create([
			'client' => 'Василий Пупкин',
			'number' => '201',
			'partner' => '13',
			'shop' => 'TaoBao.com',
			'data_query' => '2016-09-01',
			'photos' => '',
			'published_at' => DB::raw('NOW()'), // для DateTime
		]);

		Queryfixer::create([
			'client' => 'Петров Петр Петрович',
			'number' => '203',
			'partner' => '16',
			'shop' => 'watch.com',
			'data_query' => '2016-09-04',
			'photos' => '',
			'published_at' => DB::raw('NOW()'), // для DateTime
		]);

		Queryfixer::create([
			'client' => 'Иванов Иван Иванович',
			'number' => '202',
			'partner' => '14',
			'shop' => 'TaoBao.com',
			'data_query' => '2016-09-02',
			'photos' => '',
			'published_at' => DB::raw('NOW()'), // для DateTime
		]);
	}
}
