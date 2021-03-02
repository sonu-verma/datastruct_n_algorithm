// assending order

var arr = [7,5,1,4,6,2,0];
var temp; 
for(var i=0;i<arr.length;i++){
    for(var j = 0 ;j< (arr.length);j++){
        if(arr[i] < arr[j]){
            temp = arr[i];
            arr[i] = arr[j];
            arr[j] = temp;
        }
    }
}
console.log(arr);