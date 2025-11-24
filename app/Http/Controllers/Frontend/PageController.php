<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function allProducts()
    {
        return view('frontend.pages.all-products');
    }

    public function careers()
    {
        return view('frontend.pages.careers');
    }

    public function caseStudies()
    {
        return view('frontend.pages.case-studies');
    }

    public function caseStudyDetail()
    {
        return view('frontend.pages.case-study-detail');
    }

    public function conferenceRoomTables()
    {
        return view('frontend.pages.conference-room-tables');
    }

    public function conferenceRooms()
    {
        return view('frontend.pages.conference-rooms');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function csr()
    {
        return view('frontend.pages.csr');
    }

    public function enquiryBasket()
    {
        return view('frontend.pages.enquiry-basket');
    }

    public function hospitality()
    {
        return view('frontend.pages.hospitality');
    }

    public function idealWorkspace()
    {
        return view('frontend.pages.ideal-workspace');
    }

    public function initiatives()
    {
        return view('frontend.pages.initiatives');
    }

    public function jobAci()
    {
        return view('frontend.pages.job-aci');
    }

    public function makeEnquiry()
    {
        return view('frontend.pages.make-enquiry');
    }

    public function moodboardDetail()
    {
        return view('frontend.pages.moodboard-detail');
    }

    public function moodboards()
    {
        return view('frontend.pages.moodboards');
    }

    public function productDetail()
    {
        return view('frontend.pages.product-detail');
    }

    public function productsType()
    {
        return view('frontend.pages.products-type');
    }

    public function resourceDetail()
    {
        return view('frontend.pages.resource-detail');
    }

    public function resources()
    {
        return view('frontend.pages.resources');
    }

    public function serviceDetail()
    {
        return view('frontend.pages.service-detail');
    }

    public function serviceListing()
    {
        return view('frontend.pages.service-listing');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function shopBySpace()
    {
        return view('frontend.pages.shop-by-space');
    }

    public function sustainability()
    {
        return view('frontend.pages.sustainability');
    }

    public function teamMember()
    {
        return view('frontend.pages.team-member');
    }

    public function userDashboard()
    {
        return view('frontend.pages.user-dashboard');
    }

    // Fallback
    public function show($page)
    {
        if (view()->exists("frontend.pages.{$page}")) {
            return view("frontend.pages.{$page}");
        }
        abort(404);
    }
}
