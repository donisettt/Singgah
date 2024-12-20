@extends('layouts.admin',['title'=>'Fasilitas Hotel'])

@section('content-header')
<h1 class="m-0"> <i class="fas fa-swimming pool"></i> Fasilitas Hotel</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-6">
        <x-form-create :action="route('fasilitas.store')" :upload="true">
           <x-input label="Nama Fasilitas" name="nama_fasilitas" />
           <x-input label="Foto" name="foto" type="file" 
            keterangan="Foto bertipe : png,jpg,jpeg. Dimensi :  min width 500px, min height 300px. Ukuran : min 35kb, max 1000kb." />
           <x-textarea label="Deskripsi" name="deskripsi" />
        </x-form-create>
    </div>
</div>
@endsection