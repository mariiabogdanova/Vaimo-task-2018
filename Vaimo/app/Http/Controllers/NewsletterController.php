<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        // @todo Complete functionality
if (isset($_GET)) {
  $minorRev = 99;
  $url = 'http://frontend-candidate.vaimo.com/mariia.bogdanova/public/newsletter/subscribe';
  echo json_encode(file_get_contents($url));
 }

        return response()->json([]);
    }
}
