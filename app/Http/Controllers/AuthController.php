<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Validator;

class AuthController extends Controller
{
    function showRegistrasi(){
        return view('registrasi');
    }

    public function dataRegistrasi()
    {
        $data = Registrasi::all(); // Mengambil semua data pengguna
        return view('data-registrasi', ['data' => $data]);
    }

    public function submitRegistrasi(Request $request)
    // public function submitRegistrasi(Request $request, $device)
    {
            // Cek apakah email sudah terdaftar
        if (Registrasi::where('email', $request->email)->exists()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Email already!'
            ], 403);
        }
        // Validasi input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registrasi,email',
            'password' => 'required|string|min:8|confirmed',
            'no_hp' => 'required|string|max:15',
            // 'alamat' => 'required|string',
            'alamat.negara' => 'required|string',
            'alamat.provinsi' => 'required|string',
            'alamat.kota' => 'required|string',
            'usia' => 'required|integer|min:1',
        ], [
            'password_confirmation.same' => 'Confirm password is incorrect',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => $validator->errors()->first() // Ambil pesan pertama dari error
            ], 403); // Response code
        }

        // Menggabungkan data alamat menjadi JSON
        $alamat = json_encode([
            'negara' => $request->alamat['negara'],
            'provinsi' => $request->alamat['provinsi'],
            'kota' => $request->alamat['kota'],
        ]);
    
        // Simpan data
        $registrasi = Registrasi::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Pastikan password di-hash
            'no_hp' => $request->no_hp,
            'alamat' => $alamat, // Simpan alamat dalam format JSON
            'usia' => $request->usia,
            'versi' => env('VERSI_APP', 'default_version'),
            'status_daftar' => 0,
            'foto_profil' => NULL,
            'device_name' => NULL,
            'os_version' => NULL,
        ]);
    
        // Generate token JWT
        $token = JWTAuth::fromUser($registrasi);

        session()->put('jwt_token', $token);
    
        // Periksa jika token berhasil
        if (!$token) {
            return response()->json(['error' => 'Unable to generate token'], 500);
        }

         // Response registrasi berhasil
        return response()->json([
            // 'user_id' => $registrasi->id,
            'username' => $registrasi->email, // Bisa menggunakan email sebagai username
            'no_hp' => $registrasi->no_hp,
            'alamat' => json_decode($registrasi->alamat), // Mengambil data alamat yang sudah disimpan dalam format JSON
            'usia' => $registrasi->usia,
            'foto_profil' => [$registrasi->foto_profil], // Membungkus foto_profil dalam array
            'token' => $token, // Token JWT yang dibuat
            'status_daftar' => $registrasi->status_daftar,
            // 'device' => $device,
        ], 200,[], JSON_PRETTY_PRINT); // Response code
    
        // // Mengembalikan token sebagai response
        // return response()->json([
        //     'message' => 'Registrasi berhasil!',
        //     'token' => $token,
            // 'device' => $device,
        // ]);    

        // dd($registrasi);
        // return redirect()->route('registrasi.tampil')->with('success', 'Registrasi berhasil!');

        // return redirect()->route('login')->with('success', 'Registrasi berhasil!');
        // return redirect()->route('login');
    }
}