<?php 

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function getIndex()
	{
			return view('main');
	}

	public function getAbout()
	{
			return view('about');
	}

	public function getMedia()
	{
			return view('media');
	}

	public function getBookTheBophins()
	{
			return view('bookbophins');
	}


}