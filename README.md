# vlad_tepes
Ghid de utilizare
Se lansează un browser.
În bara de adrese, se scrie adresa site-ului: https://vlad-tepes.000webhostapp.com/
Pentru a accesa pagina admin va trebui să vă logați cu: Utilizator: admin și Parolă: admin.
Pentru a accesa pagina propriu-zisă  va trebui să vă logați cu: Utilizator: user și Parolă: user.

Scurtă descriere a modului de navigare pe site

Pagina principală  conține un formular de logare care prezintă două casete text (Utilizator și Parolă) și butonul  Logare.
Există 2 tipuri de utilizatori:  elevi și administrator. 
Pagina de admin conține butoanele :”Utilizatori” care face legătura cu tabelul ”useri”, în care sunt stocate datele utilizatorilor care pot accesa site-ul; ”Mesaje” ce deține informații din tabelul “contact” cu privire la mesajele primite de administratorii paginii  și  butonul “Exit” ce returnează pagina principală.
Pagina propriu-zisă conține:
-Informații despre Vlad Țepeș: Istorie, Legendă, Mituri, Curiozități, Ecranizări, Presa străină.
-O secțiune cu fotografii.
-Un formular de contact cu ajutorul căruia utilizatorii își pot spune părerea despre site.
-Informații cu privire la resursele folosite, la autori și documentația proiectului.   



 
Arhitectura aplicaţiei

 
DESFĂŞURAREA PROCESULUI 
1. Browserul cere serverului de web o pagină HTML conţinând un formular. 
2. Serverul trimite acea pagină browserului.  Acesta o afişează pe ecran lăsând apoi utilizatorul să completeze elementele formularului. 
3. După completare,  utilizatorul selectează un buton de tip "trimite datele". Browserul împachetează informaţiile completate trimiţându-le serverului de web. 
4. Serverul de web lansează scriptul PHP asociat formularului dându-I acestuia datele primite de la browser.
5. Scriptul PHP despachetează aceste date şi le foloseşte ca informaţii de plecare pentru acţiunea pe care o efectuează. Printre operaţiile efectuate de acest script pot fi: 
                    5.1. Trimiterea de cereri SQL către un SGBD. 
                    5.2. Primirea şi interpretarea rezultatelor acestor cereri. 
6. Scriptul PHP scrie la ieşire un fişier (în acest caz, de tip HTML) şi îşi încheie execuţia. 
7. Serverul de web preia acest rezultat şi îl trimite browserului spre afişare.
