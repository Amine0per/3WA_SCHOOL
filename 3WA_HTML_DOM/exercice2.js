let email_1 = document.getElementById('email-1'),
    email_2 = document.getElementById('email-2');

if (email_1 && email_2) {
    email_1.onkeyup = email_2.onkeyup = email_1.onblur = email_2.onblur = function() {
        let value_1 = email_1.value;
        let value_2 = email_2.value;

        if (value_1 && value_2) { 
            if (value_1 === value_2) {
                email_1.className = "green";
                email_2.className = "green";
            } else {
                email_1.className = "red";
                email_2.className = "red";
            }
        }
    };
}










  
   






