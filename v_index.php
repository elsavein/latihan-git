<section>
	
	<h1><?php echo $judul ?></h1>
	<p align='justify'>pada pengertian codeigniter di atas tadi dijelaskn bahwa codeigniter menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk lebih jauh dalam belajar codeigniter </p>
	   <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p> 


	                      <ol type="a">
	                      <li>Model</li>
	<p align='justify'>Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai bagian penangananan yang berhubungan pengolahan atau manipulasi database. Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. Semua instruksi atau fungsi yang berhubungan dengan pengolahan database di letakan didalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
	<p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folder application\models.</p>
	<li>View</li>
	<p align='justify'>View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser). Tampilan dari user interface dikumpulkan pada view untuk memisahknnya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>
	<li>Controller</li>
	<p align='justify'>Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database (model) di ambil oleh controller dan kemudian controller pula yang menampilkannya ke view. jadi controller lah yang mengolah instruksi.</p>
	<p align=justify>dari penjelasan tentang model view dan controller di atas dapat disimpilkan bahwa controller sebagai penghubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep mvc, controller memanggil instruksi pada model yang mengambil data pada databse, kemudian controller yang meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan sangat mudah dlam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur. </p>
	</ol>
</section>