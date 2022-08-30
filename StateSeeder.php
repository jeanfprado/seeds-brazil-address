<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [1, 'Acre', 'AC']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [2, 'Alagoas', 'AL']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [3, 'Amazonas', 'AM']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [4, 'Amapá', 'AP']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [5, 'Bahia', 'BA']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [6, 'Ceará', 'CE']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [7, 'Distrito Federal', 'DF']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [8, 'Espirito Santo', 'ES']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [9, 'Goiás', 'GO']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [10, 'Maranhão', 'MA']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [11, 'Minas Gerais', 'MG']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [12, 'Mato Grosso do Sul', 'MS']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [13, 'Mato Grosso', 'MT']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [14, 'Pará', 'PA']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [15, 'Paraiba', 'PB']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [16, 'Pernanbuco', 'PE']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [17, 'Piauí', 'PI']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [18, 'Paraná', 'PR']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [19, 'Rio de Janeiro', 'RJ']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [20, 'Rio Grande do Norte', 'RN']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [21, 'Rondônia', 'RO']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [22, 'Roraima', 'RR']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [23, 'Rio Grande do Sul', 'RS']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [24, 'Santa Catarina', 'SC']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [25, 'Sergipe', 'SE']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [26, 'São Paulo', 'SP']);
        DB::insert('insert into states (id, name, initials) values (?, ?, ?)', [27, 'Tocantins', 'TO']);
    }
}
