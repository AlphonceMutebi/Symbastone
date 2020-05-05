(function() {

// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyAN0JQ89I1h38dXZedsjxqpPEgHt-ow00g",
    authDomain: "symbastone-72836.firebaseapp.com",
    databaseURL: "https://symbastone-72836.firebaseio.com",
    projectId: "symbastone-72836",
    storageBucket: "symbastone-72836.appspot.com",
    messagingSenderId: "102783760475",
    appId: "1:102783760475:web:aa918c2f5ee3a64d1f277e",
    measurementId: "G-02LL3X1EBT"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  //Get Elements
  const txtEmail = document.getElementById("email");
  const txtPassword = document.getElementById("password");
  const btnSignin = document.getElementById("signin");

  btnSignin.addEventListener("click", e=>{
      //get email and pass
      const email = txtEmail.value;
      const pass = txtPassword.value;
      const auth = firebase.auth();

      //signin
      const promise = auth.signInWithEmailAndPassword(email,pass);
      console.log("success")
      promise.catch(e => console.log(e.message));

  });
})
