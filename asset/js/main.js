
    $(document).ready(function() {
        $('#toggle').on('click', function() {
            $('.hamburgers').toggleClass('focus');
            $('#nav').toggleClass('visible');
        });
        
        setTimeout(function() {
        $('.logout-flash').fadeOut("slow");

    }, 3000);

    // Clear Error Messages
    setTimeout(function() {
        $('#error').fadeOut("slow");
    }, 4000);

    });
    
    