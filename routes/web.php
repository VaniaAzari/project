<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/admin','login@index')->middleware('auth:admin');
// 		Route::get('/admin', 'HomeAdminController@hitung')->middleware('auth:admin');
// 		Route::get('caridosen', 'DosenController@search')->middleware('auth:admin');
// Route::group(['prefix'=>'dosen'],function(){
// 	Route::get('/', 'DosenController@index');
// 	Route::get('/create', 'DosenController@create');
// 	Route::post('/simpan', 'DosenController@simpan');
// 	Route::get('/edit/{id}', 'DosenController@edit');
// 	Route::get('show/{id}', 'DosenController@show');
// 	Route::post('update/{id}', 'DosenController@update');
// 	Route::post('delete/{id}', 'DosenController@destroy');
// });

Route::group(['middleware' => 'auth:admin'], function(){


Route::get('/admin', 'HomeAdminController@hitung');
Route::get('caridosen', 'DosenController@search');
Route::get('carimahasiswa', 'MahasiswaController@search');
Route::get('cariprodi', 'ProdiController@search');
Route::get('carikelas', 'KelasController@search');
Route::get('carimatakuliah', 'MatakuliahController@search');
Route::get('carimatakuliahkelas', 'MatakuliahKelasController@search');


Route::group(['prefix'=>'dosen'],function(){
	Route::get('/', 'DosenController@index');
	Route::get('/create', 'DosenController@create');
	Route::post('/simpan', 'DosenController@simpan');
	Route::get('/edit/{id}', 'DosenController@edit');
	Route::get('show/{id}', 'DosenController@show');
	Route::post('update/{id}', 'DosenController@update');
	Route::post('delete/{id}', 'DosenController@destroy');
});
Route::group(['prefix'=>'mahasiswa'],function(){
	Route::get('/', 'MahasiswaController@index');
	Route::get('/create', 'MahasiswaController@create');
	Route::post('/simpan', 'MahasiswaController@simpan');
	Route::get('/edit/{id}', 'MahasiswaController@edit');
	Route::get('show/{id}', 'MahasiswaController@show');
	Route::post('update/{id}', 'MahasiswaController@update');
	Route::post('delete/{id}', 'MahasiswaController@destroy');
});
Route::group(['prefix'=>'prodi'],function(){
	Route::get('/', 'ProdiController@index');
	Route::get('/create', 'ProdiController@create');
	Route::post('/simpan', 'ProdiController@simpan');
	Route::get('/edit/{id}', 'ProdiController@edit');
	Route::get('show/{id}', 'ProdiController@show');
	Route::post('update/{id}', 'ProdiController@update');
	Route::post('delete/{id}', 'ProdiController@destroy');
});
Route::group(['prefix'=>'kelas'],function(){
	Route::get('/', 'KelasController@index');
	Route::get('/create', 'KelasController@create');
	Route::post('/simpan', 'KelasController@simpan');
	Route::get('/edit/{id}', 'KelasController@edit');
	Route::get('show/{id}', 'KelasController@show');
	Route::post('update/{id}', 'KelasController@update');
	Route::post('delete/{id}', 'KelasController@destroy');
});
Route::group(['prefix'=>'matakuliah'],function(){
	Route::get('/', 'MatakuliahController@index');
	Route::get('/create', 'MatakuliahController@create');
	Route::post('/simpan', 'MatakuliahController@simpan');
	Route::get('/edit/{id}', 'MatakuliahController@edit');
	Route::get('show/{id}', 'MatakuliahController@show');
	Route::post('update/{id}', 'MatakuliahController@update');
	Route::post('delete/{id}', 'MatakuliahController@destroy');
});

Route::group(['prefix'=>'matakuliahkelas'],function(){
	Route::get('/', 'MatakuliahKelasController@index');
	Route::get('/create', 'MatakuliahKelasController@create');
	Route::post('/simpan', 'MatakuliahKelasController@simpan');
	Route::get('/edit/{id}', 'MatakuliahKelasController@edit');
	Route::get('show/{id}', 'MatakuliahKelasController@show');
	Route::post('update/{id}', 'MatakuliahKelasController@update');
	Route::post('delete/{id}', 'MatakuliahKelasController@destroy');
});


});

						Route::group(['middleware' => 'auth:dosen'], function(){

						Route::get('/homedosen', 'HomeDosenController@hitungdosen');
						Route::get('carimateri', 'MateriController@search');
						Route::get('caritugas', 'TugasController@search');
						Route::get('bahanajardosen','BahanAjarDosenController@index');
						Route::get('bahanajartugasdosen','BahanAjarTugasDosenController@index');
						Route::get('profiledosen', 'ProfilController@profileDosen');


						Route::group(['prefix'=>'pengumuman'],function(){
							Route::get('/', 'PengumumanController@index');
							Route::get('/create', 'PengumumanController@create');
							Route::post('/simpan', 'PengumumanController@simpan');
							Route::get('/edit/{id}', 'PengumumanController@edit');
							Route::get('show/{id}', 'PengumumanController@show');
							Route::post('update/{id}', 'PengumumanController@update');
							Route::post('delete/{id}', 'PengumumanController@destroy');
						});
						Route::group(['prefix'=>'materi'],function(){
							Route::get('/{matakuliah_id}/{kelas_id}', 'MateriController@index');
							Route::get('/create/{matakuliah_id}/{kelas_id}', 'MateriController@create');
							Route::post('/simpan', 'MateriController@simpan');
							Route::get('/edit/{id}/{matakuliah_id}/{kelas_id}', 'MateriController@edit');
							Route::get('show/{id}/{matakuliah_id}/{kelas_id}', 'MateriController@show');
							Route::post('update/{id}', 'MateriController@update');
							Route::post('delete/{id}', 'MateriController@destroy');
						});
					
						Route::group(['prefix'=>'tugas'],function(){
							Route::get('/{matakuliah_id}/{kelas_id}', 'TugasController@index');
							Route::get('/create/{matakuliah_id}/{kelas_id}', 'TugasController@create');
							Route::get('/detail/{id}/{matakuliah_id}/{kelas_id}/{tanggal_masuk}', 'TugasController@detail');
							Route::post('/simpan', 'TugasController@simpan');
							Route::get('/edit/{id}/{matakuliah_id}/{kelas_id}', 'TugasController@edit');
							Route::get('show/{id}/{matakuliah_id}/{kelas_id}', 'TugasController@show');
							Route::post('update/{id}', 'TugasController@update');
							Route::post('delete/{id}', 'TugasController@destroy');
						});

						Route::group(['prefix' => 'kuis'], function () {
							Route::get('/group','KuisController@indexGroup')->name('kuis.group');

						});

							
						});

															Route::group(['middleware' => 'auth:mahasiswa'], function(){

															Route::get('/homemahasiswa', 'HomeMahasiswaController@hitungmahasiswa');
															Route::get('caribahan', 'DownloadController@search');
															Route::get('viewAlldownloadfile/{matakuliah_id}/{kelas_id}','DownloadController@downfunc');
															Route::get('bahanajar','BahanAjarController@index');
															Route::get('bahanajartugas','BahanAjarTugasController@index');
															Route::get('profile', 'ProfilController@profileMhs');

															Route::group(['prefix'=>'tugasmahasiswa'],function(){
																Route::get('/{matakuliah_id}', 'TugasMahasiswaController@index');
																Route::get('/detail/{id}/{tanggal_masuk}/{matakuliah_id}/{kelas_id}', 'TugasMahasiswaController@detail');
																Route::post('/simpan', 'TugasMahasiswaController@simpan');
																Route::get('/edit/{id}/{matakuliah_id}', 'TugasMahasiswaController@edit');
																Route::get('show/{id}/{matakuliah_id}', 'TugasMahasiswaController@show');
																Route::post('update/{id}', 'TugasMahasiswaController@update');
																Route::post('delete/{id}', 'TugasMahasiswaController@destroy');



															});

});


Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest');

Route::post('/kirimdata','login@masuk');

Route::get('/keluar','login@keluar');
	

