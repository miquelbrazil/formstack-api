<?php
require_once '../config.php'; // Define a Constant ACCESS_TOKEN in your own config.php
require_once '../FormstackApi.php';

/**
 * This test code runs on PHPUnit 4.0. You will need to install PHPUnit as
 * described at http://phpunit.de/manual/current/en/installation.html before
 * you can successfully run these tests for yourself.
 */

class WrapperTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException           Exception
     * @expectedExceptionMessage    You must include an enpoint to request
     */
    public function testRequestEmptyEndpoint() {
        $wrapper = new FormstackApi(ACCESS_TOKEN);
        $wrapper->request('');
    }

    /**
     * @expectedException           Exception
     * @expectedExceptionMessage    Your requests must be performed with one of the following
     * verbs: GET, PUT, POST, DELETE.
     */
    public function testRequestBadVerb() {
        $wrapper = new FormstackApi(ACCESS_TOKEN);
        $wrapper->request('/test/endpoint', 'FAIL');
    }
}
