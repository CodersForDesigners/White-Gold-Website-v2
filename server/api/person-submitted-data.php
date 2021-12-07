<?php
# * - Error Reporting
ini_set( 'display_errors', 1 );
ini_set( 'error_reporting', E_ALL );

// Script Bootstrapping
require_once __DIR__ . '/../../lib/api-script-bootstrap.php';
// Response Preparation
require_once __DIR__ . '/../../lib/api-script-response-preparation.php';
// Parse input from the request, reject if empty
require_once __DIR__ . '/../../lib/api-script-mandatory-input-parsing.php';


require_once __DIR__ . '/../../conf.php';
require_once __DIR__ . '/../../lib/http.php';

use BFS\HTTP;

/*
 |
 | Further input parsing
 |
 | If the essential data is not provided, respond accordingly
 |
 */
if ( empty( $input[ 'phoneNumber' ] ) )
	return HTTP::respond( 'Phone number not provided.', 400 );





/* ------------------------------------- \
 * Pull in the module dependencies
 \-------------------------------------- */
require_once __DIR__ . '/../../vendor/autoload.php';

require_once __DIR__ . '/../../lib/datetime.php';
require_once __DIR__ . '/../../lib/google-forms.php';

use Symfony\Component\Yaml\Yaml;



/**
 |
 | Input validation
 |
 */
$input[ 'extendedAttributes' ] = $input[ 'extendedAttributes' ] ?? [ ];


/**
 |
 | Send data to a Google Sheet
 |
 */
$data = [ ];
$data[ 'phoneNumber' ] = $input[ 'phoneNumber' ];
$data[ 'name' ] = $input[ 'name' ] ?? null;
$data[ 'emailAddress' ] = $input[ 'emailAddress' ] ?? null;
$data[ 'sourceMedium' ] = $input[ 'sourceMedium' ] ?? null;
$data[ 'sourcePoint' ] = $input[ 'sourcePoint' ] ?? '';
if ( ! empty( $input[ 'extendedAttributes' ] ) )
	$data[ 'extendedAttributes' ] = Yaml::dump( $input[ 'extendedAttributes' ] );
$data[ 'when' ] = CFD\DateTime::getCurrentTimestamp__SpreadsheetCompatible();

// $activity = 'person/submitted/data';
$activity = 'Data Submission';
GoogleForms\submitPersonActivity( $activity, $data );





/* ------------------------------- \
 * Respond back to the client
 \-------------------------------- */
HTTP::respond( $data, 200 );
