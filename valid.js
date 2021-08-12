console.log("hoise");

function valid()
{
  
    let ln = document.forms["myForm"]["inputFeet"].value;
    let lm = document.forms["myForm"]["conv"].value;

    if (ln == "")
    {
        document.getElementById("selectEr").innerText="Input Field is Empty";
    }
    if (lm == "")
    {
        document.getElementById("inputEr").innerText="Select Field is Empty";
    }
    else{

     result = ln*12;
     document.getElementById("outputInches").innerHTML=result;
    }
}