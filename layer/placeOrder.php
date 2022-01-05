<div id="placeOrderBtn" onclick="placeOrderBtn();">
      <i class="fas fa-plus-circle"></i>
      <label>PLACE ORDER</label>
   </div>
   <div id="placeOrderModal" class="modal" id="myModal">
      <form autocomplete="off" class="modal-dialog modal-xl" method="post" action="" onsubmit="placeOrderRequest();return false;">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h4 class="modal-title">Place Order</h4>
               <button type="button" onclick="closePlaceOrder();" class="close"><i class="fas fa-window-close"></i></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
               <div id="leftPlaceOrder">
                  <div id="imgPO">
                     
                  </div>
                  <span id="labelIMG">Item Name</span>
               </div>
               <div id="rightPlaceOrder">
                  <div class="Order1">                   
                     <label style="display: block;margin: 3px">Order Type</label>
                     <div class="orderType1 " id="poRadioSell">
                        <input type="radio" value="seller" name="poRadio" id="radioSell" required="">
                        <label >Seller</label> 
                     </div>
                     
                     <div class="orderType1 " id="poRadioBuy">
                        <input type="radio" value="buyer" name="poRadio" id="radioBuy" required="">
                        <label>Buyer</label>
                     </div>
                  </div>
                  <div class="placeName">
                     <span style="display: block;margin: 15px 0px 3px 5px">Item Name</span>
                     
                     <input type="text" name="" placeholder="<?php if(isset($_GET["item"]))echo $_GET["item"]; ?>" list="searchText" id="opItemName" required=""  onkeyup="insertIMG()">

                  </div>
                  <div class="placePrice">
                     <div>
                        <span>Price per unit</span>
                        <input type="number" name="" min="0" max="9999" id="opPriceUnit" required="">
                     </div>
                     <div>
                        <span>Quantity</span>
                        <input type="number" min="0" max="999" name="" id="opQuantity" required="">
                     </div>

                  </div>
               </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
               <button type="submit" class="btn btn-danger" style="padding: 1px 50px">Post</button> 
            </div>
         </div>
      </form>
   </div> 