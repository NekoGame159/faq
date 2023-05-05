function findAverage(arr) {
    let sum = 0;
    for(let i = 0; i < arr.length; i++) {
        sum += arr[i];
    }
    return sum / arr.length;
}

const numbers = [4,7,2,9,5];
console.log(findAverage(numbers));