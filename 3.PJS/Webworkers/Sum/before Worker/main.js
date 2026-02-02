

function bgc(){
if(document.getElementsByTagName("body")[0].style.backgroundColor=="red"){
    document.getElementsByTagName("body")[0].style.backgroundColor="green";
}
else{
    document.getElementsByTagName("body")[0].style.backgroundColor="red";
}
}

function xx(){
   var sum=0;
    for(var i=1;i<=100000000000;i++){
        sum+=i;
    }
  document.getElementById("print").innerHTML=sum;
}

