<?php
/**
 * DocumentsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ungerboeck API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace FomF\Ungerboeck\Client;

use \FomF\Ungerboeck\Client\Configuration;
use \FomF\Ungerboeck\Client\ApiException;
use \FomF\Ungerboeck\Client\ObjectSerializer;

/**
 * DocumentsApiTest Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentsApiTest extends \PHPUnit_Framework_TestCase
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
     * Test case for documentsDeleteDocument
     *
     * Standard - Delete a Document entry from Ungerboeck.
     *
     */
    public function testDocumentsDeleteDocument()
    {
    }

    /**
     * Test case for documentsDownload
     *
     * Basic - Get the bytes of a document.  WARNING: The API help page does not react well to large (500+ characters) data strings.  We suggest using a seperate app to test adding/editing/downloading document data..
     *
     */
    public function testDocumentsDownload()
    {
    }

    /**
     * Test case for documentsGetDocument
     *
     * Basic - Get a single Document entry by its parameters.  To download a document file, use the /Download endpoint.
     *
     */
    public function testDocumentsGetDocument()
    {
    }

    /**
     * Test case for documentsGetDocumentList
     *
     * Basic - Search for document entries using OData..
     *
     */
    public function testDocumentsGetDocumentList()
    {
    }

    /**
     * Test case for documentsPostDocument
     *
     * Standard - Add a Document entry in Ungerboeck.  You need to fill NewDocumentData and NewFilename with the document file to import. WARNING: The API help page does not react well to large (500+ characters) data strings.  We suggest using a seperate app to test adding/editing/downloading document data..
     *
     */
    public function testDocumentsPostDocument()
    {
    }

    /**
     * Test case for documentsPutDocument
     *
     * Standard - Edit a Document entry properties.  You can use NewDocumentData and NewFilename to update the document file with an imported document.  WARNING: The API help page does not react well to large (500+ characters) data strings.  We suggest using a seperate app to test adding/editing/downloading document data..
     *
     */
    public function testDocumentsPutDocument()
    {
    }
}
