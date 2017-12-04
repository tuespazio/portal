@extends('menu.index')
@section('content')
<div class="container col-md-10 m-portlet">
	<div class="divForm">
		<div class="row">
			<div class="col-md-12">
				<br>
				<center><span id="spanTitulo"></span></center>
				<hr>
			</div>
		</div>
		<div id="divForm" class="col-md-12 divForm">
			{!! Form::open(['id'=>'FormConsultas',
			'autocomplete' => 'off']) !!}
			<input type="hidden" name="_token" id="_token" value="{!! csrf_token() !!}">

			






















		<div class="m-portlet--tabs">
			<div class="m-portlet__head">
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_builder_page" role="tab" aria-expanded="true">
								Busqueda por Fechas
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link " data-toggle="tab" href="#m_builder_header" role="tab" aria-expanded="false">
								Busqueda por Estados
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_builder_left_aside" role="tab" aria-expanded="false">
								Busqueda por Datos DTE
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--begin::Form-->

			<form class="m-form m-form--label-align-right m-form--fit">
				<div class="m-portlet__body">
					<div class="tab-content">
						<!-- tab de busqueda por fechas -->
						<div class="tab-pane active" id="m_builder_page" aria-expanded="true">
							<div class="form-group m-form__group row">
								<div class="col-md-6">
									{{ Form::label('null', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha Emisión:',array('style' => 'text-align:center;line-height:300%','class' => 'label-input','id' => '','align' => 'center'))}}
									<div class="input-group col-md-12">
										<span class="fecharango366 form-control date spanFecha" id="fecha" style="z-index:0;height:35px;color:#808080;">&nbsp;Seleccione rango de fecha...</span>
										<span class="input-group-addon btn btn-primary flaticon-event-calendar-symbol fecharango366" id="btnCal1" type="button"></span>
										<input type="hidden" name="f_desde" id="f_desde" class="form-control">
										<input type="hidden" name="f_hasta" id="f_hasta" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									{{ Form::label('null', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Autorización de SII:',array('style' => 'text-align:center;line-height:300%','class' => 'label-input','id' => '','align' => 'center'))}}
									<div class="input-group col-md-12">
										<span class="fecharango366 form-control date spanFecha" id="fechaA" style="z-index:0;height:35px;color:#808080;">&nbsp;Seleccione rango de fecha...</span>
										<span class="input-group-addon btn btn-primary flaticon-event-calendar-symbol fecharango366" id="btnCal2" type="button"></span>
										<input type="hidden" name="f_desdeA" id="f_desdeA" class="form-control">
										<input type="hidden" name="f_hastaA" id="f_hastaA" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-md-6">
									{{ Form::label('null', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Orden de Compra:',array('style' => 'text-align:center;line-height:300%','class' => 'label-input','id' => '','align' => 'center'))}}
									<div class="input-group col-md-12">
										<span class="fecharango366 form-control date spanFecha" id="fechaO" style="z-index:0;height:35px;color:#808080;">&nbsp;Seleccione rango de fecha...</span>
										<span class="input-group-addon btn btn-primary flaticon-event-calendar-symbol fecharango366" id="btnCal3" type="button"></span>
										<input type="hidden" name="f_desdeO" id="f_desdeO" class="form-control">
										<input type="hidden" name="f_hastaO" id="f_hastaO" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									{{ Form::label('null', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Pago:',array('style' => 'text-align:center;line-height:300%','class' => 'label-input','id' => '','align' => 'center'))}}
									<div class="input-group col-md-12">
										<span class="fecharango366 form-control date spanFecha" id="fechaP" style="z-index:0;height:35px;color:#808080;">&nbsp;Seleccione rango de fecha...</span>
										<span class="input-group-addon btn btn-primary flaticon-event-calendar-symbol fecharango366" id="btnCal4" type="button"></span>
										<input type="hidden" name="f_desdeP" id="f_desdeP" class="form-control">
										<input type="hidden" name="f_hastaP" id="f_hastaP" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-md-12">
									{{ Form::label('null', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Vencimiento:',array('style' => 'text-align:center;line-height:300%','class' => 'label-input','id' => '','align' => 'center'))}}
									<div class="input-group col-md-12">
										<span class="fecharango366 form-control date spanFecha" id="fechaV" style="z-index:0;height:35px;color:#808080;">&nbsp;Seleccione rango de fecha...</span>
										<span class="input-group-addon btn btn-primary flaticon-event-calendar-symbol fecharango366" id="btnCal5" type="button"></span>
										<input type="hidden" name="f_desdeV" id="f_desdeV" class="form-control">
										<input type="hidden" name="f_hastaV" id="f_hastaV" class="form-control">
									</div>
								</div>
							</div>
						</div>

						<!-- tab de busqueda por Estados DTE -->
						<div class="tab-pane" id="m_builder_header" aria-expanded="false">
							<div class="form-group m-form__group row">
								<div class="col-md-6">
									<label for="">Tipo de Acuse</label>
									<select name="selectAcuse" id="selectAcuse" style="width:100%;height:35px;" class="comboclear form-control m-select2">
										<option value="">Seleccione..</option>
									</select>	
								</div>
								<div class="col-md-6">
									<label for="">Estado de Pago</label>
										<select name="selectEstado" id="selectEstado" style="width:100%;height:35px;" class="comboclear form-control m-select2">
											<option value="">Seleccione..</option>
											<option value="">1</option>
											<option value="">2</option>
											<option value="">3</option>
									</select>	
								</div>
							</div>
							<br>
							<div class="form-group m-form__group row">
								<div class="col-md-6">

									<label class="m-checkbox m-checkbox--state-primary">
										<input type="checkbox" name="" id="">
										Existencia solo en SII
										<span></span>
									</label>
									

								</div>
								<div class="col-md-6">
									<label class="m-checkbox m-checkbox--state-primary">
										<input type="checkbox" name="" id="">
										Existencia SII y Paperless
										<span></span>
									</label>
								</div>
							</div>
						</div>

						<!-- tab de busqueda por datos del DTE -->
						<div class="tab-pane" id="m_builder_left_aside" aria-expanded="false">
							
							<div class="form-group m-form__group row">
								<div class="col-md-6">
									{!! Field::select('SelectDTE', null, null,
									['label' => 'Tipo DTE:', 
									'style' => 'width:100%;height:35px;',
									'placeholder' => 'Seleccione...',
									'class' => 'comboclear form-control m-select2']) !!}	
								</div>
								<div class="col-md-6">
									{!! Field::select('Selectcampo', null, null,
									['label' => 'Tipo de busqueda:', 
									'style' => 'width:100%;height:35px;',
									'placeholder' => 'Seleccione...',
									'class' => 'comboclear form-control m-select2']) !!}
								</div>
							</div>

							<div class="form-group m-form__group row">
								<div class="col-md-12">
									{{ Form::label('null', 'Descripción:',array('style' => 'text-align:center;line-height:300%','class' => 'label-input','id' => '','align' => 'center'))}}
								    {!! Form::text('descripcion', '', [
				                    'id'            => 'descripcion',
				                    'class'         => 'form-control input',
				                    'placeholder'   => '',
				                    'style'         => 'width:100%;height:35px',
				                    'maxlength'     => '50'])!!}								
								</div>
							</div>
						</div>

					</div>
				</div>
			</form>
			<!--end::Form-->
			<div class="row">
				<div class="col-md-12">
					<button style="float:right;margin: 45px 0px 0px 0px;" name="consultar" id="consultar" class="btn m-btn--pill btn-primary" type="button">
						<span>
							<i class="la la-search"></i>
							<span>Consultar</span>
						</span>
			        </button>
				</div>
			</div>
		</div>




			{!! Form::close() !!}
		</div>
		<div id="divTabla">
			<br /><br />
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table id="tablaReportes" class="display" cellspacing="0" width="100%"></table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="divForm" style="display:none;">
		<div class="m-portlet--tabs">
			<div class="m-portlet__head">
				<div class="m-portlet__head-tools">
					<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_builder_page" role="tab" aria-expanded="true">
								Cabecera
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link " data-toggle="tab" href="#m_builder_header" role="tab" aria-expanded="false">
								Detalle DTE
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_builder_left_aside" role="tab" aria-expanded="false">
								Referencias DTE
							</a>
						</li>
						<li class="nav-item m-tabs__item">
							<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_builder_right_aside" role="tab" aria-expanded="false">
								Estados de pago
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--begin::Form-->

			<form class="m-form m-form--label-align-right m-form--fit">
				<div class="m-portlet__body">
					<div class="tab-content">
						<!-- tab de cabecera -->
						<div class="tab-pane active" id="m_builder_page" aria-expanded="true">

							<div class="col-md-12">
								<center>
									<span class="spanSubTitulo">Datos DTE</span>
								</center>
								<hr>
							</div>
							
							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">Tipo DTE:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="TipoDTE" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Folio DTE:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="FolioDTE" class="form-control span"></span>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">Fecha Emisión:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="FechaEmision" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Fecha Recepción Cliente:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="FechaRecepcion" class="form-control span"></span>
								</div>
							</div>

							<div class="col-md-12">
								<br>
								<center>
									<span class="spanSubTitulo">Datos Proveedor</span>
								</center>
								<hr>
							</div>						
						
							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">RUT Proveedor:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="RutProveedor" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Nombre Proveedor:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="NombreProveedor" class="form-control span"></span>
								</div>
							</div>

							<div class="col-md-12">
								<br>
								<center>
									<span class="spanSubTitulo">Datos Cliente</span>
								</center>
								<hr>
							</div>

							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">RUT Cliente:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="RutCliente" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Nombre Cliente:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="NombreCliente" class="form-control span"></span>
								</div>
							</div>	


							<div class="col-md-12">
								<br>
								<center>
									<span class="spanSubTitulo">Montos</span>
								</center>
								<hr>
							</div>

							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">Monto Neto:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="MontoNetoCLP" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Monto Exento:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="MontoExentoCLP" class="form-control span"></span>
								</div>
							</div>

							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">Monto IVA:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="MontoIVACLP" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Monto Total:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="MontoTotalCLP" class="form-control span"></span>
								</div>
							</div>	
							
							<div class="col-md-12">
								<br>
								<center>
									<span class="spanSubTitulo">Estado Actual DTE</span>
								</center>
								<hr>
							</div>	

							<div class="form-group m-form__group row">
								<label class="col-lg-2 col-form-label">Estado Actual DTE:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="EstadoActualDTE" class="form-control span"></span>
								</div>
								<label class="col-lg-2 col-form-label">Fecha Estado DTE:</label>
								<div class="col-lg-4 col-xl-4">
									<span id="FechaEstadoActualDTE" class="form-control span"></span>
								</div>
							</div>											
						</div>

						<!-- tab de detalle DTE -->
						<div class="tab-pane" id="m_builder_header" aria-expanded="false">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="table-responsive">
										<table id="tablaDetalles" class="display" cellspacing="0" width="100%"></table>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>

						<!-- tab de Referencias -->
						<div class="tab-pane" id="m_builder_left_aside" aria-expanded="false">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="table-responsive">
										<table id="tablaReferencias" class="display" cellspacing="0" width="100%"></table>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>

						<!-- tab de Estados -->
						<div class="tab-pane" id="m_builder_right_aside" aria-expanded="false">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<div class="table-responsive">
										<table id="tablaEstados" class="display" cellspacing="0" width="100%"></table>
									</div>
								</div>
								<div class="col-md-1"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions">
						<div class="row">
							<div class="col-lg-12">
						        <center>
							        <button name="volver" id="volver" class="btn m-btn--pill btn-outline-primary" type="button">
										<span>
											<i class="la la-arrow-left"></i>
											<span>Volver</span>
										</span>
							        </button>
						        </center>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
	</div>
</div>
<!-- Modal -->
<div id="ModalTrazas" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Estados de Pago</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div class="col-md-12">
			<div class="table-responsive">
				<table id="tablaTrazas" class="display" cellspacing="0" width="100%"></table>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<script Language="Javascript">
	var ruta = "{{ URL::route('consultas') }}" 
	var rutaD = "{{ URL::route('detallesDTE') }}" 
	var rutaT = "{{ URL::route('trazaDTE') }}" 
	var d = [];
	d['v_dtes'] = JSON.parse(rhtmlspecialchars('{{ json_encode($v_dtes) }}'));
	d['v_busq_consulta'] = JSON.parse(rhtmlspecialchars('{{ json_encode($v_busq_consulta) }}'));
	d['v_tipo_dte'] = JSON.parse(rhtmlspecialchars('{{ json_encode($v_tipo_dte) }}'));
</script>
<script src="{{ asset('js/consultas/consultas.js') }}"></script>
@endsection