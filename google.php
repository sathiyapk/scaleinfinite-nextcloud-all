<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="740523415320-tll2of0ajhi0qt7nfrnb4kkikfbvsnu8.apps.googleusercontent.com">
    <title>Google Sign-In Example</title>
    <!-- Include Google Sign-In library -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Include jwt-decode library -->
    <script src="https://cdn.jsdelivr.net/npm/jwt-decode@4.0.0"></script>
</head>
<body>

<!-- Google Sign-In button -->
<div class="g-signin2" data-onsuccess="onSignIn"></div>

<script>
    function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
    // function onSignIn(googleUser) {
    //     // Get the ID token from the googleUser object
    //     var id_token = googleUser.getAuthResponse().id_token;

    //     // Decode the ID token using jwt-decode
    //     var decoded = jwt_decode(id_token);

    //     // Extract user information from the decoded token
    //     var id = decoded.sub;
    //     var name = decoded.name;
    //     var image = decoded.picture;
    //     var email = decoded.email;

    //     // Now you can use the decoded user information as needed
    //     console.log("ID:", id);
    //     console.log("Name:", name);
    //     console.log("Image URL:", image);
    //     console.log("Email:", email);

    //     // Redirect or perform further actions as required
    //     window.location.href = 'http://localhost/newcloud/index.php/apps/sociallogin/oauth/google';
    // }
</script>

</body>
</html>
