<table class="table table-hover">
   <caption></caption>
   <thead>
      <tr>
         <th><p align="center">Nombre</p></th>
         <th><p align="center">Duracion</p></th>
         <th><p align="center">Precio</p></th>
      </tr>
   </thead>
   <tbody>
   {foreach from=$Paquete item=i}
      <tr>
         <td>{$i.nombre_ciudad}</td>
         <td>{$i.duracion}</td>
         <td>{$i.precio}</td>
   {/foreach}      
      </tr>
   </tbody>
</table>