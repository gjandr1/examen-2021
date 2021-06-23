## Ennoncé de l'examen

### Consignes

**Forkez** ce repositiry sur votre compte Github et clonez ce nouveau repository sur votre machine.

Committez et poussez vos changements après **chaque** point de l'exercice.

Respectez au mieux le MVC.

Attention à utiliser les bonnes balises HTML5.

### Exercice

1. Afficher la liste des transactions bancaires du mois (donc **uniquement de juin**):
    - La date de la transaction
    - Le nom et prénom du **destinataire** si le montant est **négatif** ou le nom et prénom de l'**émetteur** si le montant est **positif** (tout en majuscule)
    - Le numéro de compte bancaire de la personne concernée (voir point précédent) sous ce format: **"BE00 XXXX XXXX 0000"** (un espace tous les 4 chiffres et replacer du 5ième au 12ième chiffre par des "X")
    - Le montant en gris s'il est negatif ou en **vert** s'il est positif
    - **Triée** de la plus récente à la plus ancienne (par rapport à la date de la transaction)

2. Créer une page de formulaire qui permettra de créer une nouvelle transaction (accessible depuis un lien sur la première page):
    - Une liste déroulante avec les contacts (destinataire)
    - Un champ montant (nombre avec possibilité de mettre 2 chiffres après la virgule)
    - Un champ date avec la date du jour préremplie
    - La personne "connectée" est David Gilson, ça sera donc lui l'émetteur. (ceci est un champ caché)

3. Créer une page séparée de sauvegarde de la transaction:
    - Vérifier que le destinataire reçu soit **connu** dans les contacts
    - Vérifier qu'il s'agit d'un montant valide
    - Vérifier que la date est valide et n'est **pas dans le passé**
    - Si toutes les vérifications sont **ok**, afficher la **liste** (exercice 1) avec cette nouvelle transaction en plus (celle soumise)
    - Si une des vérifications n'est **pas ok**, retour sur le **formulaire prérempli** avec un **message d'erreur** en dessous du formulaire expliquant le problème

Encore un peu de temps ?
- Formatez l'affichage du montant pour toujours avoir **deux chiffres après la virgule**, exemple: "5,00€"
- Enlevez l'émetteur de la liste des destinataires possibles
- Ajouter une communication structurée à vos transactions

Un effort sur la présentation donnera des points bonus.

Bon travail
