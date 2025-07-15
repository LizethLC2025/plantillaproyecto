 <?php
 require 'header.php';
 ?>
 
 <!--Contenido principal-->
        <div class="content-wrapper">
            <!--main content-->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="boxtittle">categoria<button class="btn btn-success" id="btnagregar"
                                        onclick="mostrarform(true)"><i class="fa fa-plus"></i> Agregar</button></h1>
                                <div class="box-tools pull-right">

                                </div>
                            </div>
                            <!--Fin de cabecera box-->
                            <!--centro del box-->
                        <div class="panel-body table-responsive" id="listadoregistro">
                            <table
                                class="table table-striped table-bordered table-responsive table-condensed table-hover"
                                id="listadoregistro">
                                <thead>
                                    <th>id categoria</th>
                                    <th>nombre</th>
                                    <th>descripción</th>
                                    <th>estado</th>
                                    <th>opciones</th>
                                </thead>
                                <tbody>

                                </tbody>
                                <tfoot>
                                    <th>id categoria</th>
                                    <th>nombre</th>
                                    <th>descripción</th>
                                    <th>estado</th>
                                    <th>opciones</th>
                                </tfoot>
                            </table>
                        </div><!--FIn contenedor tabla-->   
                        <!--Inicio contenedor formulario-->
                        <div class="panel-body" style="height: 400px;",  id="formularioregistros">
                            <form action="" name="formulario", id="formulario", method="POST">
                                <div class="form-group col-lg-6 col-md-6 col-ms-6 col-xs-12">
                                    <label for="nombre">Ingrese el nombre</label>
                                    <input type="hidden" name="idcategoria" id="idcategoria">
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre"required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label for="descripcion">Ingrese la descripcion</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="descripcion">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                                    <button class="btn btn-danger" type="button" onclick="cancelarform()"><i class="fa fa-arrow-circle-left"></i>Cancelar</button>
                                </div>

                            </form>

                        </div>
                        </div>
                        
                    </div>
                </div>


            </section>
        </div>
        <?php 
        require 'footer.php'
        ?>
        <script src="js/categoria.js" type="text/javascript"></script>


        