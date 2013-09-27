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

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// MetaModels
	'MetaModels\DemoInstaller\Tasks\Task'                   => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/Task.php',
	'MetaModels\DemoInstaller\Tasks\Database\DropTable'     => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/Database/DropTable.php',
	'MetaModels\DemoInstaller\Tasks\Database\Import'        => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/Database/Import.php',
	'MetaModels\DemoInstaller\Tasks\Database\TruncateTable' => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/Database/TruncateTable.php',
	'MetaModels\DemoInstaller\Tasks\File\RemoveFile'        => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/File/RemoveFile.php',
	'MetaModels\DemoInstaller\Tasks\File\InstallFile'       => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/File/InstallFile.php',
	'MetaModels\DemoInstaller\Tasks\File\FileTask'          => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/Tasks/File/FileTask.php',
	'MetaModels\DemoInstaller\DemoInstaller'                => 'system/modules/metamodels_demo_installer/MetaModels/DemoInstaller/DemoInstaller.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'demo_installer' => 'system/modules/metamodels_demo_installer/templates',
));
