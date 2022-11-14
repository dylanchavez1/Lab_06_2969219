<html>
<?php
        $quantity1 = $_POST["Quantity1"];
        $quantity2 = $_POST["Quantity2"];
        $quantity3 = $_POST["Quantity3"];
        $shippingCost = $_POST["shipping"];

        $price1 = 2000;
        $price2 = 1000;
        $price3 = 1500;

        $subTotal1 = $quantity1 * $price1;
        $subTotal2 = $quantity2 * $price2;
        $subTotal3 = $quantity3 * $price3;
        $total = $subTotal1 + $subTotal2 + $subTotal3 + $shippingCost;

        if ($shippingCost = 0)
        {
            $shipping = "7 Day";
        }
        else if ($shippingCost = 5)
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
        echo "<table align="center" border="1" width="100%">";
        echo "<tr><th>";
        echo "<td></td>";
        echo "<td>Quantity</td>";
        echo "<td>Cost Per Item</td>";
        echo "<td>Sub Total</td>";
        echo "<tr></th>";
        echo "<td>Nvidia RTX 3090</td>";
        echo "<td>".$quantity1."</td>";
        echo "<td>$".$price1."</td>";
        echo "<td>$".$subTotal1."</td>";
        echo "<tr>";
        echo "<td>Ryzen 9 CPU</td>";
        echo "<td>".$quantity2."</td>";
        echo "<td>$".$price2."</td>";
        echo "<td>$".$subTotal2."</td>";
        echo "<tr>";
        echo "<td>Motherboard</td>";
        echo "<td>".$quantity3."</td>";
        echo "<td>$".$price3."</td>";
        echo "<td>$".$subTotal3."</td>";
        echo "<tr>";
        echo "<td>Shipping</td>";
        echo "<td colSpan="2">$".$shipping."</td>";
        echo "<td>$".$shippingCost."</td>";
        echo "<tr>";
        echo "<td colSpan="3">Total Cost</td>";
        echo "<td>$".$total."</td>";
        echo "</table>";
        echo "</body>";
        echo "</html>";
?>
</html>