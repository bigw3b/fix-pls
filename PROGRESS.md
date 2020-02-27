### DOKUMENTÁCIA

# 1. Fáza

## frontend, stylisti
+ Rozvrhnúť overall štýl webu, začať na ňom pracovať
+ Návrh formuláru na pridanie inzerátu:
    - (povinné pole bude to, za ktorým je / ) 
    - Názov projektu/
    - Popis
    - Detailný popis/
    - Verzia objavenia
    - Fotografie
        - Možnosť pridať takpovediac "nekonečno" fotografií, toto bude obmedzené backendom na určitý počet.
        - Prvá fotografia umiestnená do pola bude nastavená ako hlavná, tzn. prezentačná.

## backend
+ Vytvoriť spojenie s databázou
+ Vytvoriť schému tabuľky v ktorej budú requesty 'zt_requests'
    - Obsahovať musí basic text, užívateľa (zatiaľ anonym), atď
+ Vytvorit schému tabuľky v ktorej budú priradené fotky k requestom 'zt_requests_photos'
+ Vytvoriť schému tabuľky v ktorej budú prirdenée komentáre k requestom 'zt_requests_comments'
+ Vytvoriť schému tabuľky v ktorej budú prirdenée príhozy k requestom 'zt_requests_bids'

+ Sfunkčniť pridávanie inzerátu do databáze cez formulár.
+ Vypisovanie requestov na homepage.
+ Vypisovanie basic detailu na request detail page. 



# 2. Fáza

## frontend, stylisti
+ Registračná stránka
+ Prihlasovacia stránka
+ Zabudnuté heslo stránka
+ Odladiť homepage dizajn kde budú vylistované requesty
+ Odladiť detail requestu
    - komentáre
    - overall bid price
    - jednotlivý bideri
+ Pracovať na ostatných podstránkach ako je vyhľadávanie inzerátov, o nás, kontakt, ...

## backend
+ Odladiť homepage zobrazovanie inzerátov
+ Odladiť detail inzerátu
+ Pracovať na mechanike filtrácie, vyhľadávania inzerátov
+ Pracovať na user systéme
    - Integrácia do requestov