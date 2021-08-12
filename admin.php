<?php include 'layout/header.php'; ?>

<div class="contenedor-barra">
    <div class="contenedor barra">
        <a href="login.php" class="btn salir">Salir</a>
        <h1>  Agenda de contactos </h1> 
    </div>
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <legend>Ingresa Nuevo Usuario <span>Todos los campos son abligatorios</span>
        </legend>
        <?php 
        include 'registro.php'; 
        ?>
    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Usuario</h2>
        <input type="text" id="buscar"  class="buscador sombra" placeholder="Buscar Usuarios....">
    
        <p class="total-contactos">  <span>   2   </span> Usuarios </p>

        <div class="contenedor-tabla">
            <table id="Listado-contactos" class="Listado-contactos"> 
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido_pat</th>
                        <th>Apellido_mat</th>
                        <th>Edad</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Uriel</td>
                        <td>lopez</td>
                        <td>aquino</td>
                        <td>19</td>
                        <td>la cumbre</td>
                        <td>uriel@gmail.com</td>
                        <td>2131234252</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id=1">
                                <i class="fas fa-pen-square"></i>
                            </a>

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                    <td>daniel</td>
                        <td>contreras</td>
                        <td>landeros</td>
                        <td>21</td>
                        <td>barran del muerto</td>
                        <td>daniel@gmail.com</td>
                        <td>2411464452</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id=1">
                                <i class="fas fa-pen-square"></i>
                            </a>

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>


            </table>
        </div>

    </div>
</div>

<?php include 'layout/footer.php'; ?>