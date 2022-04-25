<?php
function error_handler($e_number, $e_message, $e_file, $e_line, $e_vars = [])
{
    $message = "<div class=\"alert alert-danger\"><h3>An error occurred</h3>";
    $message .= "<strong>File:</strong> $e_file<br>";
    $message .= "<strong>Line:</strong> $e_line<br>";
    $message .= "<strong>Message:</strong> $e_message<br>";
    if (count($e_vars) > 0) {
        $message .= "<strong>Variables:</strong><br>";
        $message .= "<pre>" . print_r($e_vars, 1) . "</pre><br>";
    }
    $message .= "</div>";
    global $debug;
    if ($debug) {
        echo $message;
        die();
    } else {
        if ($e_number == E_ERROR) {
            echo "<div class=\"alert alert-danger\">";
            echo "<h1>An unexpected error occurred</h1>";
            echo "<p>Tech support has been notified. Try again later. We apologize for the inconvenience.</p>";
            echo "</div>";
            die();
        }
    }
}

set_error_handler("error_handler");
