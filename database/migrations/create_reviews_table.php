<?php

use WPDrill\Contracts\MigrationContract;
use WPDrill\DB\Migration\Migration;
use WPDrill\DB\Migration\Sql;
use WPDrill\Facades\Config;

class create_reviews_table extends Migration {

    public function up(): Sql
    {
        return $this->createTable('reviews', [
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
        return $this->dropTable('reviews');
    }
}
