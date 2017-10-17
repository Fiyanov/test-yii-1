<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'components' => [
        'db'=>array(
            'username' => 'root',
			'password' => '',
            'connectionString' => 'mysql:host=localhost;dbname=test_yii1_leads'
        )
    ]
);