grecaptcha.ready(function() {
  grecaptcha.execute(
    'Enter google site key here',
    { action: 'homepage' }
  ).then(function(token) {
    // pass the token to the backend script for verification
  });
});