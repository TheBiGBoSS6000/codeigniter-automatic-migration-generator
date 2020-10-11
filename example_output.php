<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_category extends CI_Migration
{

    /**
     * up (create table)
     *
     * @return void
     */
    public function up() {
        // Add Fields.
        $this->dbforge->add_field(    array (
            'category_id' => 
                array (
                        'type' => 'smallint(5) unsigned',
                        'auto_increment' => true,
            ),
            'name' => 
                array (
                        'type' => 'varchar(255)',
            ),
            'parent' => 
                array (
                        'type' => 'smallint(5) unsigned',
                        'null' => true,
            ),
        ));

        // Add Primary Key(s).
        $this->dbforge->add_key(    array (
            0 => 'category_id',
        ), TRUE);

        // Add Key(s).
        $this->dbforge->add_key(    array (
            0 => 'name',
            1 => 'parent',
        ));

        // Table attributes.
        $attributes = array(
            'ENGINE' => 'InnoDB',
        );

        // Create Table category
        $this->dbforge->create_table("category", TRUE, $attributes);

    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table category
        $this->dbforge->drop_table("category", TRUE);
    }

}
