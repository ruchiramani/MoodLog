<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryAnswersTable extends Migration
{
  /**
   * Run the migrations.
   *
  * @return void
  */
 public function up()
 {
     Schema::create('entry_answers', function (Blueprint $table) {
         $table->increments('id');
         $table->timestamps();
     });
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
     Schema::dropIfExists('entry_answers');
 }
}
