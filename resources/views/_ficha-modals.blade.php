<div id='boxOverlay'>
    <button type="button" id="buCloseOverlay" onclick="closeOverlay()">X</button>
    <div id="innerBoxOverlay" class="multiOverlay">
        <h3> Alta</h3>
        <form id="Video">
            <fieldset>
            <label for="inTituloVideo">Título: <input type='text' id='inTituloVideo' name='tituloVideo'></label>
            <label for="inLinkVideo">Link: <input type='url' id='inLinkVideo' name='linkVideo'></label>
            <label for="inFechaVideo">Fecha:
            <input type='date' name='fechaVideo' id='inFechaVideo' class='inDate' placeholder='aaaa-mm-dd'></label>
            <div>
            <label for="taDescVideo">Descripción: </label>
            <textarea name='desVvideo' id='taDescVideo' maxlength='150' rows='4'></textarea>
            </div>
            <button type='submit' id='buVideos' name="buVideo" class='boton'>Enviar</button>

            </fieldset>
        </form>

        <form id="Desparasitación">
            <fieldset>
                 <label for="slProductoDesparasitacion">Producto:
                       <select name='slProductoDesparasitacion' id='slProductoDesparasitacion'>
                                    <option value='1'>Zipyran Plus</option>
                                    <option value='2'>Fronline</option>
                       </select></label>
                <label for="inFechaDesparasitacion">Fecha:
                <input type='date' name='inFechaDesparasitacion' id='inFechaDesparasitacion' class='inDate'></label>

            <button type='submit' id='buVcacuna' name="buVacuna" class='boton'>Enviar</button>

            </fieldset>
        </form>

        <form id="Analítica">
            <fieldset>
            <label >Analítica:

                    <input name=tipoAnalitica list=slTipoAnalitica>


            <datalist id='slTipoAnalitica'>
                <option value='Leishmaniosis'></option>
                <option value='Leucemia'></option>
            </datalist></label>
            Resultado:
            <label for='analitica+'><input type='radio' name='analitica' id='analitica+' value='1'>+</label>
            <label for='analitica-'><input type='radio' name='analitica' id='analitica-' value='1'>-</label>
            <label for="inPDFAnalitica">PDF:
            <input type='file' id="PDFAnalitica" name='PDFAnalitica'></label>
            <label for="inFechaAnalitica">Fecha:
            <input type='date' name='fechaAnalitica' id='inFechaAnalitica' class='inDate'></label>

            <button type='submit' id='buAnalitica' name="buAnalitica" class='boton'>Enviar</button>

            </fieldset>
        </form>

        <form id="Vacuna">
            <fieldset>
            <label for="slVacuna">Vacuna:
            <select name='vacuna' id='vacuna'>
                        <option value='1'>Rabia</option>
                        <option value='2'>DHPPI</option>
            </select></label>
            <label for="inFechaVacuna">Fecha vacunación:
            <input type='date' name='fecha-vacuna' id='fecha-vacuna' class='inDate'></label>

            <button type='submit' id='buVcacuna' name="buVacuna" class='boton'>Enviar</button>

            </fieldset>
        </form>

        <form id="Tratamiento">
            <fieldset>
            <label for="slTratamiento">Producto:
            <select name='productoTratamiento' id='slTratamiento'>
                <option value='1'>Amoxicilina/Clavulánico</option>
                <option value='2'>Maxitrol</option>
            </select></label>
            <span>
                <label for="inDosisTratamiento">Dosis:
                <input type='number' name='dosisTratamiento' id='inDosis' value='100' min='0' max='5000' step='1'></label>
                <select name='unidadTratamiento' id='inUnidadTratamiento'>
                    <option value='1'>mg</option>
                    <option value='2'>ml</option>
                    <option value='3'>gotas</option>
                    <option value='4'>N/A</option>
                </select>
                <label for='inVecesTratamiento'>Cada<input type='number' name='vecesTratamiento' id="inVecesTratamiento" value='8' min='1' max='24' step='1'>h</label>
            </span>
            <span>
            <label for="inInicioTratamiento">Fecha inicio:
            <input type='date' id='inInicioTratamiento' name='inicioTratamiento' > </label>
            <label for='inNDiasTratamiento'>Nº días:<input type='number' id="inNDiasTratamiento" name='inNDiasTratamiento' min='1' max='365' step='1'></label>
            <label for="inFinTratamiento">Fecha fin: <input type='date' id='inFinTratamiento' name='finTratamiento' disabled></label>
            </span>
            <label for="slVeterinarioTratamiento">Veterinario:
            <select name='veterinarioTratamiento' id='slVeterinarioTratamiento'>
                <option value="0">N/A</option>
                <option value='1'>Juan - Sol y Luz</option>
                <option value='1'>Cristina - El Drac</option>
            </select></label>
            <div>
            <label for="taObservacionesTratamiento">Observaciones: </label>
            <textarea name='observacionesTratamiento' id='taObservacionesTratamiento' maxlength='140' rows='4'></textarea>
            </div>
                <button type='submit' id='buTratamientos' name="buTratamientos" class='boton'>Enviar</button>

            </fieldset>
        </form>

        <form id="Documentación">
            <fieldset>
            <label for="inDocumento">Tipo documento: <input type="text" id="inDocumento" name="inDocumento"></label>
            <label for="inPDF">PDF: <input type='file' id="inPDF" name='inPDF'></label>
            <div>
                <label for="taDescDocumentacion">Descripción: </label>
                <textarea name='taDescDocumentacion' id='taDescDocumentacion' maxlength='150' rows='4'></textarea>
            </div>
            <button type='submit' id='buDocumentacion' name="buDocumentacion" class='boton'>Enviar</button>

            </fieldset>
        </form>

        <form id="Histórico">
            <fieldset>
            <p>
            Estado: Adoptado</br>
            Desde: 01-01-2012 hasta: 01-01-2013</br>
            Por: <a href='adoptantes.php?id=1' target="_blank">Jonh Smith</a></br>
            </p>
            <div>
                <label for="taMotivoHistorico">Motivo cancelación: </label>
                <textarea name='motivoHistorico' id='MotivoHistorico' maxlength='150' rows='4'></textarea>
            </div>
            <button type='submit' id='buHistorico' name="buHistorico" class='boton'>Enviar</button>

            </fieldset>
        </form>
    </div>
</div>