-- Structure

CREATE TABLE venues (
	id integer PRIMARY KEY AUTOINCREMENT,
	name VARCHAR(255) NOT NULL
);

CREATE TABLE items (
	id integer PRIMARY KEY AUTOINCREMENT,
	venue_id integer NOT NULL,
	name VARCHAR(255) NOT NULL,
	FOREIGN KEY (venue_id) REFERENCES venues (id)
);

CREATE TABLE spaces (
	id integer PRIMARY KEY AUTOINCREMENT,
	item_id integer NOT NULL,
	hour_price real NOT NULL,
	FOREIGN KEY (item_id) REFERENCES items (id)
);

CREATE TABLE products (
	id integer PRIMARY KEY AUTOINCREMENT,
	item_id integer NOT NULL,
	price real NOT NULL,
	FOREIGN KEY (item_id) REFERENCES items (id)
);
