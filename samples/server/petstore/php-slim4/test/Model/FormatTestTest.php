<?php

/**
 * FormatTestTest
 *
 * PHP version 7.1
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\FormatTest;

/**
 * FormatTestTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\FormatTest
 */
class FormatTestTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "FormatTest"
     */
    public function testFormatTest()
    {
        $testFormatTest = new FormatTest();
        $this->markTestIncomplete(
            'Test of "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "integer"
     */
    public function testPropertyInteger()
    {
        $this->markTestIncomplete(
            'Test of "integer" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "int32"
     */
    public function testPropertyInt32()
    {
        $this->markTestIncomplete(
            'Test of "int32" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "int64"
     */
    public function testPropertyInt64()
    {
        $this->markTestIncomplete(
            'Test of "int64" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "number"
     */
    public function testPropertyNumber()
    {
        $this->markTestIncomplete(
            'Test of "number" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "float"
     */
    public function testPropertyFloat()
    {
        $this->markTestIncomplete(
            'Test of "float" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "double"
     */
    public function testPropertyDouble()
    {
        $this->markTestIncomplete(
            'Test of "double" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "string"
     */
    public function testPropertyString()
    {
        $this->markTestIncomplete(
            'Test of "string" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "byte"
     */
    public function testPropertyByte()
    {
        $this->markTestIncomplete(
            'Test of "byte" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "binary"
     */
    public function testPropertyBinary()
    {
        $this->markTestIncomplete(
            'Test of "binary" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "date"
     */
    public function testPropertyDate()
    {
        $this->markTestIncomplete(
            'Test of "date" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "dateTime"
     */
    public function testPropertyDateTime()
    {
        $this->markTestIncomplete(
            'Test of "dateTime" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "uuid"
     */
    public function testPropertyUuid()
    {
        $this->markTestIncomplete(
            'Test of "uuid" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "password"
     */
    public function testPropertyPassword()
    {
        $this->markTestIncomplete(
            'Test of "password" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "bigDecimal"
     */
    public function testPropertyBigDecimal()
    {
        $this->markTestIncomplete(
            'Test of "bigDecimal" property in "FormatTest" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaObject = FormatTest::getOpenApiSchema();
        $schemaArr = FormatTest::getOpenApiSchema(true);
        $this->assertIsObject($schemaObject);
        $this->assertIsArray($schemaArr);
    }
}
