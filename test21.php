<?php
/**
 * 例2.1 PHPUnitでの配列操作のテスト
 * https://phpunit.de/manual/current/ja/writing-tests-for-phpunit.html
 * phpunit --verbose test21で実行
 * テストの実行は、Apacheのドキュメントである必要はない。
 */

class StackTest extends PHPUnit_Framework_TestCase
{
	public function testPushAndPop(){
		$stack = array();
		$this->assertEquals(0,count($stack));
		
		array_push($stack,'foo');
		$this->assertEquals('foo',$stack[count($stack)-1]);
		$this->assertEquals(1,count($stack));
		
		$this->assertEquals('foo',array_pop($stack));
		$this->assertEquals(0,count($stack));
	}
}
?>
