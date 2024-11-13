
CREATE TABLE trips (
    id INT AUTO_INCREMENT PRIMARY KEY,
    destination VARCHAR(255) NOT NULL,
    flight VARCHAR(255) NOT NULL,
    accommodation VARCHAR(255) NOT NULL,
    attractions TEXT NOT NULL,
    date_planned TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
