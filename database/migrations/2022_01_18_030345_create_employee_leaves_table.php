<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_leaves', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('profile_id');
            $table->decimal('business_leave_limit', 4, 2)->nullable()->default(5);
            $table->decimal('business_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('vacation_leave_limit', 4, 2)->nullable()->default(0);
            $table->decimal('vacation_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('military_leave_limit', 4, 2)->nullable()->default(60);
            $table->decimal('military_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('maternity_leave_limit', 4, 2)->nullable()->default(90);
            $table->decimal('maternity_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('ordination_leave_limit', 4, 2)->nullable()->default(15);
            $table->decimal('ordination_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('sick_leave_limit', 4, 2)->nullable()->default(30);
            $table->decimal('sick_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('birth_day_leave_limit', 4, 2)->nullable()->default(1);
            $table->decimal('birth_day_leave_total', 4, 2)->nullable()->default(0);
            $table->decimal('married_leave_limit', 4, 2)->nullable()->default(1);
            $table->decimal('married_leave_total', 4, 2)->nullable()->default(0);
            $table->boolean('is_status')->nullable()->default(false);
            $table->timestamps();
            $table->foreign('profile_id')->reference('id')->on('profiles')->cascadeDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_leaves');
    }
}
