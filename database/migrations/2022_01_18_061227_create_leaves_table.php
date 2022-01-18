<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date('on_date');
            $table->time('from_time');
            $table->time('to_time');
            $table->uuid('leave_type_id');
            $table->longText('reason');
            $table->longText('description')->nullable();
            $table
                ->enum('status', ['-', 'In Process', 'Reject', 'Approved'])
                ->nullable()
                ->default('-');
            $table
                ->boolean('is_status')
                ->nullable()
                ->default(false);
            $table->timestamps();
            $table
                ->foreign('leave_type_id')
                ->reference('id')
                ->on('leave_types')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaves');
    }
}
