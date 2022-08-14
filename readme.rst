########################
CSQUARE ASSIGNMENT TASKS
########################

1. Task 1 (Customer)
	a. Store/Register Customer data with view list (Form validation is must)
	b. Below fields should be included in the form
		o Title (Mr/Mrs/Miss/Dr)
		o First name
		o Last name
		o Contact number
		o District
2. Task 2 (Item)
	a. Store/Register Item details with view list (Form validation is must)
	b. Below fields should be included in the form
		o Item code
		o Item name
		o Item category (must be able to select)
		o Item sub category (must be able to select)
		o Quantity
		o Unit price
3. Task 3 (Reports)
	a. Invoice report
		i. Should be able to select a date range and search
		ii. Below details should be included in the report
			o Invoice number/ Date/ Customer/ Customer district /Item
			count/ Invoice amount
	b. Invoice item report
		i. Should be able to select a date range and search
		ii. Below details should be included in the report
			o Invoice number/ Invoiced date/ Customer name/ Item name
			with Item code/ Item category/ Item unit price
	c. Item report
		i. Below details should be included in the report
			o Item Name (shouldn’t repeat)/ Item category/ Item sub
			category/ Item quantity

******************
CONFIG ENVIRONMENT
******************

- Change Base Url
	o goto application/config/config.php
	o inside it change to yours
			$config['base_url'] = 'http://localhost:3000/';

- Set Database Config
	o goto application/config/database.php
	o inside it change to yours
			'hostname' => 'localhost',
        	'username' => 'root',
        	'password' => '',
        	'database' => 'csquare_assignment',
