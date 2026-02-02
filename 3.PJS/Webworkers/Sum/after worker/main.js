const workerobj=new Worker('worker.js');

function bgc(){
if(document.getElementsByTagName("body")[0].style.backgroundColor=="red"){
    document.getElementsByTagName("body")[0].style.backgroundColor="green";
}
else{
    document.getElementsByTagName("body")[0].style.backgroundColor="red";
}
}

function xx(){
    workerobj.postMessage('start');
}

workerobj.onmessage = function(b){
    document.getElementById("print").innerHTML=b.data;
}
