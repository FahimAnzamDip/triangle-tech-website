<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = "Triangle Technologies Ltd - Software Company";

        return view('frontend.home-page', [
            'title' => $title
        ]);
    }

    public function about() {
        $title = "Triangle Technologies Ltd - About";

        return view('frontend.pages.about-page', [
            'title' => $title
        ]);
    }

    public function services() {
        $title = "Triangle Technologies Ltd - Services";

        return view('frontend.pages.services-page', [
            'title' => $title
        ]);
    }

    public function prices() {
        $title = "Web Development Prices In Bangladesh - Triangle Technologies Ltd";

        return view('frontend.pages.prices-page', [
            'title' => $title
        ]);
    }

    public function contact() {
        $title = "Triangle Technologies Ltd - Contact";
        $contact = Contact::first();

        return view('frontend.pages.contact-page', [
            'title' => $title,
            'contact' => $contact
        ]);
    }

    public function cart() {
        $title = "Triangle Technologies Ltd - Cart";

        return view('frontend.pages.cart-page', [
            'title' => $title
        ]);
    }

    public function checkout() {
        $title = "Triangle Technologies Ltd - Checkout";

        return view('frontend.pages.checkout-page', [
            'title' => $title
        ]);
    }
}
