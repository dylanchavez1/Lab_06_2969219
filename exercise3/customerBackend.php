<?php
        //quantity and prices
        $quantity1 = $_POST['quantity1'];
        $quantity2 = $_POST['quantity2'];
        $quantity3 = $_POST['quantity3'];

        //conditional statement
        $shippingCost = $_POST["shipping"];

        //item prices
        $price1 = 2000;
        $price2 = 1000;
        $price3 = 1500;

        //subtotal
        $subTotal1 = $quantity1 * $price1;
        $subTotal2 = $quantity2 * $price2;
        $subTotal3 = $quantity3 * $price3;
        $total = $subTotal1 + $subTotal2 + $subTotal3 + $shippingCost;

        $shipping = '';
      
        if ($shippingCost == 0)
        {
            $shipping = "7 Day";
        }
        else if ($shippingCost == 5)
        {
            $shipping = "3 Day";
        }
        else
        {
            $shipping = "Overnight";
        }
        echo "<html>";
        echo "<head>";
        echo "</head>";
        echo "<body>";
        echo "<table align='center' border='1' width='100%'>";
        echo "<tr><th>Item</th>";
        echo "<th>Quantity</th>";
        echo "<th>Cost Per Item</th>";
        echo "<th>Sub Total</th></tr>";
        echo "<tr><td>Nvidia RTX 3090</td>";
        echo "<td>".$quantity1."</td>";
        echo "<td>$".$price1."</td>";
        echo "<td>$".$subTotal1."</td></tr>";
        echo "<tr><td>Ryzen 9 CPU</td>";
        echo "<td>".$quantity2."</td>";
        echo "<td>$".$price2."</td>";
        echo "<td>$".$subTotal2."</td></tr>";
        echo "<tr><td>Motherboard</td>";
        echo "<td>".$quantity3."</td>";
        echo "<td>$".$price3."</td>";
        echo "<td>$".$subTotal3."</td></tr>";
        echo "<tr><td>Shipping</td>";
        echo "<td colSpan='2'>".$shipping."</td>";
        echo "<td>$".$shippingCost."</td></tr>";
        echo "<tr><td colSpan='3'>Total Cost</td>";
        echo "<td>$".$total."</td></tr>";
        echo "</table>";
        echo "</body>";
        echo "</html>";
?>