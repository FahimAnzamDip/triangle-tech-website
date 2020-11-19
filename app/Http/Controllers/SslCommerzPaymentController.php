<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Order;
use App\Models\OrderedPackage;
use App\Models\User;
use App\Notifications\InvoiceNotification;
use App\Notifications\OrderReceivedNotification;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('exampleHosted');
    }

    public function index(Request $request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $request->validate([
            'first_name' => 'required|max:254',
            'last_name' => 'required|max:254',
            'email' => 'required|max:254',
            'phone' => 'required|numeric',
            'company_name' => 'nullable|max:254',
            'address' => 'required|max:254',
            'city' => 'required|max:254',
            'zip_code' => 'required|numeric',
            'country' => 'required|max:254',
            'oder_note' => 'nullable',
        ]);

        $post_data = array();
        $post_data['total_amount'] = Cart::total(); # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Software";
        $post_data['product_category'] = "Service";
        $post_data['product_profile'] = "non-physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        //MY DATA
        $post_data['first_name'] = $request->first_name;
        $post_data['last_name'] = $request->last_name;
        $post_data['email'] = $request->email;
        $post_data['phone'] = $request->phone;
        $post_data['company_name'] = $request->company_name;
        $post_data['address'] = $request->address;
        $post_data['city'] = $request->city;
        $post_data['zip_code'] = $request->zip_code;
        $post_data['country'] = $request->country;
        $post_data['order_note'] = $request->order_note;

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = Order::where('transaction_id', $post_data['tran_id'])
            ->updateOrCreate([
                'first_name' => $post_data['first_name'],
                'last_name' => $post_data['last_name'],
                'email' => $post_data['email'],
                'phone' => $post_data['phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['address'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'city' => $post_data['city'],
                'zip_code' => $post_data['zip_code'],
                'country' => $post_data['country'],
                'order_note' => $post_data['order_note'],
                'created_at' => Carbon::now()
            ]);

        foreach (Cart::content() as $item) {
            OrderedPackage::create([
                'order_id' => $update_product->id,
                'package_id' => $item->id,
                'quantity' => $item->qty
            ]);
        }

        $users = User::all();
        Notification::send($users, new OrderReceivedNotification());

        $email = $request->email;
        Mail::to($email)->send(new InvoiceMail($update_product));

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success(Request $request)
    {

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $validation = $sslc->orderValidate($tran_id, $amount, $currency, $request->all());

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Processing']);

                Cart::destroy();

                notify()->success('Payment Successfull & Order Placed.', 'Success!');
                return redirect()->route('home.page');
            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Failed']);

                notify()->error('Transaction Validation Failed.', 'Validation Error!');
                return redirect()->route('prices.page');
            }
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            notify()->info('Payment Already Paid. Thank You.', 'Success!');
            return redirect()->route('home.page');
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            notify()->error('Invalid Data.', 'Error!');
            return redirect()->route('prices.page');
        }


    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);

            notify()->error('Transaction Failed.', 'Failed!');
            return redirect()->route('prices.page');
        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            notify()->info('Payment Already Piad.', 'Paid!');
            return redirect()->route('home.page');
        } else {
            notify()->error('Transaction is Invalid.', 'Invalid!');
            return redirect()->route('prices.page');
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_detials->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);

            notify()->error('Transaction Cancelled.', 'Cancelled!');
            return redirect()->route('prices.page');

        } else if ($order_detials->status == 'Processing' || $order_detials->status == 'Complete') {
            notify()->info('Payment Already Piad.', 'Paid!');
            return redirect()->route('home.page');
        } else {
            notify()->error('Transaction is Invalid.', 'Invalid!');
            return redirect()->route('prices.page');
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($tran_id, $order_details->amount, $order_details->currency, $request->all());
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    Cart::destroy();

                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    notify()->success('Payment Successfull & Order Placed.', 'Success!');
                    return redirect()->route('home.page');
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Failed']);

                    notify()->error('Transaction Validation Failed.', 'Validation Error!');
                    return redirect()->route('prices.page');
                }

            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                notify()->info('Payment Already Successfull. Thank You.', 'Success!');
                return redirect()->route('home.page');
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                notify()->error('Transaction Failed.', 'Failed!');
                return redirect()->route('prices.page');
            }
        } else {
            notify()->error('Invalid Data.', 'Invalid!');
            return redirect()->route('prices.page');
        }
    }

}
