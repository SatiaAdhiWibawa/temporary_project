<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'auto_increment'    => true
            ],
            'nama' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100
            ],
            'harga' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'stok' => [
                'type'              => 'INT',
                'constraint'        => 11
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
