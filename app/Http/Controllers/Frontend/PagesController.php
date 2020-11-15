<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = "Triangle Technologies Ltd - Software Company";
        $services = Service::take(3)->get();

        return view('frontend.home-page', [
            'title' => $title,
            'services' => $services
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
        $services = Service::all();

        return view('frontend.pages.services-page', [
            'title' => $title,
            'services' => $services
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
