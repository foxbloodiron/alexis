@extends('main')

@section('content')

@include('suplier.barangsuplier.modal_list_barang')
@include('suplier.barangsuplier.modal_list_suplier')

<article class="content">

	<div class="title-block text-primary">
	    <h1 class="title"> Item Barang Suplier </h1>
	    <p class="title-description">
	    	<i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a> / <span>Suplier</span> / <span class="text-primary" style="font-weight: bold;">Item Barang Suplier</span>
	     </p>
	</div>

	<section class="section">

		<div class="row">

			<div class="col-12">

                <ul class="nav nav-pills mb-3">
                    <li class="nav-item">
                        <a href="" class="nav-link active" data-target="#list_barang" aria-controls="list_barang" data-toggle="tab" role="tab">Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" data-target="#list_suplier" aria-controls="list_suplier" data-toggle="tab" role="tab">Data Suplier</a>
                    </li>
                </ul>

                <div class="tab-content">

                	@include('suplier.barangsuplier.tab_barang')
                	@include('suplier.barangsuplier.tab_suplier')

	            </div>

			</div>

		</div>

	</section>

</article>

@endsection