onmessage = function(message)
{
    var sum=0;
    for(var i=1;i<=1000000000;i++){
        sum+=i;
    }
    postMessage(sum);

}






