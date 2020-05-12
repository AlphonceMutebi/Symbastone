function login() {
  var userEmail = document.getElementById("email").value;
  var userPassword = document.getElementById("password").value;

  var url = "http://localhost/Symbastone/dataRoom.html";
  window.location.href(url);

  console.log("signing in")

  firebase
    .auth()
    .signInWithEmailAndPassword(userEmail, userPassword)
    .catch(function (error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // ...
      window.alert("Error" + errorMessage);
      var url = "http://localhost/Symbastone/dataRoom.html";
      window.location.href(url);
    });
}
