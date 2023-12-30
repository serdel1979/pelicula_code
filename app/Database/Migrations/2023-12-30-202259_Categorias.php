<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint' => 5,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'categoria'=>[
                'type'=>'VARCHAR',
                'constraint' => 50,
            ]
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('Categorias');
    }

    public function down()
    {
        $this->forge->dropTable('Categorias');
    }
}
