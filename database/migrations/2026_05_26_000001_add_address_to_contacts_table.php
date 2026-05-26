<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToContactsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('contacts', 'address')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->string('address', 255)->nullable()->after('date');
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('contacts', 'address')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('address');
            });
        }
    }
}
