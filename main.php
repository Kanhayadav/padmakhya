<?php
$page_name = 'Student Table For Students { View Only } ';
include_once('header.php');
include_once('Functions/dbs.php');
include_once('Functions/tables.php');
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
$data=article_list();

?>
<html>
    <head>
    <link rel="stylesheet" href="main.css">
    </head>
<body>
<!--have to add if condition that if the session is not created and a user clicks on add to cart then he will be redirect to register page-->  
<div id="main_outer">
        <div id="login1">

        <div class="box1con">
            <img src="images/roze.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Roze', 350)">Add</button>
            <p>Rose incense sticks are a wonderful way to bring the soothing and fragrant qualities of roses into your daily life. These all-natural sticks are made with rose essential oil or fragrance oil, and when burned, release a sweet, floral aroma that is both calming and uplifting. </p>
        </div>

        <div class="box1con">
        <img src="images/CedarWood.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Natural Fragrance', 250)">Add</button>
            <p>Natural fragrance incense sticks are made from a blend of natural ingredients and herbs. They are a popular alternative to synthetic incense sticks, which may contain harmful chemicals. Natural fragrance incense sticks are often done for meditation</p>
        </div>

        <div class="box1con">
        <img src="images/IndianRose.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Sandalwood', 400)">Add</button>
            <p>Sandalwood fragrance incense sticks are a popular type of natural incense sticks. They are made from the fragrant heartwood of the sandalwood tree, India and other parts of Southeast Asia. Sandalwood incense sticks have a woody aroma that is believed. </p>
        </div>

        <div class="box1con">
        <img src="images/Jasmine_1_540x.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Lavender', 400)">Add</button>
            <p>Lavender incense sticks are a popular type of natural incense stick that is made from the fragrant flowers of the lavender plant. Lavender is known for its sweet, floral aroma and is often used for relaxation, stress relief, and to promote better sleep. </p>
        </div>

        <div class="box1con">
        <img src="images/lemongrass.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Patchouli', 400)">Add</button>
            <p>Patchouli incense sticks are a type of incense that are made from the aromatic leaves of the patchouli plant. The fragrance of patchouli is often described as earthy, musky, and woody, and is widely used in perfumes, soaps, and other cosmetic products.
</p>
        </div>

        <div class="box1con">
        <img src="images/raw.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Cinnamon', 400)">Add</button>
            <p>Cinnamon incense sticks are a popular type of natural incense stick that is made from the fragrant bark of the cinnamon tree. Cinnamon has a warm, spicy, and sweet aroma that is believed to have a variety of therapeutic benefits. </p>
        </div>

        <div class="box1con">
        <img src="images/Oudh.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Eucalyptus', 400)">Add</button>
            <p>Eucalyptus incense sticks are a type of incense made from the leaves of the eucalyptus tree. Eucalyptus is known for its fresh and invigorating scent, and is often used in aromatherapy to promote relaxation and relieve stress. </p>
        </div>

        <div class="box1con">
        <img src="images/Sandalwood.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Citrus', 400)">Add</button>
            <p>Citrus incense sticks are a popular type of natural incense stick that is made from a blend of different citrus fruits such as lemon, orange, and grapefruit. Citrus scents are known for their uplifting and refreshing aroma, and are often used for energizing the mind. </p>
        </div>

        <div class="box1con">
        <img src="images/Tulsi.webp" alt="" class="box_img"><br>
            <button class="btn1" onclick="addToCart('Jasmine', 400)">Add</button>
            <p>Jasmine incense sticks are a popular type of natural incense stick that is made from the fragrant flowers of the jasmine plant. Jasmine has a sweet, exotic, and floral aroma that is believed to have a variety of therapeutic benefits. </p>
        </div>

    </div>
        </div>
        <div id="cart" class="cart">
        <h2>Cart</h2>
        <div id="cart-items"></div>
        <div id="cart-total"></div>
        <button onclick="closeCart()">Close</button>
        <button onclick="submitCart()">Submit</button>
    </div>



    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        let cart = [];

        function addToCart(name, price) {
            // Add product to cart array
            cart.push({ name: name, price: price });
            // Update the cart display
            displayCart();
            // Show the cart
            document.getElementById('cart').classList.add('open');
        }
        function addToCart2(){
            displayCart();
            // Show the cart
            document.getElementById('cart').classList.add('open');
        }
        function displayCart() {
            const cartItemsDiv = document.getElementById('cart-items');
            cartItemsDiv.innerHTML = ''; // Clear the cart display

            // Display each item in the cart
            cart.forEach((item, index) => {
                const itemDiv = document.createElement('div');
                itemDiv.classList.add('cart-item');
                itemDiv.innerHTML = `${item.name} - ₹${item.price.toFixed(2)} <button onclick="removeFromCart(${index})">Remove</button>`;
                cartItemsDiv.appendChild(itemDiv);
            });

            // Display total price
            const totalPrice = cart.reduce((total, item) => total + item.price, 0);
            const totalDiv = document.getElementById('cart-total');
            totalDiv.innerHTML = `<strong>Total: ₹${totalPrice.toFixed(2)}</strong>`;
        }

        function removeFromCart(index) {
            // Remove item from cart array
            cart.splice(index, 1);
            // Update the cart display
            displayCart();
        }

        function closeCart() {
            document.getElementById('cart').classList.remove('open');
        }

        function submitCart() {
            const totalPrice = cart.reduce((total, item) => total + item.price, 0) * 100; // Convert to smallest currency unit

            const options = {
                key: "rzp_test_0HPe78CYgyBVVK", // Replace with your Razorpay API key
                amount: totalPrice, // Amount in smallest currency unit
                currency: "INR",
                name: "Padmakhya",
                description: "Transaction",
                handler: function (response) {
                    alert("Payment Successful. Payment ID: " + response.razorpay_payment_id);
                },
                prefill: {
                    name: "John Doe",
                    email: "john.doe@example.com",
                    contact: "9999999999"
                },
                theme: {
                    color: "#3399cc"
                }
            };

            const rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>



</body>

</html>
<?php
include_once('footer.php');
?>