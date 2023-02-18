function myFunction() {
    var dno = document.getElementById("dno").value;
    var sub1= document.getElementById("sub1").value;
    var sub2= document.getElementById("sub2").value;
    var sub3= document.getElementById("sub3").value;
    var sub4= document.getElementById("sub4").value;
    var sub5= document.getElementById("sub5").value;
    if (!/^[A-Za-z0-9]+$/g.test(dno))
    {
      alert("enter valid dno");
      return false;
    }
    else if(sub1=="" ||sub2=="" ||sub3=="" ||sub4=="" ||sub5==""){
      alert("enter all the fields");
      return false;
    }
    else if (sub1>100 ||sub2>100 ||sub3>100 ||sub4>100 ||sub5>100 ){
      alert("enter the valid mark");
      return false;
    }
    else{
      alert("marks added successfully");
      return false;
    }
  }