<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create(config('app-settings.table', 'settings'), function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('val')->nullable();
            $table->string('group')->default('default');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists(config('app-settings.table', 'settings'));
    }
};
