<?php
/**
 * Created by PhpStorm.
 * User: panagiotis
 * Date: 29/03/2018
 * Time: 02:14
 */
use PHPUnit\kaikenframework\TestCase;

class IndexTest extends TestCase
{
	public function testHello()
	{
		$_GET['name'] = 'Fabien';
		
		ob_start();
		include 'index.php';
		$content = ob_get_clean();
		
		$this->assertEquals('Hello Fabien', $content);
	}
}