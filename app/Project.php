<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {   

        $this->tasks()->create($task);
        //return Task::create([
        //   'project_id' => $this->id,
        //   'description' => $description,
        //]);
    }

    //Moze se desiti da korisnik unese neocekivani parametar putem zahteva ipritom se 
    //pojavljuje greska. Zbog toga se 
    //svojstvom  llable to resava takosto se navedu kolone koje se mogu menjati od strane korisnika.
    // To se radi ako sto se u modelu doda k^od koji je prikazan u sledecem redu.

    //Svojstvom guarded moze se de nisati koje atribute korisnik
    // ne sme menjati.To se na isti nacin postize kao i kod svojstva  llable, tj. u modelu se dodajek^od koji je prikazan u sledecem redu.
}
