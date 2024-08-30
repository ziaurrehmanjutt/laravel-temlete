<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        // Logic to determine the view based on the slug
        // For example, mapping slugs to view names
        $viewName = $this->getViewNameFromSlug($slug);
        
        // Return the view or a 404 error if the view is not found
        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            abort(404);
        }
    }

    protected function getViewNameFromSlug($slug)
    {
        // Implement your logic to map slugs to view names
        // For example:
        $mapping = [
            'home' => 'home',
            'about' => 'about',
            'careers' => 'careers',
            'contact' => 'contact',
            'faq' => 'faq',
            'forgot-password' => 'forgot-password',
            'login' => 'login',
            'privacy' => 'privacy',
            'publishers' => 'publishers',
            'register' => 'register',
            'terms' => 'terms',
            'index' => 'index',
        ];

        return $mapping[$slug] ?? '404'; // Default to '404' view if slug not found
    }
}
