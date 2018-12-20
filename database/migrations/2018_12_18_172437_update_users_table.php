<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('users', 'facebook_id')) {
            # code...
        }
        else{
            Shema::table('users', function($table)
            {
                $table->string('facebook_id', 150)->unique();
        
			});

		}
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
		if (Schema::hasColumn('users', 'facebook_id')) {
           $table->dropColumn('facebook_id');
       };
 
	}

}
