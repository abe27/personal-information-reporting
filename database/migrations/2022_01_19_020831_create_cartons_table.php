<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartons', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('tarpg_id')->unsigned();
            $table->uuid('part_id')->unsigned();
            $table->string('rcno')->unique();
            $table->string('seq')->nullable();
            $table->string('serialno')->nullable();
            $table->string('lotno')->nullable();
            $table->string('di_no')->nullable();
            $table->string('div_no')->nullable();
            $table->decimal('cost', 8, 2)->nullable()->default(0);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('tarpg_id')->references('id')->on('part_tarpgs')->cascadeDelete();
            $table->foreign('part_id')->references('id')->on('parts')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartons');
    }
}
