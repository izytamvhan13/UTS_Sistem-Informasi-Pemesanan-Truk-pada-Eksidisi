<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToCompaniesTable extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('name')->after('id'); // Menambah kolom 'name' setelah kolom 'id'
        });
    }

    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('name'); // Menghapus kolom 'name' jika migrasi dibatalkan
        });
    }
}
