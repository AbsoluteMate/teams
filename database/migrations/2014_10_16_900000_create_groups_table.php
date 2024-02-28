<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('groups', static function (Blueprint $table) {
            $table->id();
            $table->foreignId(config('teams.foreign_keys.team_id', 'team_id'))->nullable()->constrained()->cascadeOnDelete();
            $table->string('code');
            $table->string('name');

            $table->unique(['team_id', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};