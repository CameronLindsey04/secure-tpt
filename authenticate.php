<?php

// this is a PHP file (not web page)
// this is intended for server-side processing only
// (nothing here will be sent to the browser for display)

// copy the final example (at the bottom of the page
// under PHP Form Validation (from w3schools) here
// modify that snippet to ensure that Mallory is not
// attempting to hack our secure system

// our super secure system will only allow users that
// enter a password that matches the username they entered

// if the credentials are valid store the username in the
// SESSION for use later (NEVER store the password in the 
// SESSION)

// either way, the final step of this script will tell the
// browser to ask for a different page using the HTTP redirect
// 3xx (via a call to the header function with a location)
// if the creds are valid, send them to the term project topics
// page, otherwise send them back to the login form
