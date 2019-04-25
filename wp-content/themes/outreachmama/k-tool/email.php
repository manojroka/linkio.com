<?php

// Check if email correctly submitted
if(!isset($_REQUEST['email']) || ($_REQUEST['email'] == ''))
die("Error: Invalid email !");
	
// Validate email
if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))
	die("Error: Invalid email !");

$email = trim($_REQUEST['email']);

// @debug Use this for testing
// die("Success: keywords unlocked !");

// https://github.com/ActiveCampaign/activecampaign-api-php/blob/master/examples.php

// Require the Active Campaign
define("ACTIVECAMPAIGN_URL", "https://outreachmama.api-us1.com/admin/api.php");
define("ACTIVECAMPAIGN_API_KEY", "1520a02144f231481b8bcd05c0c09b08faea618540a022acbfb2c8d78c2f9ab0eec1c7ee");
$list_id = 19; // Used to be 11

require_once("includes/ActiveCampaign.class.php");
$ac = new ActiveCampaign(ACTIVECAMPAIGN_URL, ACTIVECAMPAIGN_API_KEY);

// Test credentials
if (!(int)$ac->credentials_test())
	die("Error: Access denied - Invalid credentials (URL and/or API key).</p>");

// Add or edit contact
$contact = array(
	"email"              => $email,
	// "first_name"         => "KeywordTool",
	// "last_name"          => "Lead",
	"first_name"         => "",
	"last_name"          => "",
	"p[{$list_id}]"      => $list_id,
	"status[{$list_id}]" => 1, // "Active" status
);
$contact_sync = $ac->api("contact/sync", $contact);

// Request failed
if (!(int)$contact_sync->success)
	die("Error: Syncing contact failed. Error returned: " . $contact_sync->error);
	
// Request successful
$contact_id = (int)$contact_sync->subscriber_id;

// Temporary
mail('d.mirchev@exigio.com', 'Keyword Tool - email', print_r($contact , true));

die("Success: keywords unlocked !"); // Contact ID: $contact_id

