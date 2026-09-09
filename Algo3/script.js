let nombres = [4, 7, 2, 7, 9, 4, 5];
let numbres =[];
for(i=0; i<nombres.length; i++){
    let count= 0;
    for(j=0; j<nombres.length; j++){
        if(nombres[i]===nombres[j]){
            count++;
        }
    }
    if(count>1){
        numbres.push(nombres[i]);
    }
}
console.log(numbres);