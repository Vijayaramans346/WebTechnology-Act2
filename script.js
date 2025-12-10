$(document).ready(function() {
  $('#registrationForm').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
      url: 'submit.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        $('#message').html(response);
        $('#registrationForm')[0].reset();
      },
      error: function() {
        $('#message').html('<p style="color:red;">Error submitting form.</p>');
      }
    });
  });
});
