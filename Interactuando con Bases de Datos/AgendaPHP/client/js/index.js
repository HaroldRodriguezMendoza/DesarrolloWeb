$(function(){
  var l = new Login();
})

 
class Login {
  constructor() {
    this.submitEvent()
  }

  submitEvent(){
    $('form').submit((event)=>{

      event.preventDefault()
      this.sendForm()
    })
  }

  sendForm(){
    let form_data = new FormData();
    form_data.append('username', $('#user').val())
    form_data.append('password', $('#password').val())
    console.log("1");
    $.ajax({
      url: '../server/check_login.php',
      dataType: "text",
      cache: false,
      processData: false,
      contentType: false,
      data: form_data,
      type: 'POST',
      success: function(php_response){
        console.log("2");
        if (php_response == "OK") {
          console.log("3");
          window.location.href = 'main.html';
          console.log("4");
        }else {
          alert("Usuario o contraseña incorrecta");
        }
      },
      error: function(){
        alert("error en la comunicación con el servidor");
      }
    })
  }
}
