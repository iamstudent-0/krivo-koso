
$(document).ready(function()
	{
		$('body').on('click',  'td.edit', (function()
		{
					//находим input внутри элемента с классом ajax и вставляем вместо input его значение
					$('.ajax').html($('.ajax input').val());
					//удаляем все классы ajax
					$('.ajax').removeClass('ajax');
					//ячейке присваиваем класс ajax
					$(this).addClass('ajax');
					//внутри ячейки создаём input и вставляем текст из ячейки в него
					$(this).html('<input id="editbox" size="'+ $(this).text().length+'" type="text" value="' + $(this).text() + '" />');
					//устанавливаем фокус на созданном элементе
					$('#editbox').focus();
				}));
 
			//определяем нажатие кнопки на клавиатуре
			$('body').on('keydown',  'td.edit', (function(event)
		{
				//получаем значение класса и разбиваем на массив, отделённый пробелами
				//в итоге получаем такой массив — arr[0] = edit, arr[1] = наименование столбца
					arr = $(this).attr('class').split( " " );
					var feild = arr[1];
					var opid = feild.split( "_" );
					var id = $(this).closest('table').attr('id').split(" ");
					
					//проверяем какая была нажата клавиша и если была нажата клавиша Enter (код 13)
					if(event.which == 13)
					{
						//получаем наименование таблицы, в которую будем вносить изменения
						var table = $(this).closest('table').attr('id');
						//alert(table);
						//выполняем ajax запрос методом POST
						$.post('save_product.php',
						{
							action: "updateop",
							opid: opid[1],
							opname: opid[0],
							value:$('.ajax input').val(),
							table:id[0],
							id:id[1]
							
						} , function(data)
								{
							//находим input внутри элемента с классом ajax и вставляем вместо input его значение
							$('.ajax').html($('.ajax input').val());
							//удаляем класс ajax
							$('.ajax').removeClass('ajax');
						});
			}
		}));
	});
