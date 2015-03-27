<!DOCTYPE html>
	
	<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Clothing Line</title>
    </head>
    <body style="margin: 20px;">
        <h1>Clothing Line</h1>
		
        <form action="checkout/index" method="post" value="Checkout"/>
		
            <fieldset>   
				
                <label class="radio">
                    <input name="type" type="radio" value="Shirts"/> Shirts
                </label>
                <label class="radio">
                    <input name="type" type="radio" value="Pants"/> Pants
                </label>
                <label class="radio">
                    <input name="type" type="radio" value="Socks"/> Socks
                </label>
				<label class="radio">
                    <input name="type" type="radio" value="Shorts"/> Shorts
                </label>
				<br />
				<br />
				
                <label>
				Size:
                <select name="size">
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                </select>
                </label>
				<br />
				<br />
				
				Quantity:
				<input type="text" name="quantity">
				<br />
				<br />
			
                <input type="submit" name="button" value="Checkout"/>
            </fieldset>
         </form>
    </body>
</html>