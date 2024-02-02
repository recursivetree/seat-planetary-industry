<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTierInfoTable extends Migration
{
    public function up(): void
    {
        Schema::table('invTypes', function (Blueprint $table) {
            $table->index('marketGroupID', 'inv_types_market_group_idx');
        });

        Schema::create('pi_tier_infos', function (Blueprint $table) {
            $table->integer('tier_id');
            $table->integer('market_group_id');
            $table->integer('quantity_produced');

            $table->foreign('market_group_id')
                ->references('marketGroupID')
                ->on('invTypes')
                ->noActionOnDelete();

            $table->primary('tier_id');
        });
    }

    public function down(): void
    {
        Schema::table('pi_tier_infos', function (Blueprint $table) {
            $table->dropForeign('pi_tier_infos_market_group_id_foreign');
        });
        Schema::drop('pi_tier_infos');
        Schema::table('invTypes', function (Blueprint $table) {
            $table->dropIndex('inv_types_market_group_idx');
        });
    }
}