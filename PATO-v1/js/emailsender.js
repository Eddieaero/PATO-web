//send email js script

function SendMail(){

var templateParams = {
    from_name : document.getElementById("fullName").value,
    email_id : document.getElementById("email_id").value,
    message : document.getElementById("message").value,
};
 
emailjs.send('service_nq7qiet', 'template_3u0e5fd', templateParams,'v15FOpzmUHC5_jhlK')
    .then(function(response) {
       console.log('SUCCESS!', response.status, response.text);
    }, function(error) {
       console.log('FAILED...', error);
    });
}