# HW1 – Web Programming 2025

## 🌐 Progetto: Air Up – Reset

Questo sito web rappresenta una vetrina interattiva del marchio "Air Up", che promuove bottiglie e pod aromatici per un'esperienza di idratazione innovativa.

---

## ✅ Funzionalità principali

- **Registrazione/Login/Logout** con validazione lato client e server
- **Contenuti dinamici** caricati asincronamente via JavaScript usando API REST PHP
- **Interazioni utente** salvate nel database (es. like, selezione gusti, preferiti)
- **API REST esterne integrate**:
  - 📡 Meteo attuale da [OpenWeatherMap](https://openweathermap.org/)
  - 🍹 Ispirazioni cocktail da [TheCocktailDB](https://www.thecocktaildb.com/)
- **Design responsive** ottimizzato per dispositivi mobili

---

## 🛠️ Tecnologie usate

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP 8+, MySQL
- **Database**: MySQL (dump incluso)
- **REST API**: Interne (PHP) + Esterne (OpenWeather, CocktailDB)
- **Sessioni**: PHP Sessioni native per autenticazione

---

## 📁 Struttura del progetto

hw1/
├── index.php # Pagina principale (homepage)
├── login.html # Form login utente
├── register.html # Form registrazione utente
├── mhw3.css # Foglio di stile principale
├── mhw3.js # JavaScript principale (interazioni asincrone)
├── register.php # API registrazione utente
├── login.php # API login
├── logout.php # Logout sessione
├── check_session.php # Verifica se l’utente è loggato (AJAX)
├── check_username.php # Verifica disponibilità username (AJAX)
├── weather.php # API server-side per dati meteo
├── dbconfig.php # Connessione al database MySQL
├── schema.sql # File di esportazione struttura database
├── immagini/
│ ├── hero2.jpg
│ ├── bottle.jpg
│ ├── menu.PNG
│ ├── logo2.PNG
│ ├── carrello.PNG
│ ├── limone.jpg / limone-thumb.jpg
│ ├── fragola.jpg / fragola-thumb.jpg
│ ├── menta.jpg / menta-thumb.jpg

yaml
Copia
Modifica

---

## 🧪 Validazioni

**Lato client:**
- Verifica formato della password (min. 8 caratteri, 1 maiuscola, 1 numero, 1 simbolo)
- Controllo AJAX su disponibilità dello username

**Lato server:**
- Protezione tramite query preparate (MySQLi `prepare`)
- Hash sicuro della password con `password_hash`
- Verifica credenziali tramite `password_verify`
- Sessioni gestite tramite `$_SESSION`

---

## 📦 Requisiti e dipendenze

- PHP 8.0+
- MySQL 5.7+
- Web server locale (es. Apache tramite XAMPP/Laragon)
- Connessione Internet per accedere alle API esterne

---
