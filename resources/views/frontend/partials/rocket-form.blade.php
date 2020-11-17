<div class="card my-4" id="rocketForm" style="display: none;">
    <div class="card-body">
        <p style="font-size: 0.88rem;line-height: 24px" class="mb-4">Please complete your Rocket payment at first, then
            fill up the form below. Also note that <strong>1.8%</strong> Rocket "SEND MONEY" cost will be added with net
            price. Total amount you need to send us is <strong class="text-danger">৳
                {{ Cart::total() + Cart::total() * (1.8/100) }} BDT </strong>at<br>Rocket Personal Number : <strong>01904654712</strong>
        </p>
        <div class="form-group">
            <label for="mobile">Rocket Number<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="mobile" name="mobile" placeholder="ex: 01XXXXXXXXX">
        </div>
        <div class="form-group">
            <label for="transaction_id">Rocket Transaction ID<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="transaction_id" name="transaction_id"
                   placeholder="ex: 8FNDF94SDF">
        </div>
    </div>
</div>
