<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->index();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->string('file')->nullable();
            $table->string('thumbnail')->default('default.jpg');
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
        Schema::dropIfExists('report_lists');
    }
}
