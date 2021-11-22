# PHP i Objects

## Nivell 1

- Exercici 1

    Crea una classe Employee defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos (si el sou supera 6000 paga impostos).

- Exercici 2

    Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().

    A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.

## Nivell 2

- Exercici 1

    Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

    Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

    Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada de el dau en qüestió.

    Crea finalment el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus

    Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

## Nivell 3

- Exercici 1

    Crea un projecte Bancs, afegeix a el projecte una classe Account amb atributs per número de compte, nom i cognoms de el client i el saldo actual. Defineix en la classe els següents mètodes:

    Constructor que inicialitzi els atributs.
    Crea el mètode deposit($amount) que permet ingressar una quantitat al compte.
    Crea el mètode withdraw($amount) que permet retirar una quantitat del compte sempre que hi hagi saldo, si no n'hi ha el mètode haurà de retornar un missatge d'error
    Getters i Setters.
    Crea una petita interfície amb ajuda d'HTML I CSS que permeti ingressar una quantitat i dipositar o retirar el saldo del compte.

    Fes les validacions pertinents per assegurar que la quantitat ingressada per l'usuari és correcta.