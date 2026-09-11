**Observation**
COMMANDE(
    numero_commande,
    date_commande,
    nom_client,
    email_client,
    nom_produit,
    prix_produit,
    quantite_commandee
)
On vois que le nom de client, l'email de client, nom de produit, et le prix de produit se repetent.


**Identifier les groupes**
*cherchons de dependances fonctionnelles*
id_client ->nom_client,email_client
id_produit ->nom_produit,prix_produit
*Identifions les groupes*
GROUPE 1
id_client,
nom_client,
email_client
GROUPE 2
id_produit,
nom_produit,
prix_produit


**Séparer les données**
*Creation de nouvelle relation*
CLIENT(
    id_client,
    nom_client,
    email_client
)
PRODUIT(
    id_produit,
    nom_produit,
    prix_produit
)
*Conserver l'identifiant*
COMMANDE(
    numero_commande,
    date_commande,
    id_client,
    id_produit,
    quantite_commandee
)


**Identifier les entités**
*Les entités*
Commande
Client
Produit
*Identifier les propriétés*
Commande: 
numero_commande -> l'identifiant
date_commande -> propriétés
quantite_commande -> propriétés
Client:
id_client -> l'identifiant
nom_client -> propriétés
email_client -> propriétés
Produit:
id_produit -> l'identifiant
nom_produit -> propriétés
email_produit -> propriétés