<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('Sitio');
});
Route::get('/Boleta/{id}', 'PDFController@Boleta')->name('Boleta');
Route::get('LoginAdmin', 'AdminController@LoginAdmin')->name('LoginAdmin');
Route::post('IndicativoPais', 'AdminController@IndicativoPais')->name('IndicativoPais');
Route::post('Login', 'AdminController@validaringreso')->name('Login');
Route::post('AddBoleta', 'AdminController@AddBoleta')->name('AddBoleta');
Route::post('ListTipoComprador', 'AdminController@ListTipoComprador')->name('ListTipoComprador');
Route::post('ListarBoletas', 'AdminController@ListarBoletas')->name('ListarBoletas');
Route::get('ConsoleAdmin', 'AdminController@ConsoleAdmin')->name('ConsoleAdmin');
Route::get('Sitio', 'AdminController@Sitex')->name('Sitio');
Route::get('SeleccionBoletas', 'AdminController@SeleccionBoletas')->name('SeleccionBoletas');
Route::get('RegistroP', 'AdminController@RegistroP')->name('RegistroP');
Route::get('RegistroE', 'AdminController@RegistroE')->name('RegistroE');
Route::get('RegistroParticipantes/{id}', 'AdminController@RegistroParticipantes')->name('RegistroParticipantes');
Route::get('ConfirmacionParticipantes/{id}', 'AdminController@ConfirmacionParticipantes')->name('ConfirmacionParticipantes');
Route::post('GuardarTicketsCompra', 'AdminController@GuardarTicketsCompra')->name('GuardarTicketsCompra');
Route::post('GuardarTicketsCompraLC', 'AdminController@GuardarTicketsCompraLC')->name('GuardarTicketsCompraLC');
Route::post('GuardarTicketsCompraE', 'AdminController@GuardarTicketsCompraE')->name('GuardarTicketsCompraE');
Route::post('GuardarTicketsCompraELC', 'AdminController@GuardarTicketsCompraELC')->name('GuardarTicketsCompraELC');
Route::post('DatosFacturacion', 'AdminController@DatosFacturacion')->name('DatosFacturacion');
Route::post('ValidaCodigo', 'AdminController@ValidaCodigo')->name('ValidaCodigo');
Route::post('ParticipanteUpdate', 'AdminController@ParticipanteUpdate')->name('ParticipanteUpdate');
Route::post('ValidarAsociado', 'AdminController@ValidarAsociado')->name('ValidarAsociado');
Route::post('EnviarLinkBoletas', 'AdminController@EnviarLinkBoletas')->name('EnviarLinkBoletas');
Route::GET('PayU', 'AdminController@PayU')->name('PayU');
Route::GET('IngresoClientes', 'AdminController@IngresoClientes')->name('IngresoClientes');
Route::post('LoginClientesEx', 'AdminController@LoginClientesEx')->name('LoginClientesEx');

//Consultas
Route::GET('LoginConsultas', 'AdminController@LoginConsultas')->name('LoginConsultas');
Route::GET('ConsultarUsuarios', 'AdminController@ConsultarUsuarios')->name('ConsultarUsuarios');
Route::GET('SeleccionarUsuarios', 'AdminController@SeleccionarUsuarios')->name('SeleccionarUsuarios');


Route::get('ConfirmacionCompra', 'AdminController@ConfirmacionCompra')->name('ConfirmacionCompra');
Route::get('formPayUP/{id}', 'AdminController@formPayUP')->name('formPayUP');
Route::get('DatosPayU/{id}', 'AdminController@DatosPayU')->name('DatosPayU');
Route::get('ErrorCompra', 'AdminController@ErrorCompra')->name('ErrorCompra');