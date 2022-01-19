<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('webboard_id')->unsigned();
            $table->longText('description');
            $table->uuid('profile_id')->nullable()->unsigned();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('webboard_id')->references('id')->on('webboards')->cascadeDelete();
            $table->foreign('profile_id')->references('id')->on('profiles')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
