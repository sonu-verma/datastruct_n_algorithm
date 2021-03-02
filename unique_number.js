function getUniqueNumber(array){
    // console.log(array);
    let i = 0;
    var newArr = [];
    for(j=0;j<array.length;j++){
       if(newArr.indexOf(array[j]) === -1){
            newArr.push(array[j]);
       }
    }
    return newArr.sort();
}

const result = getUniqueNumber([1,1,2,2,8,3,4,4,5,5,6,6,7,7,8]);
console.log(result);