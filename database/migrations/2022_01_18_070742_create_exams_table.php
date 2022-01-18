<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('practic_id');
            $table->longText('subject');
            $table->decimal('score', 8, 2)->nullable()->default(0);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('practic_id')->reference('id')->on('practic_tests')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
