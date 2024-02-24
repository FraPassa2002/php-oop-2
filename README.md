# php-oop-2


Tipi di relazioni tra le classi:
1.Ereditarietà:
    - EUN
Quando viene stesa la classe le proprietà della classe padre vengono mantenute nella classe che estende.


Public: è sempre visibile

protected: è visibile all'interno ma non all'esterno, ma è ereditato

private: è visibile all'interno ma non all'esterno, e non è ereditato


2. Composizione:
 - AUN

 Es:
 Il computer ha un monitor, una tastiera, ... . Ma NON C'è NESSUNA RELAZIONE tra le propiretà della classe computer e la classe monitor, sono due classi totalmente separate. Ma potrei creare una proprietà in computer che contiene una istanza di monitor, così da associare due istanze assieme.


 Molto probabilmente dobbiamo creare una classe per ogni tabella del database.
 Es:
 Se nel database abbiamo la tabella products, quasi sicuramente andremo a creare su .php la classe product.php