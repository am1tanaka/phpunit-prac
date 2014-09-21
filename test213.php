<?php
/**
 * ファイルが読み込めなかった例外が発生することをチェック。例外が発生すれば成功
 * @author phpunit.de
 *
 */
class ExpectedErrorTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testFailingInclude()
	{
		include 'not_existing_file.php';
	}
}
?>
