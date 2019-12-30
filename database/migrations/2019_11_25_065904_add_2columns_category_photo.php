<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add2columnsCategoryPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
             $table->dropColumn('category_image');
             $table->text('photo')->after('category_name');
             $table->text('photo_thumbnail')->after('category_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
             $table->text('category_image');
             $table->dropColumn('photo');
             $table->dropColumn('photo_thumbnail');
        });
    }
}
