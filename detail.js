function validate(){
// var Name= document.getElementById("Name").value;
var Dno= document.getElementById("Dno").value;

    if (Dno ==""){
        alert("enter valid Dno!!!");
    }
    if (Dno == Dno){
    window.location="table.php";
    return false;
}
else{
    alert("enter valid details!!!");
}


}