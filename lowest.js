// find lowest value from array

var arr = [0,9,6,4,-1,24,2,1];
var currentValue = arr[0];

for(var i = 1;i< arr.length;i++){
    if(arr[i] < currentValue){
        currentValue = arr[i];
    }
}
console.log(currentValue);