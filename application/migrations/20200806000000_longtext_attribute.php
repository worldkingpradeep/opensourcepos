<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_longtext_attribute extends CI_Migration
{
	public function __construct()
	{
		parent::__construct();
	}

	public function up()
	{
		error_log('Migrating longtext_attribute');

		execute_script(APPPATH . 'migrations/sqlscripts/3.4.0_longtext_attribute.sql');

		error_log('Migrating longtext_attribute completed');
	}

	public function down()
	{
	}
}
?>