// arry = [1,2,3,4,3,5,4,6,7,8]

function checkLargestSum(array,chunkValue){
    let sum = 0;
    let tempSum = 0;
    for(let i = 0;i<chunkValue;i++){
        sum  += array[i];
    }
    tempSum = sum;
    for(let j=chunkValue;j<array.length;j++){
        tempSum =tempSum - array[j - chunkValue] + array[j]
        sum = Math.max(sum, tempSum);
    }
    return sum
}

const result = checkLargestSum([1,2,3,4,3,5,4,6,7,8],3);
console.log(result);