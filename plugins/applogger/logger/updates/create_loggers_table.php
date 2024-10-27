<?php namespace Applogger\Logger\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLoggersTable extends Migration
{
    public function up()
    {
        Schema::create('studentsInOctober', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('firstName',  15);
			$table->integer('numberOfAttendence');
			$table->date('attendenceTime');
			$table->boolean('wasLate')
        });
    }

    public function down()
    {
        Schema::dropIfExists('studentsInOctober');
    }
}
