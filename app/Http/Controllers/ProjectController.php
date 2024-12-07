<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project', ['projects' => [
            [
                'link' => 'https://rafif22.netlify.app/',
                'image' => 'portofolio2.png',
                'title' => 'Personal Portofolio',
                'description' => 'Sebuah website yang menampilkan profil, keterampilan, dan projek portofolio Anda. Website ini dirancang untuk membantu mempresentasikan diri kepada calon klien atau pemberi kerja.'
            ],
            [
                'link' => 'https://rafif.free.nf/imt/',
                'image' => 'imt.png',
                'title' => 'Kalkulator Index Masa Tubuh',
                'description' => 'Mengembangkan aplikasi kalkulator IMT berbasis web yang memungkinkan pengguna untuk menghitung IMT mereka dengan mudah dan cepat.'
            ],
            [
                'link' => 'https://rafif.free.nf/app/',
                'image' => 'kasir.png',
                'title' => 'Aplikasi Kasir Sederhana',
                'description' => 'Aplikasi kasir sederhana ini dirancang untuk membantu bisnis kecil dan menengah dalam mengelola transaksi penjualan mereka. Aplikasi ini mudah digunakan dan dilengkapi dengan berbagai fitur yang bermanfaat.'
            ],
            [
                'link' => 'https://rafif.free.nf/bahan-bakar',
                'image' => 'shell.png',
                'title' => 'Aplikasi Shell Command',
                'description' => 'Aplikasi ini dibuat untuk menyelesaikan tugas praktikum Shell Command.'
            ],
            [
                'link' => 'https://rafif21.netlify.app/',
                'image' => 'portofolio1.png',
                'title' => 'Personal Portofolio (1)',
                'description' => 'Sebuah website yang menampilkan profil, keterampilan, dan projek portofolio Anda. Website ini dirancang untuk membantu mempresentasikan diri kepada calon klien atau pemberi kerja.'
            ],
            [
                'link' => 'https://webshop-rafif.netlify.app/',
                'image' => 'webshop.png',
                'title' => 'Membuat Tampilan Webshop',
                'description' => 'Projek ini melibatkan pembuatan tampilan webshop sederhana menggunakan bahasa pemrograman web HTML dan CSS.'
            ],
            [
                'link' => 'https://rafif.free.nf/datasiswa/',
                'image' => 'datasiswa.png',
                'title' => 'Aplikasi Data Siswa',
                'description' => 'Sebuah aplikasi web yang dirancang untuk membantu sekolah mengelola data siswa mereka. Aplikasi ini memungkinkan pengguna untuk menambahkan, mengedit, dan menghapus data siswa.'
            ],
            [
                'link' => 'https://rafif.free.nf/rental-motor/',
                'image' => 'rental-motor.png',
                'title' => 'Aplikasi Rental Motor',
                'description' => 'Sebuah aplikasi web yang memungkinkan pengguna untuk menyewa motor dengan mudah dan nyaman.'
            ]
        ]]);
    }
}
