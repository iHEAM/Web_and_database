# Web_and_database


This repository contains three tasks:

-Create a web page using GET to take the value of the sensor from the user.
-Create a database. 
-Create a web page that stores the sensor value entered by the user in the previously established database.


This repository contains three files:

first file (data.html):

It contains HTML and JS code. Creates buttons, table, and buttons that send sensor values to the custom database.

HTML code: 
There are two buttons: The first is add data to add the value to the table within the site, and the second is save data to send the values to the custom database.

JS code: Contains three functions for the table shown on the site page:

To add the value to this table.
To modify the value before saving and sending it to the relevant database. 
-To undo or delete the value from this table and before sending it to the relevant database.


second file (save_data.php):

Contains PHP code: which will connect the web page to the database. And send the sensor values entered by the user to the specified database. It also includes two cases:

When the submission is successful, a message will appear on the web page: “New Details Entry inserted successfully” When the transmission fails: “Error”.


last file (database):

It contains several images to illustrate the website's work, the way it interacts with the user, and how to send the values to the relevant database.
