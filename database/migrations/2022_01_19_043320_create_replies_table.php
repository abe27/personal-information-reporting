<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('comment_id')->unsigned();
            $table->longText('description');
            $table->uuid('profile_id')->nullable()->unsigned();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('comment_id')->references('id')->on('comments')->cascadeDelete();
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
        Schema::dropIfExists('replies');
    }
}
