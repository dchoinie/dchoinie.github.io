// Document ready shorthand statement
    $(function() {
      // Select link by id and add click event
      $('#down1').click(function() {

        // Animate Scroll to #bottom
        $('html,body').animate({
          scrollTop: $("#about").offset().top }, // Tell it to scroll to the top #bottom
          1000 // How long scroll will take in milliseconds
        );

        // Prevent default behavior of link
        return false;
      });
    });
