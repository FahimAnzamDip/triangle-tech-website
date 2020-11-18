<div class="mt-4">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_method" id="bankTransfer"
               value="Bank Transfer" checked style="cursor: pointer;">
        <label class="form-check-label" for="bankTransfer" style="cursor: pointer;">
            <strong>Direct Bank Transfer</strong>
        </label>
    </div>
    <div class="card my-4" id="bankTransferForm" style="display: block;">
        <div class="card-body">
            <p style="font-size: 0.88rem;line-height: 24px">We will contact you as soon as possible and discuss further about the order and payment process.</p>
        </div>
    </div>

    <div class="form-check mt-4">
        <input class="form-check-input" type="radio" name="payment_method" id="bkash"
               value="Bkash" style="cursor: pointer;">
        <label class="form-check-label" for="bkash" style="cursor: pointer;">
            <strong>Bkash</strong>
        </label>
    </div>
    @include('frontend.partials.bkash-form')

    <div class="form-check mt-4">
        <input class="form-check-input" type="radio" name="payment_method" id="rocket"
               value="Rocket" style="cursor: pointer;">
        <label class="form-check-label" for="rocket" style="cursor: pointer;">
            <strong>Rocket</strong>
        </label>
    </div>
    @include('frontend.partials.rocket-form')
</div>
