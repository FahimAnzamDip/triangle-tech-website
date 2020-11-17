<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Choose;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Fact;
use App\Models\Member;
use App\Models\Package;
use App\Models\Project;
use App\Models\Regard;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $title = "Triangle Technologies Ltd - Software Company";
        $services = Service::take(3)->get();
        $members = Member::all();
        $clients = Client::latest()->get();
        $categories = Category::all();
        $projects = Project::all();

        return view('frontend.home-page', [
            'title' => $title,
            'services' => $services,
            'members' => $members,
            'clients' => $clients,
            'categories' => $categories,
            'projects' => $projects
        ]);
    }

    public function about() {
        $title = "Triangle Technologies Ltd - About";
        $fact = Fact::first();
        $as_regard_of_ttl = Regard::first();
        $choices = Choose::all();

        return view('frontend.pages.about-page', [
            'title' => $title,
            'fact' => $fact,
            'as_regard_of_ttl' => $as_regard_of_ttl,
            'choices' => $choices
        ]);
    }

    public function services() {
        $title = "Triangle Technologies Ltd - Services";
        $services = Service::all();
        $clients = Client::latest()->get();

        return view('frontend.pages.services-page', [
            'title' => $title,
            'services' => $services,
            'clients' => $clients
        ]);
    }

    public function prices() {
        $title = "Web Development Prices In Bangladesh - Triangle Technologies Ltd";
        $packages = Package::all();

        return view('frontend.pages.prices-page', [
            'title' => $title,
            'packages' => $packages
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
        $carts = Cart::content();

        return view('frontend.pages.cart-page', [
            'title' => $title,
            'carts' => $carts
        ]);
    }

    public function checkout() {
        $title = "Triangle Technologies Ltd - Checkout";

        return view('frontend.pages.checkout-page', [
            'title' => $title
        ]);
    }
}
