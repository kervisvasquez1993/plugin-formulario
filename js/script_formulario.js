((d,c,$) =>
{
		document.addEventListener('DOMContentLoaded', () => {
          let dias                  = 1,
          ciclo_conferencista       = 0
          dias_ciclos               = Number(dias - 1)
		  dias_string               = ` Dia ${dias}`,
		  contador_dia              = 0,
          content_dias              = document.querySelectorAll('.dias-ciclos'),
          // añadir dias
          dia_padre                 = document.querySelector('.wrap-dia-padre'),
          dia_hija                  = document.querySelector('.wrap-day-child'),
          //conferencista   
          conferencista_padre       = document.querySelector('.wrap-conferencista-padre'),
          conferencista_hijo        = document.querySelector('.wrapp-conferencista-child'),
          //moderador   
          moderador_padre           = document.querySelector('.wrap-moderador-padre'),
          moderador_hijo            = document.querySelector('.wrap-moderadores-child'),
		  //botones   
		  anadir_dias               = document.querySelector('.anadir-dia'),
          anadir_moderador_all      = document.querySelector('.boton-añadir-moderador'),
		  anadir_conferencista_all  = document.querySelector('.boton-añadir-conferencista'),
		  
		  //moderador_array           = Array.from(anadir_moderador_all),
		  //conferencista       = Array.from(anadir_conferencista_all)
		  
          content_dias[0].innerHTML = dias_string
          //console.log(content_dias[0])
          
		  // funcion para repetir los campos
		  function ciclo(elemento_hijo,elemento_padre)
         {
		    ciclo_conferencista += 1
			let clon_hijo = elemento_hijo.cloneNode(elemento_hijo)
			clon_hijo.classList.add('test')
			elemento_padre.appendChild(clon_hijo)
			let input = document.querySelectorAll('.test:last-child .wpcf7-form-control-wrap .wpcf7-form-control')
			inputArr = Array.from(input)
			console.log(inputArr)
			inputArr.forEach(i =>
			{  
			   name_input = i.getAttribute('name')
               let conferencista_name_atribute = `${name_input}_${ciclo_conferencista}`
               i.setAttribute('name', conferencista_name_atribute )
			   i.value = ''
			   
		    })
		 }
	   
	   function ciclo_dias(e)
	   {
            e.preventDefault()
		    let clon_dia = dia_hija.cloneNode(dia_hija)
			clon_dia.classList.add('siguiente_dia')
			console.log(dia_padre.appendChild(clon_dia))
			
			let campos_eliminar_repetido = document.querySelectorAll('.siguiente_dia .grupos-comun  .wrap-comun ')
			let campos_eliminar_repetido2 = document.querySelectorAll('.siguiente_dia .grupos-comun  .wrap-comun .test')
			//console.log(campos_eliminar_repetido)
			campos_eliminar_repetido_array = Array.from(campos_eliminar_repetido)
			campos_eliminar_repetido_array2 = Array.from(campos_eliminar_repetido2)
			campos_eliminar_repetido2.forEach(a => {
				a.remove()
            })
            // variables conferencista padre e hijas
			/*conferencista_padre     = document.querySelectorAll('.wrap-conferencista-padre'),
            conferencista_hijo      = document.querySelectorAll('.wrapp-conferencista-child'),
            // variables moderadores padre e hijas
			moderador_padre         = document.querySelectorAll('.wrap-moderador-padre'),
			moderador_hijo          =document.querySelectorAll('.wrap-moderadores-child'),
			// botones moderadores y conferencista
			anadir_moderador_all = document.querySelectorAll('.boton-añadir-moderador'),
		    anadir_conferencista_all = document.querySelectorAll('.boton-añadir-conferencista'),
		    moderador_array = Array.from(anadir_moderador_all),
			conferencista_array = Array.from(anadir_conferencista_all)
			anadir_conferencista_all
			// eventos para agregar moderadores  
	        moderador_array[contador_dia].addEventListener('click', (e)=>
			{
			  e.preventDefault()
			  ciclo(moderador_hijo[contador_dia], moderador_padre[contador_dia])
			})

			// eventos conferencista

			conferencista_array[contador_dia].addEventListener('click', (e)=>{
				e.preventDefault()
			ciclo(conferencista_hijo[contador_dia], conferencista_padre[contador_dia])
			
		  })
       
            */
        }
        

          //llamar a eventos 
	      anadir_dias.addEventListener('click', ciclo_dias)
		 
		 
		 
		  //eventos conferncista
          anadir_conferencista_all.addEventListener('click', (e)=>{
                e.preventDefault()
            ciclo(conferencista_hijo, conferencista_padre)
          })
	   
	   

         //eventos moderador
         anadir_moderador_all.addEventListener('click', (e)=>
         {
               e.preventDefault()
           ciclo(moderador_hijo, moderador_padre)
         })
         
         
})

       
})
(document,console.log,jQuery.noConflict())
