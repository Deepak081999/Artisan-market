<?php include "../common_dhashborad/headertop.php";?>
<?php include "../common_dhashborad/header.php";?>
<hr>

<!-- <section id="page-headar" class="about-headar">
    <h1>#Cart</h1>
    <p>Add your coupon code & Save upto 70%</p>
</section> -->

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Qrice</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"> <i class=" fa fa-times-circle"></i></a></td>
                <td><img src="img/products/f1.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.90</td>
                <td><input type="number" value="1"></td>
                <td>$118.90</td>
            </tr>
            <tr>
                <td><a href="#"> <i class=" fa fa-times-circle"></i></a></td>
                <td><img src="img/products/f2.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.90</td>
                <td><input type="number" value="1"></td>
                <td>$118.90</td>
            </tr>
            <tr>
                <td><a href="#"> <i class=" fa fa-times-circle"></i></a></td>
                <td><img src="img/products/f3.jpg" alt=""></td>
                <td>Cartoon Astronaut T-Shirts</td>
                <td>$118.90</td>
                <td><input type="number" value="1"></td>
                <td>$118.90</td>
            </tr>
        </tbody>

    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter your coupon">
            <button class="normal">Apply</button>
        </div>
    </div>
    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$ 335</td>
            </tr>
            <tr>
                <td>Shopping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Totals</strong></td>
                <td><strong>$ 335</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to checkout</button>
    </div>
</section>


<?php include "../common_dhashborad/footer.php";?>