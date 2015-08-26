<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('season_id')->unsigned();
			$table->foreign('season_id')->references('id')->on('seasons');
            $table->integer('hometeam_id')->unsigned();
			$table->foreign('hometeam_id')->references('id')->on('teams');
            $table->integer('awayteam_id')->unsigned();
			$table->foreign('awayteam_id')->references('id')->on('teams');
            $table->integer('home_score');
            $table->integer('away_score');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('games');
	}

}
