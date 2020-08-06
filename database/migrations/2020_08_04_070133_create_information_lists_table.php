<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('information_id')->index();
            $table->integer('sub_information_id')->nullable()->index();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->string('thumbnail');
            $table->string('file')->nullable();
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
        Schema::dropIfExists('information_lists');
    }
}
