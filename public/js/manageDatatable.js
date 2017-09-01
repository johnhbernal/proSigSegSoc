selector = $.noConflict();
selector(document).ready(function() {
	
	
		var table = selector('#dataTableUsuarios').DataTable({
			
			"processing": true,
	        "serverSide": true,
	        "ajax": "../public/datatable",
	        "columnDefs": [
	            {
	                "targets": 0,
	                "visible": false,
	                "searchable": false,
	            },
	            { 
	            	
	            	"targets": -1,
	            	"visible": true,
	                "searchable": false,
	                "orderable": false,
	            }],
	            
	            
            "columns": [
            	{data: 'updated_at', name: 'updated_at'},
//                {data: 'id', name: 'id'},
                { 
                    "data": "id",
                    "render": function(data, type, row, meta){
                       if(type === 'display'){
                    	   
//                           data = '<a href="' + data + '" class="showUser" id='+data+'>' + data + '</a>';
                    	   data = '<a id='+data+' href="' + data + '" class="showUser" id='+data+'>' + data + '</a>';
                       }

                       return data;
                    }
                 },
            	{data: 'NUM_IDENTIFICACION', name: 'NUM_IDENTIFICACION'},
                {data: 'PRIMER_NOMBRE', name: 'PRIMER_NOMBRE'},
                {data: 'SEGUNDO_NOMBRE', name: 'SEGUNDO_NOMBRE'},
                {data: 'PRIMER_APELLIDO', name: 'PRIMER_APELLIDO'},
                {data: 'SEGUNDO_APELLIDO', name: 'SEGUNDO_APELLIDO'},
                {
                    data: {data: 'id'},
                    className: "inline",
                    defaultContent: ' &nbsp;<a href=""> <i class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Editar Usuario"></i></a> &nbsp; &nbsp;<a class="btn-delete"> <i class="glyphicon glyphicon-remove" data-toggle="tooltip" title="Eliminar Usuario"></i></a>',
               
                    "render": function ( data, type, full, meta ) {

                    	var DeleteID = full.id;
                        var EditID = full.id;
                       
                        return '<form action="./deleteUsuarios/'+DeleteID+'" method="DELETE" value="delete"><input type="hidden" name="_method" value="DELETE"><a  id='+DeleteID+' class="btn-delete" data-token="{{ csrf_token() }}"> &nbsp; &nbsp; <i class="glyphicon glyphicon-remove" data-toggle="tooltip" title="Eliminar Usuario"></i></a> &nbsp; &nbsp; &nbsp;<a id='+EditID+' class="btn-update"> <i class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Editar Usuario"></i></a></from></div>';
                    }
                }
            ],
			"language" : {
				"url" : "./json/Spanish.json"
			},
			"order": [[ 1, "desc" ]],
//			"bPaginate": false,
//		    "bLengthChange": false,
//		    "bFilter": true,
//		    "bInfo": false,
//		    "bAutoWidth": false,
			"pagingType": "full_numbers",

		});

		
		
		/* Remove Item */
		selector("body").on("click",".btn-delete",function(){
			
			var id = selector(this).attr('id');
			var c_obj = selector(this).parents("tr");
			
//			url = "{{route('usuarios.destroy',"+id+")}}";
//			url = "../public/destroyUsuario,"+id+"";
			
			var row = selector(this).parents('tr');
			var form = selector(this).parents('form');
			var url = form.attr('action');
			var token = selector(this).data('token');
			
			var arr = url.split('/');
			if (!selector.confirm({
				
					icon: 'fa fa-spinner fa-spin',
		    	    title: 'Eliminación de Usuario!',
		    	    content: '¿Está seguro de eliminar el usuario con numero de identificación <strong>'+arr[2]+'</strong> ?',
		    	    closeIcon: true,
		    	    closeIconClass: 'fa fa-close',
		    	    draggable: true,
		    	    autoClose: 'cancelAction|6000',
		    	    columnClass: 'col-md-5 col-center col-md-offset-4',
		    	    boxWidth: '60%',
//		    	    columnClass: 'col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8',
		    	    containerFluid: true, // this will add 'container-fluid' instead of 'container'
		    	    buttons: {
		    	        deleteUser: {
		    	            text: 'Eliminar',
		    	            btnClass: 'btn-blue',
		    	            action: function () {
		    	            	
		    	            	deleteUserByAjax(url);
		    	            	
		    	           
		    	            }
		    	        },
		    	        cancelAction: {
		    	            text: 'Cancelar',
//		    	            btnClass: 'btn-blue',
		    	            action: function () {
		    	        	
		    	        	
		    	            }
		    	        },
		    	    },// end buttons
		    	}));// end confirm
		     
	
		});	  //end function delete user 
/**
 * Funcion utilizada para eliminar un usuario mediante un ajax 
 * @returns
 */
		function deleteUserByAjax(url) {
       	 selector.ajax({
		    	
		    	"processing": true,
		        "serverSide": true,
		        type:'get',
		        url: url,
		        success: function (response) {
		        	showAlert(JSON.stringify(response));
		        	table.ajax.reload();
	            },
	            error: function (response) {
//	            	alert('error mostrado al recibir en el ajax  '+ response);
	            	showAlert(JSON.stringify(response));
	                console.log( 'error'+response);
	                table.ajax.reload();
	            },
		        

	    });
		}
		/**
		 * Funcion utilizada para redireccionar a el formulario para modificar un usuario mediante un ajax 
		 * @returns
		 */
		function updateUserByAjax(url) {
			selector.ajax({				
				"processing": true,
				"serverSide": true,
				type:'get',
				url: url,
				success: function (response) {
					
					  document.open();
					    document.write(response);
					    document.close();

				},
				error: function (response) {
//					alert('error mostrado al recibir en el ajax  '+ response);
					showAlert(JSON.stringify(response));
					console.log( 'error'+response.msg);
//					table.ajax.reload();
				},
				
				
			});
		}
		
		/* Función utilizada para actualizar o modificar usuario */
		selector("body").on("click",".btn-update",function(){
			
			
			var id = selector(this).attr('id');
			
			var url='./updateUser/'+id;
			
			
//			console.log(url);
//			alert(url);
//			return false;
			
			updateUserByAjax(url)
			
		

		     
	
		});	  //end function modify user 
		
		
		/**
		 * funcion utilizada para redireccionar y mostrar los datos del usuario sin modificar
		 * @param url
		 * @returns
		 */
		function showUserByAjax(url) {
			
			alert('llego a showUser '+url);
			return false;
			
			selector.ajax({				
				"processing": true,
				"serverSide": true,
				type:'get',
				url: url,
				success: function (response) {
					
					
					alert('llego sera este = '+reponse);
					console.log('llego sera este = '+reponse);
					
					  document.open();
					    document.write(response);
					    document.close();

				},
				error: function (response) {
//					alert('error mostrado al recibir en el ajax  '+ response);
					showAlert(JSON.stringify(response));
					console.log( 'error'+response.msg);
//					table.ajax.reload();
				},
				
				
			});
		}
		
		
		/* Función utilizada para mostrar la informacion del  usuario */
		selector("body").on("click",".showUser",function(){
			
			
			var id = selector(this).attr('id');
			
			console.log('valor de id '+id);
			
			var url='.../showUser/'+id;
			
			
			console.log(url);
			alert(url);
//			return false;
			
			showUserByAjax(url)
			
			
			
			
			
		});	  //end function show user 
		
		
		
		
		
		/**
		 * Funcion utilizada para mostrar las notificaciones de acuerdo a su importancia
		 */
		
		function showAlert(response){
			
			var response = selector.parseJSON(response)
			
			var typeAlertStatus = response["status"];
			var message = response["msg"];
			
			
//			alert('valor que llega  ' +typeAlertStatus+' mensaje '+message);
			
			switch (typeAlertStatus) {
		
		    case 'success':

		    selector.confirm({
			    title: 'Notificaciones.',
			    closeIcon: true,
	    	    closeIconClass: 'fa fa-close',
	    	    draggable: true,
	    	    autoClose: 'cancelAction|3000',
	    	    columnClass: 'col-md-5 col-center col-md-offset-4',
			    content: '' +
			    '<div class="alert alert-success" role="alert">' +
			    '<button type="button" class="close" data-dismiss="alert">' +
			    '&times;' +
			    '</button>' +
			    '<strong>'+message+'</strong>' +
			    '</div>',
			    buttons: {
	    	        cancelAction: {
	    	            text: 'Cerrar',
	    	            btnClass: 'btn-success disabled',
	    	            action: function () {
	    	        	
	    	        	
	    	            }
	    	        },
			    },
			});
		        
		        
		        break; 
		    case 'info':
			    selector.confirm({
				    title: 'Notificaciones.',
				    closeIcon: true,
		    	    closeIconClass: 'fa fa-close',
		    	    draggable: true,
		    	    autoClose: 'cancelAction|3000',
		    	    columnClass: 'col-md-5 col-center col-md-offset-4',
				    content: '' +
				    '<div class="alert alert-info" role="alert">' +
				    '<button type="button" class="close" data-dismiss="alert">' +
				    '&times;' +
				    '</button>' +
				    '<strong>'+message+'</strong>' +
				    '</div>',
				    buttons: {
		    	        cancelAction: {
		    	            text: 'Cancelar',
		    	            btnClass: 'btn-info disabled',
		    	            action: function () {
		    	        	
		    	        	
		    	            }
		    	        },
				    },
				});
		        break;
		    case 'warning':
			    selector.confirm({
				    title: 'Notificaciones.',
				    closeIcon: true,
		    	    closeIconClass: 'fa fa-close',
		    	    draggable: true,
		    	    autoClose: 'cancelAction|3000',
		    	    columnClass: 'col-md-5 col-center col-md-offset-4',
				    content: '' +
				    '<div class="alert alert-warning" role="alert">' +
				    '<button type="button" class="close" data-dismiss="alert">' +
				    '&times;' +
				    '</button>' +
				    '<strong>'+message+'</strong>' +
				    '</div>',
				    buttons: {
		    	        cancelAction: {
		    	            text: 'Cancelar',
		    	            btnClass: 'btn-warning disabled',
		    	            action: function () {
		    	        	
		    	        	
		    	            }
		    	        },
				    },
				});
		    	break;
		    case 'danger':
			    selector.confirm({
				    title: 'Notificaciones.',
				    closeIcon: true,
		    	    closeIconClass: 'fa fa-close',
		    	    draggable: true,
		    	    autoClose: 'cancelAction|3000',
		    	    columnClass: 'col-md-5 col-center col-md-offset-4',
				    content: '' +
				    '<div class="alert alert-danger" role="alert">' +
				    '<button type="button" class="close" data-dismiss="alert">' +
				    '&times;' +
				    '</button>' +
				    '<strong>'+message+'</strong>' +
				    '</div>',
				    buttons: {
		    	        cancelAction: {
		    	            text: 'Cancelar',
		    	            btnClass: 'btn-danger disabled',
		    	            action: function () {
		    	        	
		    	        	
		    	            }
		    	        },
				    },
				});
		    	break;
		    default: 
			    selector.confirm({
				    title: 'Notificaciones.',
				    closeIcon: true,
		    	    closeIconClass: 'fa fa-close',
		    	    draggable: true,
		    	    autoClose: 'cancelAction|3000',
		    	    columnClass: 'col-md-5 col-center col-md-offset-4',
				    content: '' +
				    '<div class="alert alert-success" role="alert">' +
				    '<button type="button" class="close" data-dismiss="alert">' +
				    '&times;' +
				    '</button>' +
				    '<strong>'+message+'</strong>' +
				    '</div>',
				    buttons: {
		    	        cancelAction: {
		    	            text: 'Cancelar',
		    	            btnClass: 'btn-default disabled',
		    	            action: function () {
		    	        	
		    	        	
		    	            }
		    	        },
				    },
				});
		}
			

			
		}
		
});// End document ready

