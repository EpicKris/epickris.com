<?php

use CodeIgniter\Database\Migration;

/**
 * Add portfolio types.
 */
class Migration_Add_portfolio_types extends Migration
{
    /**
     * Migrate up.
     */
    public function up()
    {
        // Brand
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Brand',
            'key'               => 'brand',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Flash
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Flash',
            'key'               => 'flash',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Framework
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Framework',
            'key'               => 'framework',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // iOS App
        $this->db->table('portfolio_type')->insert([
            'name'              => 'iOS App',
            'key'               => 'ios-app',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Library
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Library',
            'key'               => 'library',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Site
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Site',
            'key'               => 'site',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Video
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Video',
            'key'               => 'video',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);

        // Web App
        $this->db->table('portfolio_type')->insert([
            'name'              => 'Web App',
            'key'               => 'web-app',
            'created_date_time' => date('Y-m-d H:i:s', time())
        ]);
    }

    /**
     * Migrate down.
     */
    public function down()
    {
        // Brand
        $this->db->table('portfolio_type')->delete([
            'key' => 'brand'
        ]);

        // Flash
        $this->db->table('portfolio_type')->delete([
            'key' => 'flash'
        ]);

        // Framework
        $this->db->table('portfolio_type')->delete([
            'key' => 'framework'
        ]);

        // iOS App
        $this->db->table('portfolio_type')->delete([
            'key' => 'ios-app'
        ]);

        // Library
        $this->db->table('portfolio_type')->delete([
            'key' => 'library'
        ]);

        // Site
        $this->db->table('portfolio_type')->delete([
            'key' => 'site'
        ]);

        // Video
        $this->db->table('portfolio_type')->delete([
            'key' => 'video'
        ]);

        // Web App
        $this->db->table('portfolio_type')->delete([
            'key' => 'web-app'
        ]);
    }
}
