<div class="tab-pane fade in active show" id="tab-1">

	<div class="card">
        <div class="card-header bordered p-2">
        	<div class="header-block">
                <h3 class="title"> Data Armada (Own)</h3>
            </div>
            <div class="header-block pull-right">
    			<a class="btn btn-primary" href="{{route('tambah_dataarmada_own')}}"><i class="fa fa-plus"></i>&nbsp;Tambah Data</a>
            	
            </div>
        </div>
        <div class="card-block">
            <section>
            	
            	<div class="table-responsive">
                    <table class="table table-striped table-hover" cellspacing="0" id="table_armada">
                        <thead class="bg-primary">
                            <tr>
                            	<th width="1%">No</th>
				                <th>Pemilik</th>
				                <th>Nopol</th>
				                <th>Aksi</th>
				            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                        		<td>1</td>
                        		<td>CV. Alexis Beton</td>
                        		<td><button class="btn btn-primary btn-modal" data-toggle="modal" data-target="#detail" type="button">Detail</button></td>
                        		<td>
                        			<div class="btn-group btn-group-sm">
                        				<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
                        				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
                        			</div>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>2</td>
                        		<td>CV. Alexis Beton</td>
                        		<td><button class="btn btn-primary" data-toggle="modal" data-target="#tambah" type="button">Detail</button></td>
                        		<td>
                        			<div class="btn-group btn-group-sm">
                        				<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
                        				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
                        			</div>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>3</td>
                        		<td>CV. Alexis Beton</td>
                        		<td><button class="btn btn-primary" data-toggle="modal" data-target="#tambah" type="button">Detail</button></td>
                        		<td>
                        			<div class="btn-group btn-group-sm">
                        				<button class="btn btn-warning btn-edit" type="button" title="Edit"><i class="fa fa-pencil"></i></button>
                        				<button class="btn btn-danger btn-disable" type="button" title="Disable"><i class="fa fa-eye-slash"></i></button>
                        			</div>
                        		</td>
                        	</tr>
				        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>

</div>