Add the "event" folder into your DariusDev modules folder
Add the "event.php" file at the website html root

Make sure you have a database "{website}_db" in your databases
Create the table for the gallery inside the database: 

CREATE TABLE `{website}_event` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `title`varchar(255) NOT NULL,
  `date`DATETIME NOT NULL,
  `place` varchar(255) NOT NULL,
  `img_filename` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `text` TEXT NOT NULL,
  `link` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


**Add your cpanel username at the beginning of db name