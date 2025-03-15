
window.addEventListener('DOMContentLoaded', function(){
    $("#tableUser").DataTable({
      processing: true,
      autoWidth: false,
      serverSide: false,
      ajax: { url: `user/getuser`, dataSrc: "" },
      columns: [
        { data: "email" },
        { data: "created_at" },
        {
          data: "id",
          render: function (data) {
            return `<div>
              <button class="btn-primary" id="${data}">editar</button>
              <button class="btn-danger" id="${data}">eliminar</button>
            </div>`;
          },
        },
      ],
      language: {
        decimal: "",
        emptyTable: "No hay información",
        info: "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        infoEmpty: "Mostrando 0 to 0 of 0 Entradas",
        infoFiltered: "(Filtrado de _MAX_ total entradas)",
        infoPostFix: "",
        thousands: ",",
        lengthMenu: "Mostrar _MENU_ Entradas",
        loadingRecords: "Cargando...",
        processing: "Procesando...",
        search: "Buscar:",
        zeroRecords: "Sin resultados encontrados",
        paginate: {
          first: "Primero",
          last: "Ultimo",
          next: "Siguiente",
          previous: "Anterior",
        },
      },
    });
})
