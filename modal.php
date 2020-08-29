  
  <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" style="margin-top: -18px;">&times;</span>
      <h2 style="font-size: 23px; text-align: center;">Select Your Category</h2>
    </div>

    <div class="container">
      <div class="jumbotron">
        <div class="row">
          <div class="col-sm-8">
            <span>GA Phase I</span><br>
            <span> 4000.00 Taka</span>
            <span>GA Phase 1 tickets are General Admission tickets into the Arena</span>
          </div>
          <div class="col-sm-4">
              <div class="input-group" id="mod">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus btn btn-number" style="width: 50px;" data-type="minus" data-field="">
                      <span class="glyphicon glyphicon-minus"></span>
                    </button>
                  </span>
                  <input type="text" id="quantity" name="quantity" class="form-control input-number" style="margin-top: 0px; height: 32px; margin-bottom: 0px; width: 100%; float: none;  text-align: center;" value="0" min="0" max="10" disabled="">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus btn btn-number" style="width: 50px;" data-type="plus" data-field="">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </span>
              </div>
          </div>
        </div>
      </div>
      <div class="jumbotron">
        <div class="row">
            <div class="col-sm-8">
              <span>VIP Phase I</span><br>
              <span>9000.00 Taka</span>
              <span>VIP Phase 1 tickets give you entry into the VIP Section at the Arena. VIP section includes front of stage viewing, dedicated bars and toilets.</span>
            </div>
            <div class="col-sm-4">
              <div class="input-group" id="mod">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus1 btn btn-number" style="width: 50px;" data-type="minus" data-field="" onclick="">
                      <span class="glyphicon glyphicon-minus"></span>
                    </button>
                  </span>
                  <input type="text" id="quantty" name="quanty" class="form-control input-number" style="margin-top: 0px; height: 32px; margin-bottom: 0px; width: 100%; float: none;  text-align: center;" value="0" min="0" max="10" disabled="">
                  <span class="input-group-btn">
                    <button type="button" class="quantity-right-plus1 btn btn-number" style="width: 50px;" data-type="plus" data-field="" onclick="">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </span>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
      <div class="row" id="fot">
        <div class="col-sm-8">
            <span class="final-prize">Total  Taka</span>
            <input type="text" id="myText" value="0" disabled size="6">
        </div>
        <div class="col-sm-4">
          <div class="proceed-button">
                <button class="btn3" id="bt" onclick="che()">Proceed</button>
                <a href="ticket.php" id="tic"></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
