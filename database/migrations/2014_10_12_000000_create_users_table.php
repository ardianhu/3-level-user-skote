<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob');
            $table->unsignedBigInteger('role_id');
            $table->text('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name' => 'dosen', 'dob' => '2000-10-10', 'email' => 'dosen@garuda.com', 'password' => Hash::make('password'), 'email_verified_at' => now(), 'role_id' => '1', 'avatar' => 'images/avatar-1.jpg', 'created_at' => now(),]);
        User::create(['name' => 'admin', 'dob' => '2000-10-10', 'email' => 'admin@garuda.com', 'password' => Hash::make('password'), 'email_verified_at' => now(), 'role_id' => '2', 'avatar' => 'images/avatar-1.jpg', 'created_at' => now(),]);
        User::create(['name' => 'operator', 'dob' => '2000-10-10', 'email' => 'operator@garuda.com', 'password' => Hash::make('password'), 'email_verified_at' => now(), 'role_id' => '3', 'avatar' => 'images/avatar-1.jpg', 'created_at' => now(),]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
