<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webboards', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('category_id')->nullable();
            $table->datetime('post_at');
            $table->string('topic');
            $table->longText('description');
            $table->uuid('profile_id')->nullable();
            $table->enum('importance', ['N', 'M','S'])->nullable()->default('N');
            $table->boolean('is_publish')->nullable()->default(false);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('category_id')->reference('id')->on('category_webboards')->nullOnDelete();
            $table->foreign('profile_id')->reference('id')->on('profiles')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('webboards');
    }
}
