(function() {



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

  firbase.auth().onAuthStateChanged(firbaseUser => {
      
  })
})
