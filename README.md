## UAS Pemrograman Web Gasal 2023/2024

## Kelas B Kelompok 11

### Anggota Kelompok : 
1. William Darmawan (210711106) - Support (Edit Video)
2. Thessalonica Angelina Meil (210711122) - Frontend
3. Stefanus Vemas Aditya Mahardika (210711398) - Backend & API

### Username & Password Login : 
- Login User : 
   - Username : stefanusvemas@gmail.com
   - Password : 12345678

- Login Admin 
   - Username : admin@libraria.com
   - Password : admin

### Bonus yang diambil : 
- Hosting :
    - https://perpustakaan11web.online/ 
- Routes API : 

    - POST api/login-admin - Login Admin
        - email: text
        - password: text

    - GET api/buku - Get all buku

    - GET api/penerbit (auth:admin) - Get all penerbit
    - POST api/penerbit (auth:admin) - Create penerbit
        - nama: text

    - GET api/kategori (auth:admin) - Get all kategori
    - POST api/kategori (auth:admin) - Create kategori
        - nama: text
        - warna: text

    - GET api/pengarang (auth:admin) - Get all pengarang
    - POST api/pengarang (auth:admin) - Create pengarang
        - nama: text

    - GET api/buku (auth:admin) - Get all buku
    - DELETE api/buku/{id} (auth:admin) - Delete buku

    - POST api/register-petugas (auth:admin) - Create petugas
        - nama: text
        - email: text
        - no_telp: text
        - foto: file
        - password: text
        - alamat: text
