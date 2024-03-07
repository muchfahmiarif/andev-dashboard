<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountSettingsAccount extends Controller
{
  public function index()
  {
    return view('front-view.authentications.pages-account-settings-account');
  }
}
