<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('cart', function () {
    return view('cart');
})->name('cart');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact-message', function(){
	
	/*Acceder a todos los campos del formulario con sus valores correspondientes*/
	$data = request()->all();

	// enviar un correo

	Mail::send("emails.message", $data, function ($message) use ($data){
		$message->from($data['email'], $data['name'])
		->to('felipegarxon@hotmail.com','Felipe')
		->subject($data['subject']);
	});

	// responder al usuario

	return back()->with('flash', $data['name'].', tu mensaje ha sido recibido');

})->name('messages');