<div class="container">

 <h5 class="text-center">Queremos que seas parte de nosotros Inscribete Aquí </h5>
       <div class="col-12 col-sm-12">
           [select* patrocinante  class:border-botones class:especializacion  "Patrocinante" "Dynamics" "Surgery" "Dental"]
       </div>
       <div class="flex-center">
          <p class="red text-center bg-danger">SELECIONALA MODALIDAD</p>
      </div>
      <div class="text-center flex-center">
       [radio modalidad  div_first default:2 "Ciclo" "Conferencista"]
       </div>


[group Ciclo]

      <div class="container">
        <div class="grupo1-cabecera  row">
              <span class="resaltado-titulo"> CICLO </span>
              <div class="col-12 col-sm-12"> 
                 Titulo (*)
                 [text* titulo_ciclo class:border-botones placeholder "Titulo"]
              </div>
              <div class="col-12 col-sm-12"> Área de Especialización  (*)
                       [select* especializacion class:especializacion class:border-botones include_blank "area1" "area2" "area3" "area4" "area5"]
              </div>
        </div>
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
                     <div class="col-12 col-sm-12"> 
                        [text* titulo-conferencia_ciclo class:border-botones  placeholder "Título"]
                     </div>
                     <div class="col-12 col-sm-12">
                        [textarea* descripcion-conferencia_ciclo class:border-botones placeholder "Descripción"] 
                     </div>
            </div> 
                <!-- =========== FIN DE CONFERENCIA ============ -->
                <!-- ========== INICIO CONFERENCISTA ===== -->
               <div class="grupos-comun grupo1-conferencista">
                     <div class="wrap-comun wrap-conferencista-padre container"> 
                        <div class="wrap-comun-chil wrapp-conferencista-child row">
                                   <span class="resaltado-titulo">CONFERENCISTA</span>
                                   <div class="col-12 col-sm-12">
                                      [text* nombre_conferencista_ciclo class:border-botones  placeholder "Nombre"]
                                   </div>
                                   <div class="col-12 col-sm-5">
                                      [tel* telefono_conferencista_ciclo class:border-botones placeholder "teléfono"]
                                   </div> 
                                   <div class="col-12 col-sm-7">
                                      [email* email_conferencista_ciclo class:border-botones placeholder "Email"]
                                   </div>
                                   <div class="col-12 col-sm-12">
                                      [text* especializacion_conferencista_ciclo class:border-botones placeholder "Especialización"]
                                   </div>
                                   <div class="col-12 col-sm-6">
                                      [text* pais_origen_conferencista_ciclo  class:border-botones placeholder "País de Origen"]
                                   </div>
                                   <div class="col-12 col-sm-6">
                                      [text* pais_residencia_conferencista_ciclo  class:border-botones placeholder "País de 
                                      Residencia"]
                                   </div>
             
                                   <div class="col col-12 adjuntar_informacion row">
                                        <div class="col file-div">
                                            Adjuntar CV
                                           [file*   adjuntar_cv_conferencista_ciclo class:file-form]
                                        </div>
                                        <div class="col file-div">
                                             Fotografía
                                             [file*  fotografia_conferencista_ciclo class:file-form] 
                                        </div>
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
                                <span class="resaltado-titulo">MODERADOR</span>
                                <div  class="col-12 col-sm-12">
                                    [text nombre_moderador_ciclo class:border-botones  placeholder "Nombre"]
                                </div>
                                <div class="col-12 col-sm-5">
                                    [tel telefono_moderador_ciclo class:border-botones placeholder "Teléfono"]
                                </div>
                                <div class="col-12 col-sm-7">
                                    [email correo_moderador_ciclo class:border-botones placeholder "E-mail"]
                                </div>
                                <div class="col col-12">
                                    [text especializacion_moderador_ciclo class:border-botones placeholder "Especialización"]
                                </div>
                                <div class="col col-12 adjuntar_informacion row">
                                        <div class="col file-div">
                                            Adjuntar CV
                                           [file*   adjuntar_cv_moderador_ciclo class:file-form]
                                        </div>
                                        <div class="col file-div">
                                             Fotografía
                                             [file*  fotografia_moderador_ciclo class:file-form] 
                                        </div>
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
                     <div class="col-12 col-sm-12"> 
                        [text* titulo-conferencia_conferencista class:border-botones  placeholder "Título"]
                     </div>
                     <div class="col-12 col-sm-12">
                        [textarea* descripcion-conferencia_ciclo_conferencista class:border-botones placeholder "Descripción"] 
                     </div>
            </div> 
                <!-- =========== FIN DE CONFERENCIA ============ -->
                <!-- ========== INICIO CONFERENCISTA ===== -->
               <div class="grupos-comun grupo1-conferencista">
                     <div class="wrap-comun wrap-conferencista-padre container"> 
                        <div class="wrap-comun-chil wrapp-conferencista-child row">
                                   <span class="resaltado-titulo">CONFERENCISTA</span>
                                   <div class="col-12 col-sm-12">
                                      [text* nombre_conferencista_conferencista class:border-botones  placeholder "Nombre"]
                                   </div>
                                   <div class="col-12 col-sm-5">
                                      [tel* telefono_conferencista_conferencista class:border-botones placeholder "teléfono"]
                                   </div> 
                                   <div class="col-12 col-sm-7">
                                      [email* email_conferencista_conferencista class:border-botones placeholder "Email"]
                                   </div>
                                   <div class="col-12 col-sm-12">
                                      [text* especializacion_conferencista_conferencista class:border-botones placeholder "Especialización"]
                                   </div>
                                   <div class="col-12 col-sm-6">
                                      [text* pais_origen_conferencista  class:border-botones placeholder "País de Origen"]
                                   </div>
                                   <div class="col-12 col-sm-6">
                                      [text* pais_residencia_conferencista  class:border-botones placeholder "País de 
                                      Residencia"]
                                   </div>
             
                                   <div class="col col-12 adjuntar_informacion row">
                                        <div class="col file-div">
                                            Adjuntar CV
                                           [file*   adjuntar_cv_conferencista class:file-form]
                                        </div>
                                        <div class="col file-div">
                                             Fotografía
                                             [file*  fotografia_conferencista class:file-form] 
                                        </div>
                                   </div>
                        </div>
                     </div>
                     <!--============ inicio de boton para añadir conferencista-->
                     <p class="boton-añadir-conferencista text-center">Añadir Conferencista</p>
                     <!-- ========== fin de boton ========== ------>
               </div> 
                <!--========FIN DE CONFERENCISTA ====== -->
                <!-- ========== MODERADORES =========== ------>
                <div class="grupos-comun grupo1-moderador">
                    <div class="wrap-comun wrap-moderador-padre container"> 
                         <div class=" wrap-comun-chil wrap-moderadores-child row">
                                <span class="resaltado-titulo">MODERADOR</span>
                                <div  class="col-12 col-sm-12">
                                    [text nombre_moderador_conferencista class:border-botones  placeholder "Nombre"]
                                </div>
                                <div class="col-12 col-sm-5">
                                    [tel telefono_moderador_conferencista class:border-botones placeholder "Teléfono"]
                                </div>
                                <div class="col-12 col-sm-7">
                                    [email correo_moderador_conferencista class:border-botones placeholder "E-mail"]
                                </div>
                                <div class="col col-12">
                                    [text especializacion_moderador_conferencista class:border-botones placeholder "Especialización"]
                                </div>
                                <div class="col col-12 adjuntar_informacion row">
                                        <div class="col file-div">
                                            Adjuntar CV
                                           [file*   adjuntar_cv_moderador_ciclo class:file-form]
                                        </div>
                                        <div class="col file-div">
                                             Fotografía
                                             [file*  fotografia_moderador_ciclo class:file-form] 
                                        </div>
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