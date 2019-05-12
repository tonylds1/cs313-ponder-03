<?php // Just a coment for heroku ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tony Moraes' Assingments</title>
        <link rel="stylesheet" href="../css/cs313-w03.css" /> 
        <script type="text/javascript" src="../js/313.03.Ponder.js"></script>
    </head>
   <body onload="buildProductList()"> 
   <!--  <body>-->
        <h1>CS 313 Ponder - Week 03</h1>
       
        <div id="container">
            <h1>What you can Buy here:</h1>
            <p>In fact all those itens are freem you pay to maintain this site.</p>
            <hr />
            <ul id="cart">
                <li id="model-item">
                    <div class="item-img"></div>
                    <div class="item-description" name="description">
                        <div class="item-desc">Seeds of Love</div>
                        <div class="item-price">$ <span class="price">0.00</span> x </div>
                        <div class="item-qtd"><input type="text" pattern="\d*" value="0" /></div>
                        <div class="item-total">$ <span class="total">0.00</span></div>
                        <hr/>
                        <div class="item-info">You can use this seed with your family</div>
                    </div>
                    <hr class="br-Section"/>
                </li>
            </ul> 
            
            <div id='bill'>
                <p>Bag Subtotal</p>
                <p>Shipping Price</p>
                <p>Taxes</p>
                <hr />
                <p>TOTAL: $ <span id="total"></span></p>
                <button id="checkout" onclick="showForm()">Checkout</button>
            </div>
            <div id="costumer">
                <form action="checkout.php" method="POST">
                    <h1>Who are you?</h1>
                    <hr />
                    <br />
                    <label>First Name</label>
                    <input type="text" name="firstName" oninput="validateName(this)"/>
                    <span class='msgValidation'>Invalid size.</span>
                    <br />
                    <label>Last Name</label>
                    <input type="text" name="LastName" oninput="validateName(this)"/>
                    <span class='msgValidation'>Invalid size.</span>
                    <br />

                    <h1>how to contact you?</h1>
                    <hr />
                    <br />
                    <label>Phone</label>
                    <input type="text" name="phone" placeholder="(123) 123-1234" oninput="validatePhone(this)"/>
                    <span class='msgValidation'>Invalid phone</span>
                    <br />
                    <label>Address</label>
                    <input type="text" name="address" oninput="validateName(this)"/>
                    <span class='msgValidation'>Invalid size.</span>
                    <br />

                    <h1>how do you will pay?</h1>
                    <hr />
                    <br />
                    <label>Card Type</label>
                    <input type="radio" name="card-type" value="Visa"> Visa 
                    <input type="radio" name="card-type" value="Mastercard"> Mastercard 
                    <input type="radio" name="card-type" value="America Express"> America Express 
                    <input type="radio" name="card-type" value="other"> Other
                    <br />
                    <label>Card Number</label>
                    <input type="text" name="card-number" oninput="validateCCNumber(this)" />
                    <span class='msgValidation'>Invalid card number</span>
                    <br />
                    <label>Expiration Date</label>
                    <input type="text" name="expiration Date" oninput="validateDate(this)" />
                    <span class='msgValidation'>Invalid date</span>
                    <br />
                    <input type='submit' value="confirm"/>
                    <input type='reset' value="clear data"/>
                    <button onclick="hideForm()">keep buying</button>
                </form>
            </div>
        </div>
    </body>
</html>