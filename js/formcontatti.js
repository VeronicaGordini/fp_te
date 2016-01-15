// JavaScript Document

$(document).ready(function ()
{
    $("#modulo").validate(
    {
        rules:
        {
            name: "required",
            mail: {
      				required: true,
      				email: true, 
			},
            object: "required",
            message: "required",
            
         },
            
        messages:
        {
            name: "manca nome",
            mail: "scrivere indirizzo mail valido",
            object: "manca oggetto",
            message: "manca messaggio",
           
        }
    });
});
