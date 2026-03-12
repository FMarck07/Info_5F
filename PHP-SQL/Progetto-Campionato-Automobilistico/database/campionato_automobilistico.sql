CREATE DATABASE francesco_marchetto_campionato_automobilistico;

-- Creazione tabella Case Automobilistiche
CREATE TABLE CasaAutomobilistica (
    ID_Casa INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Colore_Livrea VARCHAR(50) NOT NULL
);

-- Creazione tabella Piloti
CREATE TABLE Pilota (
    ID_Pilota INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Cognome VARCHAR(50) NOT NULL,
    Nazionalita VARCHAR(50) NOT NULL,
    Numero_Gara INT NOT NULL UNIQUE,
    ID_Casa INT NOT NULL,
    FOREIGN KEY (ID_Casa) REFERENCES CasaAutomobilistica(ID_Casa)
);

-- Creazione tabella Gare
CREATE TABLE Gara (
    ID_Gara INT AUTO_INCREMENT PRIMARY KEY,
    Nome_Circuito VARCHAR(100) NOT NULL,
    Data_Gara DATE NOT NULL
);

-- Creazione tabella Risultati (Relazione N:M tra Piloti e Gare)
CREATE TABLE Risultato (
    ID_Gara INT,
    ID_Pilota INT,
    Posizione_Arrivo INT NOT NULL,
    Punti_Ottenuti INT NOT NULL,
    Giro_Veloce BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (ID_Gara, ID_Pilota),
    FOREIGN KEY (ID_Gara) REFERENCES Gara(ID_Gara),
    FOREIGN KEY (ID_Pilota) REFERENCES Pilota(ID_Pilota)
);
