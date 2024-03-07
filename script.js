$(document).ready(function() {
    // Send the user's IP address to the PHP script when the page loads
    $.get("get_ip.php", function(data) {
        // Log the response from the PHP script (e.g., for debugging)
        console.log(data);
    });
});
