<?php

namespace Debril\RssAtomBundle\Driver;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-06 at 23:48:53.
 */
class HttpCurlDriverTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var HttpCurlDriver
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new HttpCurlDriver;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers Debril\RssAtomBundle\Driver\HttpCurlDriver::getResponse
     * @todo   Implement testGetResponse().
     */
    public function testGetResponse()
    {
        $url = 'http://feeds2.feedburner.com/androidcentral';
        $date = \DateTime::createFromFormat('j-M-Y', '15-Feb-2012');
        $this->object->getResponse($url, $date);

        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}