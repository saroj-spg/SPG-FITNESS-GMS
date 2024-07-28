//Script for Hamburger Menu 
document.querySelector('.hamburger').addEventListener('click', function() {
    document.querySelector('.navbar-menu').classList.toggle('active');
});




//reg validation
var namepattern=/^[A-Za-z]{3,20}$/;
    function reg_validate(){
    var error=0;
    
    var un=document.forms['regform']['uname'].value;
    var add=document.forms['regform']['address'].value;
    var gen=document.forms['regform']['gender'];
    var em=document.forms['regform']['email'].value;
    



    if(un==null||un=="")
    {
        alert("please enter username");
        error++;
    }
     if(!namepattern.test(un))
            {
                alert("name can only include alphabhets");
                error++;
            
            }
    else if(add==null||add=="")
    {
        alert("please enter  your address");
        error++;
    }
    else if((gen[0].checked==false)&&(gen[1].checked==false))
    {
        document.getElementById("gen").innerHTML="select your gender";
        return false;
    }
    else if(em==null||em=="")
    {
        document.getElementById("mail").innerHTML="enter your email";
        return false;
    }
}

