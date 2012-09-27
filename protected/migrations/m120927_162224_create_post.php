<?php

class m120927_162224_create_post extends CDbMigration
{
	public function up()
	{
            $this->createTable('post', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'body' => 'text',
            'user_id' => 'int(10) NOT NULL',    
            'created_at' => 'int(11) NOT NULL',
            ));
	}

	public function down()
	{
		$this->dropTable('post');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}