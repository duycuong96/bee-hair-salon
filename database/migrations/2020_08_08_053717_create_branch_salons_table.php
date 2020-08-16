<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_salons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index('name');
            $table->string('image');
            $table->text('content')->nullable();
            $table->json('work_time')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->bigInteger('view')->nullable();
            $table->unsignedInteger('status')->default(0);
            $table->integer('ward_id')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->json('locations')->nullable();
            $table->integer('seat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch_salons');
    }
}
