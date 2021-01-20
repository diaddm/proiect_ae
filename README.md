# proiect_ae


In fisierele .html este scris codul pentru afisarea elementelor in pagina (text, imagini, butoane) iar fisierele .css sunt destinate stilizarii acestor elemente.
In fisierul process.php se face conexiunea la baza de date MySQL si se verifica credentialele introduse in formular, pentru conectarea prin username si parola. Daca sunt introduse credentiale gresite sau nu sunt introduse deloc, se va afisa o eroare. Cand credentialele sunt introduse corect, se redirectioneaza catre pagina anterioara (adica home.html).
In fisierul quantity.js sunt functiile pentru elementul vizual de setare a cantitatii folosind butoanele + si - .


Modalitatea de functionare:

- accesarea contului cu citirea campurilor destinate username-ului si parolei si verificarea acestora cu cele salvate in baza de date
- dupa login, se redirectioneaza tot catre pagina principala
- in sectiunea de produse recomandate se afla patru produse, la apasarea butonului de adauga in cos apare o alerta prin care se comunica adaugarea produsului in cos
- selectand doar primul produs din lista, se deschide o pagina noua, cu detaliile produsului, un element de setare a cantitatii cu + si - si butonul de adaugare in cos care la apasare afiseaza un popup
