<?php

use CodeIgniter\Database\Migration;

/**
 * Migration initialization.
 */
class Migration_Init extends Migration
{
    /**
     * Migrate up.
     */
    public function up()
    {
        // Create code language table
        $this->forge->addField([
            'code_language_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'key' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unique'     => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('code_language_id', true);
        $this->forge->createTable('code_language');

        // Create email table
        $this->forge->addField([
            'email_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 46,
                'unique'     => true
            ],
            'default' => [
                'type'       => 'TINYINT',
                'constraint' => 1
            ],
            'verified' => [
                'type' =>       'TINYINT',
                'constraint' => 1
            ]
        ]);
        $this->forge->addKey('email_id', true);
        $this->forge->addKey('email');
        $this->forge->createTable('email');

        // Create email verification table
        $this->forge->addField([
            'email_verification_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'email_id' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true
            ],
            'code' => [
                'type'       => 'VARCHAR',
                'constraint' => 36,
                'unique'     => true
            ]
        ]);
        $this->forge->addKey('email_verification_id', true);
        $this->forge->createTable('email_verification');

        // Create portfolio table
        $this->forge->addField([
            'portfolio_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'portfolio_type_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unique'     => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'lead' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'description' => [
                'type' =>       'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('portfolio_id', true);
        $this->forge->addKey('portfolio_type_id', true);
        $this->forge->createTable('portfolio');

        // Create portfolio code language table
        $this->forge->addField([
            'portfolio_code_langauge_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'portfolio_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true
            ],
            'code_language_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true
            ],
            'percentage' => [
                'type'       => 'INT',
                'constraint' => 3,
                'unsigned'   => true,
                'default'    => 100
            ]
        ]);
        $this->forge->addKey('portfolio_code_language_id', true);
        $this->forge->addKey('portfolio_id', true);
        $this->forge->addKey('code_language_id', true);
        $this->forge->createTable('portfolio_code_language');

        // Create portfolio screen shot table
        $this->forge->addField([
            'portfolio_type_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'portfolio_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'screen_shot_path' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'screen_shot_caption' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true
            ]
        ]);
        $this->forge->addKey('portfolio_screen_shot_id', true);
        $this->forge->addKey('portfolio_id', true);
        $this->forge->createTable('portfolio_screen_shot');

        // Create portfolio type table
        $this->forge->addField([
            'portfolio_type_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'key' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unique'     => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('portfolio_type_id', true);
        $this->forge->createTable('portfolio_type');

        // Create user table
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 9,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 10
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 10
            ],
            'password' => [
                'type' =>       'VARCHAR',
                'constraint' => 255
            ]
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('user');
    }

    /**
     * Migrate down.
     */
    public function down()
    {
        // Drop code language table
        $this->forge->dropTable('code_langauge');

        // Drop email table
        $this->forge->dropTable('email');

        // Drop email verification table
        $this->forge->dropTable('email_verification');

        // Drop portfolio table
        $this->forge->dropTable('portfolio');

        // Drop portfolio code language table
        $this->forge->dropTable('portfolio_code_langauge');

        // Drop portfolio screen shot table
        $this->forge->dropTable('portfolio_screen_shot');

        // Drop portfolio type table
        $this->forge->dropTable('portfolio_type');

        // Drop user table
        $this->forge->dropTable('user');
    }
}
