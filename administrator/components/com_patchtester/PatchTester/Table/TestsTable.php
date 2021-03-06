<?php
/**
 * Patch testing component for the Joomla! CMS
 *
 * @copyright  Copyright (C) 2011 - 2012 Ian MacLennan, Copyright (C) 2013 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later
 */

namespace PatchTester\Table;

/**
 * Tests Table class
 *
 * @since  2.0
 */
class TestsTable extends \JTable
{
	/**
	 * Constructor
	 *
	 * @param   \JDatabaseDriver  &$db  JDatabaseDriver object.
	 *
	 * @since   2.0
	 */
	public function __construct(\JDatabaseDriver &$db)
	{
		parent::__construct('#__patchtester_tests', 'id', $db);
	}
}
