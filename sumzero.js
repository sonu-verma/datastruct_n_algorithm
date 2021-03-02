// [-5,-4,-3,-2,0,2,4,6,8]

function getSumZero(array1){
    let leftStart = 0;
    let rightStart = array1.length - 1;

    while(leftStart < rightStart){
        let sum = array1[leftStart]+array1[rightStart];
        if(sum == 0){
            return [array1[leftStart],array1[rightStart]];
        } else if(sum > 0){
            rightStart--;
        }else{
            leftStart++;
        }
    }
}

const result  = getSumZero([-5,-4,-3,-2,0,2,4,6,8]);
console.log(result);