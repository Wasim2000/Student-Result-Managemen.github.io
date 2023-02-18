function validate(){
var FName = document.getElementById("FName").value;
var LName = document.getElementById("LName").value;
var Age = document.getElementById("Age").value;
var dno = document.getElementById("dno").value;
var phn= document.getElementById("phn").value;
var add= document.getElementById("add").value;


    if(FName == "" || LName == ""){
      alert("name cannot be empty");
      return false;
    }
    else if (!/^[A-Za-z ]+$/g.test(FName) || !/^[A-Za-z]+$/g.test(LName))
    {
    alert("only alphabet characters allowed in name");
    return false;
    }
    else if ( (myform.Gender[0].checked == false) && (myform.Gender[1].checked == false) && (myform.Gender[2].checked == false))
    {
      alert("please choose your Gender");
      return false;
    }
    else if (!/^\d{10}$/g.test(phn))
    {
    alert("enter the valid phn number");
    return false;
    }
    else if(!/^[A-Za-z0-9]+$/g.test(dno))
    {
        alert("enter valid dno");
        return false;
    }
    else if (Age < 17)
    {
      alert("age not must be less then 17");
      return false;
    }
    else if(add =="")
    {
      alert("enter your address");
      return false;
    }
    else
    {
      alert("Record Inserted");
      return false;
    }

}