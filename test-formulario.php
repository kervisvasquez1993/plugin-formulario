<div class="container">
 <h5 class="text-center">Queremos que seas parte de nosotros Inscribete Aquí </h5>
       <label class="col-12 col-sm-12">
           [select* patrocinante class:custom-select  "Patrocinante" "Dynamics" "Surgery" "Dental"]
       </label>
      <p class="red text-center bg-danger">SELECIONALA MODALIDAD</p>

       [radio modalidad label_first default:2 "Ciclo" "Conferencista"]

[group Conferencista]

[/group]
      
  [group Ciclo]


        <div class="grupo1-cabecera  row">
              <span class="resaltado-titulo col"> CICLO </class>
           
              <label class="col-12 col-sm-12"> 
                 Titulo (*)
                 [text* titulo placeholder "Titulo"]
              </label>
              <label class="col-12 col-sm-12"> Área de Especialización  (*)
                       [select* especializacion class:especializacion include_blank "area1" "area2" "area3" "area4" "area5"]
              </label>
        </div>
       <!--FIN DE TITULO -->

       <!--conferencia inicio -->
       <div class="grupo1-cuerpo">
         <div class="wrap-dia-padre"> <!--AQUI FUNCIONARA EL LOOP PARA AÑADIR DIAS-->
            <div class="wrap-day-child">   
                <span class="dias-ciclos"></span>
                <!-- ========CONFERENCIA ======= -->
                <div class="grupo1-conferencia">
                 <span class="resaltado-titulo text-center">CONFERENCIA</span>
                     <label class="col-12 col-sm-12"> 
                        [text titulo-conferencia class:border-botones  placeholder "Título"]
                     </label>
                     <label class="col-12 col-sm-12">
                        [textarea descripcion-conferencia class:border-botones placeholder "Descripción"] 
                     </label>
            </div> 
                <!-- =========== FIN DE CONFERENCIA ============ -->
                <!-- ========== INICIO CONFERENCISTA ===== -->
               <div class="grupos-comun grupo1-conferencista">
                     <div class="wrap-comun wrap-conferencista-padre container"> 
                        <div class="wrap-comun-chil wrapp-conferencista-child row">
                                   <span class="resaltado-titulo">CONFERENCISTA</span>
                                   <label class="col-12 col-sm-12">
                                      [text* nombre_conferencista class:border-botones  placeholder "Nombre"]
                                   </label>
                                   <label class="col-12 col-sm-5">
                                      [tel* telefono_conferencista class:border-botones placeholder "teléfono"]
                                   </label> 
                                   <label class="col-12 col-sm-7">
                                      [email* email_conferencista class:border-botones placeholder "Email"]
                                   </label>
                                   <label class="col-12 col-sm-12">
                                      [text* especializacion_conferencista class:border-botones placeholder "Especialización"]
                                   </label>
                                   <label class="col-12 col-sm-6">
                                      [text* pais_origen_conferencista  class:border-botones placeholder "País de Origen"]
                                   </label>
                                   <label class="col-12 col-sm-6">
                                      [text* pais_residencia_conferencista  class:border-botones placeholder "País de 
                                      Residencia"]
                                   </label>
             
                                   <div class="col col-12 adjuntar_informacion row">
                                        <label class="col">
                                            Adjuntar CV
                                           [file* adjuntar_cv_conferencista]
                                        </label>
                                        <label class="col">
                                             Fotografía
                                             [file fotografia_conferencista]
                                        </label>
                                   </div>
                        </div>
                     </div>
                     <!--============ inicio de boton para añadir conferencista-->
                     <p class="boton-añadir-conferencista">Añadir Conferencista</p>
                     <!-- ========== fin de boton ========== ------>
               </div> 
                <!--========FIN DE CONFERENCISTA ====== -->
                <!-- ========== MODERADORES =========== ------>
                <div class="grupos-comun grupo1-moderador">
                    <div class="wrap-comun wrap-moderador-padre container"> 
                         <div class=" wrap-comun-chil wrap-moderadores-child row">
                                <span class="resaltado col-12 col-sm-12">MODERADOR</span>
                                <label  class="col-12 col-sm-12">
                                    [text* nombre_moderador class:border-botones  placeholder "Nombre"]
                                </label>
                                <label class="col-12 col-sm-5">
                                    [tel* telefono_moderador class:border-botones placeholder "Teléfono"]
                                </label>
                                <label class="col-12 col-sm-7">
                                    [email correo_moderador class:border-botones placeholder "E-mail"]
                                </label>
                                <label class="col col-12">
                                    [text especializacion_moderador class:border-botones placeholder "Especialización"]
                                </label>
                                <div class="adjuntar_informacion col col-12">
                                  <label>
                                      Adjuntar CV
                                     [file* adjuntar_cv_moderador]
                                  </label>
                                  <label>
                                       Fotografía
                                       [file fotografia_moderador]
                                  </label>
                                </div>
                          </div>
                    </div>    
                    <!--============ inicio de boton para añadir moderadores-->
                    <p class="boton-añadir-moderador">Añadir Moderador</p>
                    <!-- ========== fin de boton ========== ------>
                </div>
         </div>   
        
      </div>
      <p class="anadir-dia">Añadir Dia</p>
</div>
[/group]

[submit "Enviar"]

</div>