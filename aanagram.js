// hello = lloeh

// function checkIsAanagram(string1,string2){
//     let string1Arr = {};
//     let string2Arr = {}
//     for(let word of string1){
//         string1Arr[word] = (string1Arr[word] || 0 ) + 1;
//     }

//     for(let word2 of string2){
//         string2Arr[word2] = (string2Arr[word2] || 0) + 1;
//     }
    
//     for(let alpha of string1){
//         if(!string2Arr[alpha]){
//             return false;
//         }

//         if(string1Arr[alpha] !== string2Arr[alpha]){
//             return false;
//         }   
//     }

//     return true;
// }

function checkIsAanagram(string1,string2){

    if(string1.length !== string2.length){
        return false;
    }
    let counter = {};
    for(let letter of string1){
        counter[letter] = (counter[letter] || 0) + 1;
    }

    for(let item of string2){
        if(!counter[item]){
            return false;
        }

        counter[item] -= 1;
    }

    return true;
}
const result = checkIsAanagram('raju','uraj');

if(result){
    console.log("its aanagram");
}else{
    console.log('not an aanagram');
}