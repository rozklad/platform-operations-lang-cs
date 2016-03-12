<?php
/**
 * Part of the Platform Operations extension.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the WTFPL license.
 *
 * @package    Platform Operations extension
 * @version    3.0.0
 * @author     Sanatorium
 * @license    WTFPL
 * @copyright  2016, Sanatorium
 * @link       http://sanatorium.ninja
 */

return [

	'general'=> [

		'vendor'    => 'Vendor',
		'name'      => 'Název',
		'author'    => 'Autor',
		'slug'      => 'Slug',
		'version'   => 'Verze',
		'installed' => 'Nainstalováno',
		'enabled'   => 'Povoleno',

	],

	'scaffold'=> [

		'legend'           => 'Scaffold Components',
		'help'             => 'Rapidly prototype your extension',
		'instruction'      => 'Rapidly scaffolds component sets for your extension.',

		'name'             => 'Scaffold name',
		'name_help'        => 'Name to be used for all scaffold components.',
		'name_placeholder' => 'Scaffold name. (blog, organization, inventory)',

	],

	'controller'=> [

		'legend'               => 'Controller',
		'help'                 => 'Prototype controller',
		'instruction'          => 'Rapidly scaffolds a controller for your extension.',

		'name'                 => 'Controller name',
		'name_help'            => 'Scaffolds a controller.',
		'name_placeholder'     => 'Controller name. (posts)',

		'location'             => 'Location',
		'location_help'        => 'Selects the controller location.',
		'location_placeholder' => 'Location. (Frontend)',

	],

	'repository'=> [

		'legend'           => 'Repository',
		'help'             => 'Prototype repository',
		'instruction'      => 'Rapidly scaffolds a repository for your extension.',

		'name'             => 'Repository name',
		'name_help'        => 'Scaffolds a repository.',
		'name_placeholder' => 'Repository name. (author, user, post)',

	],

	'widget'=> [

		'legend'           => 'Widget',
		'help'             => 'Prototype widget.',
		'instruction'      => 'Rapidly scaffolds a widget for your extension.',

		'name'             => 'Widgets name',
		'name_help'        => 'Scaffolds a widget.',
		'name_placeholder' => 'Widgets name. (author, user, post)',

	],

	'migration'=> [

		'legend'                   => 'Migration',
		'help'                     => 'Create database migration',
		'instruction'              => 'Add columns',

		'timestamps'               => 'Timestamps',
		'timestamps_help'          => 'Adds created_at, updated_at timestamp columns.',

		'auto_increment'           => 'Auto Increment',
		'auto_increment_help'      => 'Adds auto incremented id column.',

		'table_name'               => 'Table name',
		'table_name_help'          => 'What your database table should be called.',
		'table_name_placeholder'   => 'Table name. (authors, users, user_posts)',

		'seeder'                   => 'Seed Records',
		'seeder_help'              => 'How many records would you like to create?',
		'seeder_count_placeholder' => '# rows. (100, 1000, etc)',

	],

	'seeder'=> [

		'legend'                 => 'Seeder',
		'help'                   => 'Create database seed',
		'instruction'            => 'Rapidly create a seeder for your database table.',

		'table_name'             => 'Table name',
		'table_name_help'        => 'Creates a seeder.',
		'table_name_placeholder' => 'Table name. (authors, users, posts)',

		'records'                => '# Records',
		'records_help'           => 'How many records would you like to create?',
		'records_placeholder'    => '# of records. (100, 1000, etc)',

	],

	'model'=> [

		'legend'           => 'Model',
		'help'             => 'Prototype model',
		'instruction'      => 'Rapidly scaffolds a model for your extension.',

		'name'             => 'Model name',
		'name_help'        => 'Scaffolds a model.',
		'name_placeholder' => 'Model name. (author, user, post)',

	],

	'datagrid'=> [

		'legend'            => 'DataGrid',
		'help'              => 'Prototype DataGrid',
		'instruction'       => 'Rapidly scaffolds a DataGrid for your extension.',

		'name'              => 'DataGrid name',
		'name_help'         => 'Scaffolds a DataGrid.',
		'name_placeholder'  => 'DataGrid Name. (main, posts, users)',

		'theme'             => 'Select theme',
		'theme_help'        => 'Select theme for your DataGrid views to be created for.',
		'theme_placeholder' => 'Select Theme',

		'view'              => 'View name',
		'view_help'         => 'Scaffolds a view for your DataGrid.',
		'view_placeholder'  => 'View name. (author, user, post)',

	],

];
