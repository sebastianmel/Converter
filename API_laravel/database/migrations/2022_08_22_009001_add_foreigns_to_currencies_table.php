<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table
                ->foreign('start_id')
                ->references('id')
                ->on('rates')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('end_id')
                ->references('id')
                ->on('rates')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->dropForeign(['start_id']);
            $table->dropForeign(['end_id']);
        });
    }
};
