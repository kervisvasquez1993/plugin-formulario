<div class="container">

 <h5 class="text-center">Queremos que seas parte de nosotros Inscribete Aquí </h5>
       <label class="col-12 col-sm-12">
           [select* patrocinante  class:border-botones class:especializacion  "Patrocinante" "Dynamics" "Surgery" "Dental"]
       </label>
      <p class="red text-center bg-danger">SELECIONALA MODALIDAD</p>
      <div class="text-center">
       [radio modalidad  label_first default:2 "Ciclo" "Conferencista"]
       </div>


[group Ciclo]
        <div class="grupo1-cabecera  row">
              <span class="resaltado-titulo col"> CICLO </span>
              <label class="col-12 col-sm-12"> 
                 Titulo (*)
                 [text* titulo_ciclo class:border-botones placeholder "Titulo"]
              </label>
              <label class="col-12 col-sm-12"> Área de Especialización  (*)
                       [select* especializacion class:especializacion class:border-botones include_blank "area1" "area2" "area3" "area4" "area5"]
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
                        [text* titulo-conferencia_ciclo class:border-botones  placeholder "Título"]
                     </label>
                     <label class="col-12 col-sm-12">
                        [textarea* descripcion-conferencia_ciclo class:border-botones placeholder "Descripción"] 
                     </label>
            </div> 
                <!-- =========== FIN DE CONFERENCIA ============ -->
                <!-- ========== INICIO CONFERENCISTA ===== -->
               <div class="grupos-comun grupo1-conferencista">
                     <div class="wrap-comun wrap-conferencista-padre container"> 
                        <div class="wrap-comun-chil wrapp-conferencista-child row">
                                   <span class="resaltado-titulo">CONFERENCISTA</span>
                                   <label class="col-12 col-sm-12">
                                      [text* nombre_conferencista_ciclo class:border-botones  placeholder "Nombre"]
                                   </label>
                                   <label class="col-12 col-sm-5">
                                      [tel* telefono_conferencista_ciclo class:border-botones placeholder "teléfono"]
                                   </label> 
                                   <label class="col-12 col-sm-7">
                                      [email* email_conferencista_ciclo class:border-botones placeholder "Email"]
                                   </label>
                                   <label class="col-12 col-sm-12">
                                      [text* especializacion_conferencista_ciclo class:border-botones placeholder "Especialización"]
                                   </label>
                                   <label class="col-12 col-sm-6">
                                      [text* pais_origen_conferencista_ciclo  class:border-botones placeholder "País de Origen"]
                                   </label>
                                   <label class="col-12 col-sm-6">
                                      [text* pais_residencia_conferencista_ciclo  class:border-botones placeholder "País de 
                                      Residencia"]
                                   </label>
             
                                   <div class="col col-12 adjuntar_informacion row">
                                        <label class="col file-label">
                                            Adjuntar CV
                                           [file*   adjuntar_cv_conferencista_ciclo class:file-form]
                                        </label>
                                        <label class="col file-label">
                                             Fotografía
                                             [file*  fotografia_conferencista_ciclo class:file-form] 
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
                                    [text nombre_moderador_ciclo class:border-botones  placeholder "Nombre"]
                                </label>
                                <label class="col-12 col-sm-5">
                                    [tel telefono_moderador_ciclo class:border-botones placeholder "Teléfono"]
                                </label>
                                <label class="col-12 col-sm-7">
                                    [email correo_moderador_ciclo class:border-botones placeholder "E-mail"]
                                </label>
                                <label class="col col-12">
                                    [text especializacion_moderador_ciclo class:border-botones placeholder "Especialización"]
                                </label>
                                <div class="adjuntar_informacion col col-12">
                                  <label>
                                      Adjuntar CV
                                     [file adjuntar_cv_moderador_ciclo]
                                  </label>
                                  <label>
                                       Fotografía
                                       [file fotografia_moderador_ciclo]
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
[group Conferencista]
<div class="grupo1-cuerpo">
         <div class="wrap-dia-padre"> <!--AQUI FUNCIONARA EL LOOP PARA AÑADIR DIAS-->
            <div class="wrap-day-child">   
                <span class="dias-ciclos"></span>
                <!-- ========CONFERENCIA ======= -->
                <div class="grupo1-conferencia">
                 <span class="resaltado-titulo text-center">CONFERENCIA</span>
                     <label class="col-12 col-sm-12"> 
                        [text* titulo-conferencia_conferencista class:border-botones  placeholder "Título"]
                     </label>
                     <label class="col-12 col-sm-12">
                        [textarea* descripcion-conferencia_ciclo_conferencista class:border-botones placeholder "Descripción"] 
                     </label>
            </div> 
                <!-- =========== FIN DE CONFERENCIA ============ -->
                <!-- ========== INICIO CONFERENCISTA ===== -->
               <div class="grupos-comun grupo1-conferencista">
                     <div class="wrap-comun wrap-conferencista-padre container"> 
                        <div class="wrap-comun-chil wrapp-conferencista-child row">
                                   <span class="resaltado-titulo">CONFERENCISTA</span>
                                   <label class="col-12 col-sm-12">
                                      [text* nombre_conferencista_conferencista class:border-botones  placeholder "Nombre"]
                                   </label>
                                   <label class="col-12 col-sm-5">
                                      [tel* telefono_conferencista_conferencista class:border-botones placeholder "teléfono"]
                                   </label> 
                                   <label class="col-12 col-sm-7">
                                      [email* email_conferencista_conferencista class:border-botones placeholder "Email"]
                                   </label>
                                   <label class="col-12 col-sm-12">
                                      [text* especializacion_conferencista_conferencista class:border-botones placeholder "Especialización"]
                                   </label>
                                   <label class="col-12 col-sm-6">
                                      [text* pais_origen_conferencista  class:border-botones placeholder "País de Origen"]
                                   </label>
                                   <label class="col-12 col-sm-6">
                                      [text* pais_residencia_conferencista  class:border-botones placeholder "País de 
                                      Residencia"]
                                   </label>
             
                                   <div class="col col-12 adjuntar_informacion row">
                                        <label class="col file-label">
                                            Adjuntar CV
                                           [file*   adjuntar_cv_conferencista class:file-form]
                                        </label>
                                        <label class="col file-label">
                                             Fotografía
                                             [file*  fotografia_conferencista class:file-form] 
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
                                    [text nombre_moderador_conferencista class:border-botones  placeholder "Nombre"]
                                </label>
                                <label class="col-12 col-sm-5">
                                    [tel telefono_moderador_conferencista class:border-botones placeholder "Teléfono"]
                                </label>
                                <label class="col-12 col-sm-7">
                                    [email correo_moderador_conferencista class:border-botones placeholder "E-mail"]
                                </label>
                                <label class="col col-12">
                                    [text especializacion_moderador_conferencista class:border-botones placeholder "Especialización"]
                                </label>
                                <div class="adjuntar_informacion col col-12">
                                  <label>
                                      Adjuntar CV
                                     [file adjuntar_cv_moderador_conferencista]
                                  </label>
                                  <label>
                                       Fotografía
                                       [file fotografia_moderador_conferencista]
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



[/group]


[submit "Enviar"]

</div>