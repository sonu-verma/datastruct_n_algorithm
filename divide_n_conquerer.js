// this algorithm is for binary 
//time complexity => binary O(log(n))
// arry = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15]; 8
// min = 0 ; max = 14 ; middle =  7
function searchAlgo(array,number){
    let min = 0;
    let max = array.length - 1;
    while(min <= max){
        middleIndex = Math.floor((min+max)/2)  //min = 0 ; max =  6
        if(array[middleIndex] < number){
            min = middleIndex + 1;
        } else if(array[middleIndex] > number){
            max = middleIndex - 1;
        }else{
            return middleIndex;
        }
    }
    return -1;
}

const result = searchAlgo([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],12);
console.log(result);