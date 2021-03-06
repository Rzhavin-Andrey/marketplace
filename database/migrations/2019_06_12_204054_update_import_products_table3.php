<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateImportProductsTable3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('import_products', function (Blueprint $table) {
            $table->text('import_url')->nullable(true)->default(null)->change();
            $table->string('stock')->nullable(true)->default(null)->change();
            $table->string('photo')->nullable(true)->default(null)->change();
            $table->string('brand')->nullable(true)->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('import_products', function (Blueprint $table) {
            $table->string('import_url')->nullable(true)->default(null)->change();
        });
    }
}
