<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman yang menjelaskan tentang isi halaman ini.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman CONTACT',
            'content' => 'Ini adalah halaman Contact yang sama dengan halaman About.'
            ]);
    }

    public function faqs()
    {
        return view('FAQS', [
            'title' => 'Halaman FAQS',
            'content' => 'Ini adalah halaman FAQS yang sama dengan halaman About.'
            ]);
    }

    public function tos()
    {
        echo "Ini halaman Term of Services";
    }
}