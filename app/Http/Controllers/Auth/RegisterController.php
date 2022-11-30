<?php

namespace App\Http\Controllers\Auth;

use stdClass;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Mail\EmailNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\WelcomeEmailNotification;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            'nim'   => ['required', 'string','exists:mahasiswas,nim','unique:users,username'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $random = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $password = substr(str_shuffle($random),0,8);
        $mahasiswa = Mahasiswa::where('nim',$data['nim'])->first();
        $send = [
            'greeting'  => 'Hi, Selamat Datang, '.$mahasiswa['nama'],
            'body'      => 'Terima kasih telah melakukan resgitrasi akun. <br>'.
            'untuk melakukan login silahkan menggunakan username dan password sebagai berikut: <br>'.
            '<strong>Username : </strong>'.$data['nim'].'<br>'.
            '<strong>Password : </strong>'.$password.'<br>',
            'actionText'    => 'Link Aplikasi',
            'action'        => url('/'),
            'thanks'        => 'jangan lupa untuk melakukan mengganti password setelah melakukan login ke aplikasi.'
            // 'username'  => $data['nim'],
            // 'email'     => $data['email'],
            // 'name'      => $mahasiswa['nama'],
            // 'password'  => $password
        ];

        $user =  User::create([
            'username' => $data['nim'],
            'name' => $mahasiswa['nama'],
            'email' => $data['email'],
            'password' => Hash::make($password),
        ]);
        $userid = User::where('username',$data['nim'])->first();

        $mahasiswa->user_id = $userid['id'];
        $mahasiswa->email = $data['email'];
        $mahasiswa->status = 1;
        $mahasiswa->save();
        // $newData = json_decode(json_encode($data),FALSE);
        // $newData = new stdClass();
        // foreach ($data as $key => $value) {
        //     $newData->$key = $value;
        // }
        // dd($data);
        // Notification::sendNow($data, new WelcomeEmailNotification($data));
        Notification::route('mail', $data['email'])->notify(new WelcomeEmailNotification($send));
        // // dd($data);
        // $newData->notify(new WelcomeEmailNotification($data));
        // // dd($user);
        // $details = [
        //     'title' => 'Mail from Akdemik',
        //     'nama'  => $data['name'],
        //     'email'  => $data['email'],
        //     'password' => $data['password']
        // ];
        // Mail::to($data['email'])->send(new EmailNotification($newData));

        // $details->notify(new WelcomeEmailNotification($data));

        return $user;

    }
}
