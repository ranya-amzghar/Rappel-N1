let produits = [
    {"produit":"A", "prix":30, "views": 1200},
    {"produit":"B", "prix":20, "views": 2500},
    {"produit":"C", "prix":15, "views": 1800},
    {"produit":"D", "prix":40, "views": 3000},
    {"produit":"E", "prix":10, "views": 900},
    {"produit":"F", "prix":25, "views": 2000}
]
let badget = 100;
produits.forEach(produit=>{
    produit.forEach(views => {
        if(produit[views]>views){
            let temp = views;
            views = produit[views];
            produit[views] = temp;
        }
    });
})
