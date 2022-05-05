<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videodetails', function (Blueprint $table) {
            $table->id();
            $table->integer('video_id');
            $table->string('name');
            $table->string('info');
            $table->integer('hit')->default(0)->comment('izlenme sayısı');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->timestamps();
            $table->foreign('video_id')
            ->references('id')
            ->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videodetails');
    }
};
