<?php

Route::get('/', function () {
    return view('home');
});

Route::get('success', function () {
    return view('success');
});

Route::post('rsvp', function (Illuminate\Http\Request $request) {
    $answers = collect($request->all())->reject(function($input, $key) {
        return in_array($key, ['_method', '_token']);
    });

    \Mail::send('emails.rsvp', ['request' => $answers->all()], function ($m) use ($answers) {
        $m->from('postmaster@mattyandemma.com', 'mattyandemma.com');
        $m->to('mvicinanzo90@gmail.com', 'Matty Vicinanzno');
        $m->cc('tommyjmarshall@gmail.com', 'Tommy Marshall');
        $m->subject($answers->get('name') . ' has RSVPed!');
    });

    return redirect('success');
});
