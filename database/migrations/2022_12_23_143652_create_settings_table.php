<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table): void {
            $table->id();

            $table->string('group')->index();
            $table->string('name');
            $table->boolean('locked');
            $table->text('payload');
            $table->boolean('deletable')->default(true);
            $table->boolean('editable')->default(true);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
