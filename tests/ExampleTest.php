<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode())  ;
	}

	/*public function testBasicExample1()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(201, $response->getStatusCode())  ;
	}*/

}
