<?php
// Check if MySQLi extension is loaded
if (extension_loaded('mysqli')) {
    echo 'MySQLi is enabled.';
} else {
    echo 'MySQLi is not enabled.';
}
?>