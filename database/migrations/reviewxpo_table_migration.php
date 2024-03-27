<?php

use WPDrill\DB\Migration\Migration;
use WPDrill\DB\Migration\Sql;

class reviewxpo_table_migration extends Migration
{

    public function up(): Sql
    {
        return $this->createTable('reviewxpo', [
            'id' => 'INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY',
            'name' => 'VARCHAR(255) NOT NULL',
            'email' => 'VARCHAR(255) NOT NULL',
            'rating' => 'INT(1) NOT NULL',
            'comment' => 'TEXT',
            'created_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'

        ]);
    }

    public function down(): Sql
    {
        return $this->dropTable('reviewxpo');
    }
}
