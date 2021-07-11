function validation(){
    var name = document.getElementById("firstName").value;
    var namee = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var message = document.getElementById("textArea").value;
    var errorMessage = document.getElementById("errorMessage");
    var text;


    errorMessage.style.padding = "10px";

    if(name.length <3){
        text = "please enter a valid name";
        errorMessage.innerHTML = text;
        return false;
    }

    // if(email.indexOf("@") ==-1 || email.length <6{
    //     text = "please enter a valid email";
    //     errorMessage.innerHTML = text;
    //     return false;
    // }

    // if(is(NaN(number) || number.length !=10){
    //     text = "please enter a valid name";
    //     errorMessage.innerHTML = text;
    //     return false;
    // }

    if(message.length <=20){
        text = "please enter more than 20 characters insde the message  box ";
        errorMessage.innerHTML = text;
        return false;
    }

    alert("Form submitted successfully !")

    return true;
 






}