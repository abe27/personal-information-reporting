<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites_lists', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('category_id')->unsigned();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->decimal('full_score', 8, 2)->nullable()->default(3);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('category_activities')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activites_lists');
    }
}
