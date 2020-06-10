function validateForm(){
    var fname = document.forms["users_details"]["first_name"].value;
    var lname = document.forms["users_details"]["last_name"].value;
    var user_city = document.forms["users_details"]["user_city"].value;
    
    /* 
    Note
    User details is the name of our form
    */
   if (fname==null|| lname == " " || user_city == " ") {
       alert ("all details are required were not supplied");
       return false;
   }
   
   return true;

}
