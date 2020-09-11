<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allMemberOffers() {
        return view('/admin/customers/all-member-offers');
    }
    public function allReservations() {
            return view('admin/customers/all-reservations');
        }
}
