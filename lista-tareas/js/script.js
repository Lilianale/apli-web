$(document).ready(function () {
  // Agregar tarea
  $('#task-form').submit(function (e) {
    e.preventDefault();
    const taskText = $('#task-input').val().trim();
    if (taskText !== '') {
      const taskItem = $(`
        <li>
          <span class="task-text">${taskText}</span>
          <button class="edit">Editar</button>
          <button class="delete">Eliminar</button>
        </li>
      `);
      $('#task-list').append(taskItem);
      $('#task-input').val('');
      $('#message').fadeIn().delay(1000).fadeOut();
    }
  });

  // Marcar como completada al hacer doble clic
  $('#task-list').on('dblclick', '.task-text', function () {
    $(this).toggleClass('completed');
  });

  // Eliminar tarea individual
  $('#task-list').on('click', '.delete', function () {
    $(this).parent().remove();
  });

  // Editar tarea
  $('#task-list').on('click', '.edit', function () {
    const li = $(this).parent();
    const currentText = li.find('.task-text').text();
    li.html(`
      <input type="text" class="edit-input" value="${currentText}">
      <button class="update">Actualizar</button>
    `);
  });

  // Actualizar tarea
  $('#task-list').on('click', '.update', function () {
    const li = $(this).parent();
    const newText = li.find('.edit-input').val().trim();
    if (newText !== '') {
      li.html(`
        <span class="task-text">${newText}</span>
        <button class="edit">Editar</button>
        <button class="delete">Eliminar</button>
      `);
    }
  });

  // Vaciar lista
  $('#clear-all').click(function () {
    $('#task-list').empty();
  });
});
