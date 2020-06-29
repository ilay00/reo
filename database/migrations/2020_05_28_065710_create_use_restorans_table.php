<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseRestoransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_restorans', function (Blueprint $table) {
        $table->bigIncrements('id');

         $table->unsignedBigInteger('use_adminsId')->unsigned()->default(2);



            $table->string('title', 50);
            $table->string('description', 500);
 $table->integer('inn');
            $table->bigInteger('useRest_phone')
                ->nullable();
            $table->string('address')
                ->nullable();
            $table->string('site')
                ->nullable();
            $table->string('useRest_email')
                  ->nullable();
            $table->Integer('col_board');
            $table->string('kitchen',500);
           
            $table->timestamps();
           $table->foreign('use_adminsId')->references('id')->on('use_admins')->unsigned();




               

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('use_restorans');
    }
}
