<?php

include_once "app/ControlSesion.inc.php";
include_once "app/config.inc.php";

Conexion::abrir_conexion();



?>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <img src="images/logo_large.png" alt="alt" class="img-logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php 
      
      if(ControlSesion::sesion_iniciada()==true) {

        ?>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="adidas.html">Adidas</a></li>
            <li><a class="dropdown-item" href="nike.html">Nike</a></li>
            <li><a class="dropdown-item" href="vans.html">Vans</a></li>
          </ul>
        </li>
          
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ajustes</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="LogOut.php">Cerrar sesión</a> 
          </li>
          <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
              Carrito
            </a> 
         
        
        
        
        </ul>


        <?php 

      }else{

        ?>

        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inicio-sesion.php">Iniciar sesión</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registrarse</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="adidas.html">Adidas</a></li>
            <li><a class="dropdown-item" href="nike.html">Nike</a></li>
            <li><a class="dropdown-item" href="vans.html">Vans</a></li>
          </ul>
        </li>
      </ul>
      <?php



      }
      
      ?>
      
    </div>
  </div>
</nav>