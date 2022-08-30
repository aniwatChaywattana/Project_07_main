<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeproduct', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('ชื่อหมวดหมู่สินค้า');
            $table->string('img')->nullable()->comment('รูปสินค้า');
            $table->integer('created_by')->nulltable()->comment('user ที่เพิ่ม');
            $table->integer('updated_by')->nulltable()->comment('user ที่แก้ไข');
            $table->integer('delete_by')->nulltable()->comment('user ที่ลบ');
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
        Schema::dropIfExists('typeproduct');
    }
};
