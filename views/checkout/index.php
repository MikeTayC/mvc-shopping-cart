<?php 
//autoloader
spl_autoload_register('class_autoloader');

//checks request method is correct
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//error check to make sure there was a selection
	if (empty($_POST["size"]) || empty($_POST["quantity"]) || empty($_POST["type"]))
	{            
		echo 'Your cart is empty!';
	}
	
	//creates an instance of the object
	$items = new $_POST["type"]($_POST["size"], $_POST["quantity"]); 
	
	//stores object in an array
	$cart = array($items);
 }
 ?>
	<div id="middle">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Type
                </th>
                <th>
                    Size
                </th>
                <th>
                    Price
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Total
                </th>
            </tr>
        </thead>
        <tbody>    
        <?php 
		//iterates over object in array into an html table 
		foreach($cart as $item)
		{
			print("<tr>");
            print("<td>" . $item->type . "</td>");
            print("<td>" . $item->size . "</td>");
            print("<td> $" . $item->price . "</td>");      
            print("<td> " . $item->quantity . "</td>");
            print("<td> $" . $items->getTotal() . "</td>");
            print("</tr>"); 
		}
		?>
        </tbody>
    </table>
