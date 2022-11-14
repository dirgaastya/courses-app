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
        Schema::table('forms', function (Blueprint $table) {
            $table->string('no_user',8);
            $table->foreign('no_user','fk_forms_no_user')->references('id')->on('users')->onUpdate('CASCADE');
            $table->bigInteger('period_id')->unsigned();
            $table->foreign('period_id','fk_forms_period_id')->references('id')->on('periods')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropForeign('fk_forms_no_user');
            $table->dropColumn('no_user');
            $table->dropForeign('fk_forms_period_id');
            $table->dropColumn('period_id');
        });
    }
};
