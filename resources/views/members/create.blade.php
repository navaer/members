@extends('template')

@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => 'members', 'role' => 'form']) !!}
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Información personal</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Nombre del miembro']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('lastname', 'Apellido Paterno') !!}
                                {!! Form::text('lastname', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Apellido Paterno']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('lastname2', 'Apellido Materno') !!}
                                {!! Form::text('lastname2', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Apellido Materno']) !!}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Correo electrónico']) !!}
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('phone', 'Teléfono') !!}
                                {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Número de Teléfono']) !!}
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('mobile', 'Celular') !!}
                                {!! Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => 'Número Celular']) !!}
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('position', 'Nombre del puesto') !!}
                                {!! Form::text('position', '', ['class' => 'form-control', 'placeholder' => 'Nombre de puesto actual']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('responsibilities', 'Responsabilidades') !!}
                                {!! Form::text('responsibilities', '', ['class' => 'form-control', 'placeholder' => 'Actividades Desempeñadas']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('company', 'Compañía') !!}
                                {!! Form::text('company', '', ['class' => 'form-control', 'placeholder' => 'Nombre de la compañía actual']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('job_phone', 'Teléfono') !!}
                                {!! Form::text('job_phone', '', ['class' => 'form-control', 'placeholder' => 'Número de teléfono']) !!}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {!! Form::label('job_city', 'Dirección o ciudad') !!}
                                {!! Form::text('job_city', '', ['class' => 'form-control', 'placeholder' => 'Dirección de la empresa']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('language_1', 'Idioma') !!}
                                {!! Form::text('language_1', '', ['class' => 'form-control', 'placeholder' => 'Idioma 1']) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group checkbox icheck">
                                {!! Form::label('language_1_reed', 'Leer') !!}<br>
                                {!! Form::checkbox('language_1_reed', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_1_speak', 'Hablar') !!}<br>
                                {!! Form::checkbox('language_1_speak', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_1_translate', 'Traducir') !!}<br>
                                {!! Form::checkbox('language_1_translate', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_1_write', 'Escribir') !!}<br>
                                {!! Form::checkbox('language_1_write', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('language_2', 'Idioma') !!}
                                {!! Form::text('language_2', '', ['class' => 'form-control', 'placeholder' => 'Idioma 2']) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_2_reed', 'Leer') !!}<br>
                                {!! Form::checkbox('language_2_reed', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_2_speak', 'Hablar') !!}<br>
                                {!! Form::checkbox('language_2_speak', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_2_translate', 'Traducir') !!}<br>
                                {!! Form::checkbox('language_2_translate', 1, null) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                {!! Form::label('language_2_write', 'Escribir') !!}<br>
                                {!! Form::checkbox('language_2_write', 1, null) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Contribución personal</h3>
                    <div class="box-tools pull-right"></div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{!! Form::checkbox('job_reference', 1, null) !!}</td>
                                    <td>Proporcionar referencias o posibilidades de trabajo</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('fill_forms', 1, null) !!}</td>
                                    <td>Proporcionar ayuda para llenar solicitudes de empleo, formularios, etc…</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('teach_workshops', 1, null) !!}</td>
                                    <td>Enseñar en talleres de empleo</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('educational_resources', 1, null) !!}</td>
                                    <td>Proporcionar recursos educativos</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('interview_practices', 1, null) !!}</td>
                                    <td>Dirigir entrevistas de práctica</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('teach_it', 1, null) !!}</td>
                                    <td>Enseñar informatica/computacion</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('career_coach', 1, null) !!}</td>
                                    <td>Se un asesor de carreras</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{!! Form::checkbox('babysitting', 1, null) !!}</td>
                                    <td>Proporcionar cuidado de niños</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('fill_resume', 1, null) !!}</td>
                                    <td>Ayudar a preparar currículum vitaes (resumés)</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('professional_advisement', 1, null) !!}</td>
                                    <td>Dar asesoramiento de profesiones</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('pef_coach', 1, null) !!}</td>
                                    <td>Ser mentor de un estudiante del Fondo Perpetuo para la Educación</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('transportation', 1, null) !!}</td>
                                    <td>Proporcionar transporte</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('others', 1, null) !!}</td>
                                    <td>Otro</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">{!! Form::checkbox('employment_information', 1, null) !!} Tengo acceso a
                        información de empleo que estoy dispuesto a compartir</h3>
                    <div class="box-tools pull-right"></div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            Mi empresa contrata gente en las siguientes categorías:
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{!! Form::checkbox('accounting', 1, null) !!}</td>
                                    <td>Contabilidad/Finanzas/Seguros</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('agriculture_administration', 1, null) !!}</td>
                                    <td>Administración/Secretaría/Servicio al cliente/Agricultura/Cuidado de
                                        animales/Forestal/Pesca
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('media', 1, null) !!}</td>
                                    <td>Artes/Espectáculos/Periodismo/Medios de comunicación</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('babysitting', 1, null) !!}</td>
                                    <td>Cuidado de niños/Cuidado personal/Servicio doméstico</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('construction', 1, null) !!}</td>
                                    <td>Construcción/Oficios/Mano de obra en general</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('training', 1, null) !!}</td>
                                    <td>Instrucción/Capacitación/Biblioteca</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('architecture', 1, null) !!}</td>
                                    <td>Servicios de ingeniería/Arquitectura</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('medical', 1, null) !!}</td>
                                    <td>Asistencia médica/Medicina/Dental/Servicios Sociales</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('restaurant', 1, null) !!}</td>
                                    <td>Servicios de recepción/Restaurantes/Manipulación de alimentos</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{!! Form::checkbox('human_resources', 1, null) !!}</td>
                                    <td>Recursos humanos/Reclutamiento/Servicios legales</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('IT', 1, null) !!}</td>
                                    <td>Tecnología de la información/Telecomunicaciones</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('facility_maintenance', 1, null) !!}</td>
                                    <td>Instalaciones/Mantenimiento/Reparaciones</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('business_management', 1, null) !!}</td>
                                    <td>Administración de empresas/Ejecutiva/Asesoramiento</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('factory', 1, null) !!}</td>
                                    <td>Fabricación o manufactura/Producción/Imprenta</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('government', 1, null) !!}</td>
                                    <td>Servicios Públicos/Gobierno/Defensa</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('sales', 1, null) !!}</td>
                                    <td>Ventas/Mercadotecnia/Venta al por menor/Relaciones Públicas</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('science', 1, null) !!}</td>
                                    <td>Ciencia/Investigación</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('self_employment', 1, null) !!}</td>
                                    <td>Autoempleo o trabajador autónomo/Empresarial</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('transportation', 1, null) !!}</td>
                                    <td>Transporte/Almacén o depósito/Reparto</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Necesidades profesionales personales</h3>
                    <div class="box-tools pull-right"></div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{!! Form::checkbox('employment_search', 1, null) !!}</td>
                                    <td>Busco empleo</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('increase_payment', 1, null) !!}</td>
                                    <td>Necesito aumentar mis ingresos</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('environment', 1, null) !!}</td>
                                    <td>Quiero cambiar de ambiente de trabajo</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('not_satisfied', 1, null) !!}</td>
                                    <td>No estoy satisfecho en mi trabajo actual</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('improve_education', 1, null) !!}</td>
                                    <td>Necesito más educación o formación profesional</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('cv_training', 1, null) !!}</td>
                                    <td>Me gustaría recibir capactiación de cómo buscar empleo, por ejemplo, cómo preparar un currículo vitae, para entrevistas, red de contactos, etc.</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('start_business', 1, null) !!}</td>
                                    <td>Deseo ayuda para iniciar un negocio</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('improve_business', 1, null) !!}</td>
                                    <td>Deseo mejorar mi pequeña empresa</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('new_skills', 1, null) !!}</td>
                                    <td>Me gustaría recibir ayuda para exporar las habilidad, los talentos y las opciones profesionales que tengo</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('job_loss', 1, null) !!}</td>
                                    <td>Preveo la pérdida de mi trabajo debido a factores económicos</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Información académica</h3>
                    <div class="box-tools pull-right"></div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('skill', '¿Tiene habilidades o ha desarrollado experiencia para ejercer un oficio?') !!}
                                {!! Form::text('skill', '', ['class' => 'form-control', 'placeholder' => 'Favor de describir']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('formal_training', '¿Ha recibido capacitación formal para desarrollar un oficio?') !!}
                                {!! Form::text('formal_training', '', ['class' => 'form-control', 'placeholder' => 'Favor de describir']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('grade', '¿Cuál es su último grado de estudios?') !!}
                                {!! Form::select('grade', [
                                'Primaria' => 'Primaria',
                                'Secundaria' => 'Secundaria',
                                'Preparatoria' => 'Preparatoria/Bachillerato',
                                'Licenciatura' => 'Licenciatura',
                                'Maestría' => 'Maestría',
                                'Doctorado' => 'Doctorado',
                                'Otro' => 'Otro'
                                ],
                                null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('grade_type', 'Nombre de la licenciatura y/o grado') !!}
                                {!! Form::text('grade_type', '', ['class' => 'form-control', 'placeholder' => 'Favor de describir']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('applied_skills', '¿En su trabajo actual desempeña estos conocimientos?') !!}
                                {!! Form::text('applied_skills', '', ['class' => 'form-control', 'placeholder' => 'Favor de describir']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('free_academic_institutions', '¿Conoce los recursos gratuitos en línea que ofrecen las intituciones para obtener educación?') !!}
                                {!! Form::text('free_academic_institutions', '', ['class' => 'form-control', 'placeholder' => 'Favor de describir']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('it_knowledge', '¿Sabe utilizar la computadora?') !!}
                                {!! Form::text('it_knowledge', '', ['class' => 'form-control', 'placeholder' => 'Describir los programas o aplicaciones que sabe utilizar']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header with-border">
                    <h3 class="box-title">Cursos y talleres</h3>
                    <div class="box-tools pull-right"></div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tr>
                                    <td>{!! Form::checkbox('mi_camino', 1, null) !!}</td>
                                    <td>Mi camino a la utosuficiencia</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('mi_fundamento', 1, null) !!}</td>
                                    <td>Mi fundamento</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('mi_negocio', 1, null) !!}</td>
                                    <td>¿Cómo iniciar o hacer crecer mi negocio?</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('mi_empleo', 1, null) !!}</td>
                                    <td>Mi búsqueda de empleo</td>
                                </tr>
                                <tr>
                                    <td>{!! Form::checkbox('mi_educacion', 1, null) !!}</td>
                                    <td>Educación para un mejor empleo</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        {!! Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                        {{Html::link('estates', 'Cancelar', ['class' => 'btn btn-danger'])}}

                    </ul>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('custom_scripts')

@endsection
