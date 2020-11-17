<div class="card my-4" id="bkashForm" style="display: none;">
    <div class="card-body">
        <p style="font-size: 0.88rem;line-height: 24px" class="mb-4">Please complete your bKash payment at first, then fill up the form below. Also note that <strong>1.85%</strong> bKash "SEND MONEY" cost will be added with net price. Total amount you need to send us is <strong class="text-danger">৳
                {{ Cart::total() + Cart::total() * (1.85/100) }} BDT </strong>at<br>bKash Personal Number : <strong>01834901372</strong></p>
        <div class="form-group">
            <label for="mobile">Bkash Number<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="mobile" name="mobile" placeholder="ex: 01XXXXXXXXX">
        </div>
        <div class="form-group">
            <label for="transaction_id">Bkash Transaction ID<span class="text-danger">*</span></label>
            <input class="form-control" type="text" id="transaction_id" name="transaction_id" placeholder="ex: 8FNDF94SDF">
        </div>
    </div>
</div>
