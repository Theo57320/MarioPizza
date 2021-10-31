# MarioPizza BARDET Valentin, ANTOLINI Théo

## Execution

Follow [this procedure](nginx-install.md) to launch the MARIO PIZZA application..

1. Open a command prompt at the root of the project
2. Make sure you are in the correct style file reference:: `C:\Users\theoa\PhpstormProjects\MarioPizza>
   `
3. Use the `cd` function to go to the right reference point.
4. Run `php main.php` to launch the software.


## Use

When the program is launched, MARIO PIZZA offers 3 modes:
1. [For a custom pizza](nginx-install.md)
   1. When the customer decides to click on the custom pizza, he writes `1`.
   2. The application will show him the different ingredients available to be able to add to his pizza.
   3. He will therefore have to add at least 3 ingredients to create his pizza. Example `tuna`
   4. [WARNING !](nginx-install.md) the customer must choose an ingredient and validate. You cannot choose more than one ingredient at the same time.
   5. When the customer has chosen the 3 ingredients, we offer him more ingredients or add it to the basket.
   6. 
      1. `1` Yes
      2. `2` NO ADD TO CART 
   
   7. When the order is finalized he offers us another pizza or to finalize the order.
   
   8. A message will show us thanking you for your order and the amount to pay.
   
   9. [to see the pizza menu](nginx-install.md)
       1. When the customer decides to click on the pizza menu he writes `2`
       2. The pizza menu will therefore be displayed with the price. You just have to enter the desired pizza and validate.
       3. When the pizza is valid, it displays the ingredients.
       4. It is possible to remove ingredients if possible by adding it to the basket. If the customer wishes to remove this pizza, just enter `2` to return to the menu
       5. He will give us another pizza or finalize the order.
       6. A message will show us thanking you for your order and the amount to pay.
   10. [to cancel](nginx-install.md)
       1. If the customer wishes to stop ordering, he enters `2` to exit.


## ADMIN 

Follow [this procedure](nginx-install.md) to launch the MARIO PIZZA application in ADMIN mode.

1. In the customer menu, the administrator enters `4` (This number is not displayed as a precaution)
2. A password will be requested by the admin: enter `password`
3. We have several choices in admin mode
   1. [View orders](nginx-install.md)
      1. We see the number of customers' orders.
   2. [View and edit pizzas](nginx-install.md)
      1. The user can see the orders, modify the pizzas if he wishes.
      2. He can change the price of the pizza
      3. Create new pizza
      4. Add new ingredients
      5. Return to the admin page
   3. [View stocks](nginx-install.md)
      1. User can see pizza stock
   4. [Return to start](nginx-install.md)
      1. When his modifications have been carried out he can therefore return to the menu.
   