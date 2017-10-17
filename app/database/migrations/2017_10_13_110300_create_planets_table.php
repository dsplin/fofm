<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanetsTable extends Migration {

	public function up()
	{
		Schema::create('planets', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('x');
			$table->integer('y');
			$table->smallInteger('level')->index()->unsigned();
			//->index('state');	Добавляет простой индекс;
			$table->enum ('sector', ['alpha', 'beta', 'gamma', 'delta', 'x'])->index();
			$table->string ('star')->index();
			$table->string ('system')->index();
			$table->string ('planet')->index();
			$table->enum ('biome', [
				'arid',
				'asteroid',
				'desert',
				'forest',
				'grasslands',
				'jungle',
				'magma',
				'moon',
				'savannah',
				'snow',
				'tentacle',
				'tundra',
				'volcano'])->index();
			$table->enum ('version', ['enraged_koala'])->index();
			$table->enum ('os', ['windows', 'linux', 'mac'])->index();
			$table->text ('comment');
			$table->integer('user_id')->nullable()->index()->unsigned();
			$table->integer('views')->nullable()->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('planets');
	}

}
