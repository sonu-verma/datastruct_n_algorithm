var array1 = [1,2,2,3,4,5]
var array2 = [1,4,4,9,16,25]

function checkCountFrequency(array1,array2){
    let array1Frequecy = {};
    let array2Frequecy = {};
    for(let item of array1){
        array1Frequecy[item] = (array1Frequecy[item] || 0)+1;
    }
    for(let item2 of array2){
        array2Frequecy[item2] = (array2Frequecy[item2] || 0) + 1;
    }
    // array1Frequecy = { '1': 1, '2': 2, '3': 1, '4': 1 }, 
    // array2Frequecy = { '1': 1, '4': 2, '9': 1, '16': 1 }
    for(let key in array1Frequecy){
        if(!array2Frequecy[key*key]){
            return false;
        }

        if(array1Frequecy[key] !== array2Frequecy[key*key]){
            return false;
        }
    }
    return true;
}

console.log(checkCountFrequency(array1,array2));