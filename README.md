# MarioPizza BARDET Valentin, ANTOLINI Théo

## Exécution
Suivre [cette procédure](nginx-install.md) pour lancer l'application MARIO PIZZA.

1. Ouvrir une invite de commande à la racine du projet
2. S'assurer d'etre dans le bon repère de fichier du style: `C:\Users\theoa\PhpstormProjects\MarioPizza>
   `
3. Utiliser la fonction `cd` pour se diriger dans le bon repère.
4. Exécuter `php main2.php` pour lancer le logiciel.


## Utilisation

Lorsque le programme est lancée, MARIO PIZZA vous propose 3 modes :
1. [For a custom pizza](nginx-install.md)
   1. Lorsque le client decide de cliquer sur la pizza custom il ecrit`1`.
   2. L'application vas lui afficher les différents ingrédients disponibles pour pouvoir ajouter à sa pizza.
   3. Il devras donc ajouter au minium 3 ingredients pour crééer sa pizza. Exemple `tuna`
   4. [ATTENTION !](nginx-install.md) Le client doit chosir un ingrédients et valider. Il est impossible de choisir plusieurs ingrédients à la fois.
   5. Lorsque le client à choisis les 3 ingrédients nous lui proposons plus d'ingrédient ou de l'ajouter au panier.
   6. 
      1. `1` Pour ajouter des ingredients
      2. `2` Pour passer au panier
   
   7. Lorsque la commande est finalisé il nous propose une autre pizza ou bien de finaliser la commande.
   8.
   6. Un message nous affichera pour vous remercier de votre commande et le montant à payer.
   
2. [to see the pizza menu](nginx-install.md)
    1. Lorsque que le client décide de cliquer sur le menu pizza il ecrit `2`
    2. Le menu des pizza vas donc s'afficher avec le prix. Il suffira d'entrer la pizza désirer et de valdier.
    3. Lorsque la pizza est valide elle nous affiche les ingredients.
    4. Il est possible de retirer des ingredients si possible en l'ajoutant au panier. Si le client desire retirer cette pizza il suffit d'entrer `2` pour un retour au menu
    5. Il nous porposera d'autre pizza ou bien de finaliser la commande
    6. Un message nous affichera pour vous remercier de votre commande et le montant à payer.
3. [to cancel](nginx-install.md)
   1. Si le client désire de ne plus commande il entre `2` pour quitter.


## ADMIN 

Suivre [cette procédure](nginx-install.md) pour lancer l'application MARIO PIZZA en mode ADMIN.

1. Dans le menu client, l'administrateur entre `4` (Ce numéro ne s'affiche pas par mesure de précaution)
2. Un mot de passe seras demandé par l'admin : entrée `password`
3. Nous avons plusieurs choix en mode admin 
   1. [View orders](nginx-install.md)
     1.
   2. [View and exit pizzas](nginx-install.md)
   3. [View stocks](nginx-install.md)
   4. [Return to start](nginx-install.md)
   