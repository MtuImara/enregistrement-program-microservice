<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enregistrement_programs', function (Blueprint $table) {
            $table->id();
            $table->string('code_enregistrement');
            $table->string('date_enrolement_program');
            $table->string('promotion');
            $table->string('photo');
            $table->string('nom');
            $table->string('postnom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('lieu_naissance');
            $table->string('pays_naissance');
            $table->date('date_naissance');
            $table->string('nationalite');
            $table->string('edition_diplome');
            $table->string('ville_obtention_diplome');
            $table->string('pays_obtention_diplome');
            $table->string('section');
            $table->string('option');
            $table->string('ecole');
            $table->integer('note_obtenue_exetat');
            $table->string('status');
            $table->string('camp_provenance');
            $table->string('cni');
            $table->string('telephone');
            $table->string('whatsapp');
            $table->string('email');
            $table->string('faculte');
            $table->string('universite');
            $table->string('localite_universite');
            $table->longText('motivation');
            $table->longText('perspective_avenir');
            $table->string('numero_compte_bank');
            $table->integer('id_bank');
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
        Schema::dropIfExists('enregistrement_programs');
    }
};
