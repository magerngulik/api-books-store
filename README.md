<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About This Project
Project ini merupakan hasil belajar saya selama beberapa hari, project ini merupakan api untuk sebuah aplikasi toko buku, bagi teman teman yang mau silahkan clone, untuk cara clone dan bagaimana cara install sampai project ini runing teman teman bisa ikutin [disini](), sebelum menjalankan project ini teman teman harus sudah menginstall laravel untuk tutorial install laravel bisa ikuti rekomendasi video [disini]()

# End Point
Project ini memiliki beberapa endpoint yang bisa di gunakan seperti authentification, getProduct, dan Cart
berikut ini beberapa endpoint yang sudah tersedia.


# Toko Buku

Ini adalah dokumentasi API untuk Nama Proyek. API ini menyediakan layanan untuk mengelola authentification, getProduct, dan Cart, berikut ini beberapa endpoint yang sudah tersedia.

## Basis URL

Base url tergantung dengan setting pada komputer teman teman, disini karna masih menggunakan local maka base url yang saya gunakan sebagai berikut:
```
http://127.0.0.1:8000
```

### Login 

**Deskripsi**: Melakukan login ke dalam sistem.

**URL**: `api/auth/login`

**Metode**: POST

**Parameter Wajib Di Isi**:

- `email` (wajib): admin@admin.com
- `password` (wajib): password

**Contoh Permintaan**:
```
POST /api/auth/login
Content-Type: application/json

{
  "email": admin@admin.com,
  "password": password
}
```
**Contoh Respons**:

```
{
  "status": "success",
  "data": {
    "token": "8|dCBn36JNlXgpUDmX4O6vm5CXTslKWmdgrTO9PtVb",
    "user": {
      "id": 11,
      "email": "admin@admin.com",
      "avatar": null
    }
  }
}

```

### Register 

**Deskripsi**: Melakukan login ke dalam sistem.

**URL**: `api/auth/login`

**Metode**: POST

**Parameter Wajib Di Isi**:

- `email` (wajib): admin@admin.com
- `password` (wajib): password,
- `name` (wajib): admin ganteng,
- `tanggal_lahir` (wajib): 2016-08-05,
- `nomor_telp` (wajib): 083333333,
- `alamat` (wajib): jalan keuning,
- `avatar` (optional): file,

**Contoh Permintaan**:
```
POST /api/auth/register
Content-Type: application/json

{
  'email': admin@admin.com,
  'password': password,
  'name': zulkarnaen,
  'tanggal_lahir': '',
  'nomor_telp': '',
  'alamat': '',
  'avatar': file
}
```
**Contoh Respons**:

```
{
  "message": "User registered successfully"
}

```




