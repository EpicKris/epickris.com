<?php

use CodeIgniter\Database\Migration;

/**
 * Add code languages.
 */
class Migration_Add_code_languages extends Migration
{
    /**
     * Migrate up.
     */
    public function up()
    {
        // ActionScript
        $this->db->table('code_language')->insert([
            'name'              => 'ActionScript',
            'key'               => 'actionscript',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // C++
        $this->db->table('code_language')->insert([
            'name'              => 'C++',
            'key'               => 'c',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // CSS
        $this->db->table('code_language')->insert([
            'name'              => 'CSS',
            'key'               => 'css',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // HTML
        $this->db->table('code_language')->insert([
            'name'              => 'HTML',
            'key'               => 'html',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Java
        $this->db->table('code_language')->insert([
            'name'              => 'Java',
            'key'               => 'java',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // JavaScript
        $this->db->table('code_language')->insert([
            'name'              => 'JavaScript',
            'key'               => 'javascript',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Makefile
        $this->db->table('code_language')->insert([
            'name'              => 'Makefile',
            'key'               => 'makefile',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Matlab
        $this->db->table('code_language')->insert([
            'name'              => 'Matlab',
            'key'               => 'matlab',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // MySQL
        $this->db->table('code_language')->insert([
            'name'              => 'MySQL',
            'key'               => 'mysql',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Objective-C
        $this->db->table('code_language')->insert([
            'name'              => 'Objective-C',
            'key'               => 'objective-c',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // PHP
        $this->db->table('code_language')->insert([
            'name'              => 'PHP',
            'key'               => 'php',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Shell
        $this->db->table('code_language')->insert([
            'name'              => 'Shell',
            'key'               => 'shell',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);
    }

    /**
     * Migrate down.
     */
    public function down()
    {
        // ActionScript
        $this->db->table('code_language')->delete([
            'key' => 'actionscript'
        ]);

        // C++
        $this->db->table('code_language')->delete([
            'key' => 'c'
        ]);

        // CSS
        $this->db->table('code_language')->delete([
            'key' => 'css'
        ]);

        // HTML
        $this->db->table('code_language')->delete([
            'key' => 'html'
        ]);

        // Java
        $this->db->table('code_language')->delete([
            'key' => 'java'
        ]);

        // JavaScript
        $this->db->table('code_language')->delete([
            'key' => 'javascript'
        ]);

        // Makefile
        $this->db->table('code_language')->delete([
            'key' => 'makefile'
        ]);

        // Matlab
        $this->db->table('code_language')->delete([
            'key' => 'matlab'
        ]);

        // MySQL
        $this->db->table('code_language')->delete([
            'key' => 'mysql'
        ]);

        // Objective-C
        $this->db->table('code_language')->delete([
            'key' => 'objective-c'
        ]);

        // PHP
        $this->db->table('code_language')->delete([
            'key' => 'php'
        ]);

        // Shell
        $this->db->table('code_language')->delete([
            'key' => 'shell'
        ]);
    }
}
