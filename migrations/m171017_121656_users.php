<?php

class m171017_121656_users extends CDbMigration
{
	public function up()
	{
		$this->createTable('users', array(
            'id' => 'pk',
            'email' => 'string NOT NULL',
            'password' => 'text',
			'balance' => 'integer',
			'api_key' => 'string NOT NULL',
            'link' => 'string NOT NULL',
            'status' => 'integer',
        ));
	}

	public function down()
	{
		$this->dropTable('users');
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