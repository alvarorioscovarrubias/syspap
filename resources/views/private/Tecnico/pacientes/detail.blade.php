<a href="" type="button "class="on-default remove-row" data-toggle="modal" data-target="#exampleModal">
    <i class="far fa-eye"></i>
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel">Detalle Paciente: Maria Elena Castro Castro</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	        	<div id="datatable-editable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
	        		<h3>PAP 3</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="datatable-editable" role="grid">
                            <thead>
                                <tr role="row">
                                    <th rowspan="1" colspan="1">Rut Paciente</th>
                                    <th rowspan="1" colspan="1">Nombre Completo</th>
                                    <th rowspan="1" colspan="1">Fecha Exámen</th>
                                    <th rowspan="1" colspan="1">Resultado</th>
                                    <th rowspan="1" colspan="1">Fecha Citación</th>
                                    <th rowspan="1" colspan="1">Años del último exámen</th>
                                    <th rowspan="1" colspan="1">Vigencia</th>
                                    <th rowspan="1" colspan="1">Fecha Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=0; $i < 1; $i++) { ?>   
                                <tr data-item-id="7" role="row" class="odd">
                                    <td>18.485.623-5</td>
                                    <td>Maria Elena Castro Castro</td>
                                    <td>21/01/2020</td>
                                    <td>I G8 J1</td>
                                    <td>21/01/2021</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td>01/02/2020</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <h3>PAP 1</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="datatable-editable" role="grid">
                            <thead>
                                <tr role="row">
                                    <th rowspan="1" colspan="1">Rut Paciente</th>
                                    <th rowspan="1" colspan="1">Nombre Completo</th>
                                    <th rowspan="1" colspan="1">Fecha Exámen</th>
                                    <th rowspan="1" colspan="1">Resultado</th>
                                    <th rowspan="1" colspan="1">Fecha Citación</th>
                                    <th rowspan="1" colspan="1">Años del último exámen</th>
                                    <th rowspan="1" colspan="1">Vigencia</th>
                                    <th rowspan="1" colspan="1">Fecha Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php for ($i=0; $i < 1; $i++) { ?>   
                                <tr data-item-id="7" role="row" class="odd">
                                    <td>18.485.623-5</td>
                                    <td>Maria Elena Castro Castro</td>
                                    <td>21/01/2020</td>
                                    <td>I G8 J1</td>
                                    <td>21/01/2021</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td>01/02/2020</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <h3>EFM 3</h3>
                    <label>No Hay Resultados</label>

                    <h3>EFM 1</h3>
                    <label>No Hay Resultados</label>

                    <h3>Mamografía</h3>
                    <label>No Hay Resultados</label>

                    <h3>Ecotomografía</h3>
                    <label>No Hay Resultados</label>
                </div>
	      	</div>
	      	<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		    </div>
    	</div>
  	</div>
</div>