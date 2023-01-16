<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //`IdUser`, `IdPersonal`, `nombre`, `apellido`, `Email`,
        // `NickName`, `Password`, `IdRol`, `CreateAt`, `UpdateAt`, `Enable
        
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('IdPersonal');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('Email');
            $table->string('NickName');
            $table->string('Password');
            $table->string('IdRol');
            $table->string('CreateAt');
            $table->string('UpdateAt');
            $table->string('Enable');
            
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
        Schema::dropIfExists('usuarios');
    }
}
