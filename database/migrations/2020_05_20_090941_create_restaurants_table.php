<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('r_id');
            $table->integer('r_restHolderId')
                ->comment('ID владельца ресторана');
            $table->string('r_name', 50)
                ->comment('Имя ресторана');
            $table->string('r_description', 500)
                ->comment('Описание ресторана');
            $table->string('r_picture')
                ->nullable()
                ->comment('Путь фото ресторана');
            $table->bigInteger('r_phone')
                ->nullable()
                ->comment('Телефо ресторана');
            $table->string('r_address')
                ->nullable()
                ->comment('Адресс ресторана');
            $table->string('r_site')
                ->nullable()
                ->comment('URL сайта ресторана');
            $table->string('r_email')
                ->nullable()
                ->comment('E-mail ресторана');
            $table->json('r_tables')
            ->comment('JSON со столами ресторанов');
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
        Schema::dropIfExists('restaurants');
    }
}
