<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_admins', function (Blueprint $table) {
          $table->bigIncrements('id');
            $table->integer('userId')->unsigned()->default(1);
         // $table->integer('use_restoransId')->unsigned()->default(3);
           
            $table->string('admin_name');
            $table->string('patronymic');
            $table->string('family');
            $table->string('admin_email');
            $table->bigInteger('phone');
            $table->string('Photo_file');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')->unsigned();



           
 

                  
 //$table->dropForeign('use_adminsId');


         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('use_admins');
    }
}
