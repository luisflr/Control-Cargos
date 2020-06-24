<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operativo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('openombre',100)->unique();
            $table->string('opeci',20)->unique();
            $table->timestamp('opefechanac');
            $table->integer('opeestado')->default(0);

            $table->integer('idcargo')->unsigned();
            $table->foreign('idcargo')->references('id')->on('cargo')
                ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('operativo');
    }
}
