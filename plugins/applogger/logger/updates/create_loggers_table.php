<?php namespace Applogger\Logger\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLoggersTable extends Migration
{
    public function up()
    {
        Schema::create('students_in_october', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('first_name',  15);
			$table->integer('number_of_attendence');
			$table->dateTime('attendence_time');
			$table->boolean('was_late');
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students_in_october');
    }
}
