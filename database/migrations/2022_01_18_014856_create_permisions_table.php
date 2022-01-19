<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->unsigned();
            $table->enum('permision_group', ['User', 'Approve', 'Administrator'])->nullable()->default('User');
            $table->longText('description')->nullable();
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisions');
    }
}
