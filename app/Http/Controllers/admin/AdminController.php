<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\Reservation;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {

        $estimated_income_last_30 = DB::select(DB::raw('
            SELECT 
            (sum(guests_total) * 30) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));

        $total_customers_last_30 = DB::select(DB::raw('
            SELECT 
            sum(guests_total) as total
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
        '));
    
        $total_reservations_last_30 = DB::select(DB::raw('
                SELECT 
                count(*) as total
                FROM restaurant.reservations
                WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()
            '));

        $total_employees = DB::select(DB::raw('
                SELECT 
                count(*) as total
                from users
                inner join role_user on role_user.user_id = users.id
                inner join roles on roles.id = role_user.role_id
                where role_id = 2
            '));

        return view('admin/dashboard',[
            "estimated_income_last_30" => "$".$estimated_income_last_30[0]->total,
            "total_customers_last_30" => $total_customers_last_30[0]->total,
            "total_reservations_last_30" => $total_reservations_last_30[0]->total,
            "total_employees" => $total_employees[0]->total
        ]);
    }

    public function DailyRevenueLast30() {

        return $estimated_income_daily_data = DB::select(DB::raw('
            SELECT 
                DATE_FORMAT(created_at,"%Y-%m-%d") as x,
                (sum(guests_total) * 27 ) as y,
            FROM restaurant.reservations
                group by x desc;
        '));
    }
}
