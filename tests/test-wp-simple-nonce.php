<?php

class WPSimpleNonceTest extends WP_UnitTestCase {

	function setup()
	{
		require_once "WPSimpleNonce.php";
	}


	function testSimple() 
	{
		$nonce = WPSimpleNonce::createNonce('test');
		$this->assertNotEmpty($nonce);
		$this->assertTrue(WPSimpleNonce::checkNonce('test',$nonce));
	}

	function testFormField()
	{
		$field = WPSimpleNonce::createNonceField('test');
		$this->assertRegExp('/.*value="(.*)".*/',$field);
		preg_match('/.*value="(.*)".*/',$field,$matches);
		$this->assertTrue(WPSimpleNonce::checkNonce('test',$matches[1]));
	}


}

