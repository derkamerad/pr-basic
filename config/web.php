<?php
//
$config = [
	'id' => 'app',
	'defaultRoute' => 'main/default/index',
	'components' => [
		'user' => [
			'identityClass' => 'app\modules\user\models\User',
			'enableAutoLogin' => true,
			'loginUrl' => ['user/login'],
			],
		'errorHandler' => [
			'errorAction' => 'main/default/error',
		],
		'request' => [
			'cookieValidationKey' => '',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
		],
	],
];
/*
$config = [
	'id' => 'app',
	'components' => [
		'user' => [
			'identityClass' => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'request' => [
			'cookieValidationKey' => '',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
		],
	],
];*/

if (YII_ENV_DEV) {
	// configuration adjustments for 'dev' environment
	$config['bootstrap'][] = 'debug';
	$config['modules']['debug'] = 'yii\debug\Module';

	$config['bootstrap'][] = 'gii';
	$config['modules']['gii'] = 'yii\gii\Module';
}

return $config;