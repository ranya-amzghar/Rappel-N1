let arr = [50, 20, 5, 30, 15];
let max = arr[0];
for(i=1; i<arr.length; i++){
    if(arr[i]> max){
        max = arr[i];
    }
}
console.log(max);