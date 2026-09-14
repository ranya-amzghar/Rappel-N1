let arr = [8, 3, 6, 1, 5, 7];
console.log("Avant:",arr);
for(i=0;i<arr.length;i++){
    for(j=0;j<arr.length;j++){
        if(arr[j]>arr[i]){
            let temp=arr[i];
             arr[i]=arr[j];
             arr[j]=temp;
         }
    }
}
console.log("After:", arr);