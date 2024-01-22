// Enqueue custom JavaScript
function enqueue_custom_scripts() {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $.ajax({
                url: 'https://ipinfo.io/json',
                dataType: 'jsonp',
                success: function(data) {
                    var countryName = data.country;

                    // Update body class
                    $('body').addClass('country-' + countryName.toLowerCase());
                }
            });
        });
    </script>
    <?php
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
