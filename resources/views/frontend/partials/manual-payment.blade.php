<div class="card-1" style="background-color: #f9f9ff;">
    <div class="card-body">
        <h6 class="mb-2">For Manual Payment:</h6>
        <p style="font-size: 0.88rem;line-height: 24px" class="mb-4">If you are paying with <strong>Bkash</strong> then note that <strong>1.85%</strong> bKash "SEND MONEY" cost will be added with net price. Total amount you need to send us is,
            <br> <strong class="text-danger">৳
                {{ number_format(Cart::total() + Cart::total() * (1.85/100)) }} BDT </strong>at<br>bKash Personal Number : <strong>01834901372</strong>
        </p>

        <hr class="mb-3">

        <p style="font-size: 0.88rem;line-height: 24px" class="mb-0">If you are paying with <strong>Rocket</strong> then note that <strong>1.8%</strong> bKash "SEND MONEY" cost will be added with net price. Total amount you need to send us is,
            <br> <strong class="text-danger">৳
                {{ number_format(Cart::total() + Cart::total() * (1.8/100)) }} BDT </strong>at<br>bKash Personal Number : <strong>019046547127</strong>
        </p>
    </div>
</div>
