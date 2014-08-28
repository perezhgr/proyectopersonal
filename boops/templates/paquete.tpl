<div>
   {foreach from=$Subcategoria item=i}
      <h1 >{$i.nombre_categoria}</h1>
   {/foreach}
</div></br></br></br>

<table class="table table-hover">
   <caption></caption>
   <thead>
      <tr>
         <th></th>
         <th><p align="center">Destino</p></th>
         <th><p align="center">Duracion</p></th>
         <th><p align="center">Precio</p></th>         
      </tr>
   </thead>
   <tbody>
   {foreach from=$Paquete item=j}
      <tr>
         <td><a href="ver_detalle.php"><i class="fa fa-search"></i></a>&nbsp&nbsp
             <a href="ver_detalle.php"><i class="fa fa-envelope"></i></a>
         </td>         
         <td>{$j.nombre_ciudad}</td>
         <td>{$j.duracion}</td>
         <td>{$j.precio}</td>
   {/foreach}      
      </tr>
   </tbody>
</table>
<hr>
