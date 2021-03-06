<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    Demo Installer
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

namespace MetaModels\DemoInstaller\Tasks\File;

use MetaModels\DemoInstaller\DemoInstaller;
use MetaModels\DemoInstaller\Tasks\Task;

abstract class FileTask extends Task
{
	protected $filename;

	public function __construct(DemoInstaller $installer, $filename)
	{
		parent::__construct($installer);

		$this->filename = $filename;
	}
}
