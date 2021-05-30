<div class="row">
    <!--TIPO DE ESPELHO-->
    <div class="col">
        <div class="form-group">
        <label for="espelho">Espelho Esférico</label>
        <select name="espelho" class="form-control" id="espelho">
            <option value="1" <?php if($espelho==1){echo 'selected';}?>>Côncavo</option>
            <option value="2" <?php if($espelho==2){echo 'selected';}?>>Convexo</option>
        </select>
        </div>
    </div>
    <!--CALCULO DESEJADO-->
    <div class="col">
        <div class="form-group">
            <label for="calculo">Cálculo</label>
            <select name="calculo" class="form-control" id="calculo">
                <option value="A" <?php if($calculo=='A'){echo 'selected';}?>>Aumento</option>
                <option value="Hi" <?php if($calculo=='Hi'){echo 'selected';}?>>Altura da Imagem</option>
                <option value="Ho" <?php if($calculo=='Ho'){echo 'selected';}?>>Altura do Objeto</option>
                <option value="Di" <?php if($calculo=='Di'){echo 'selected';}?>>Distância da Imagem</option>
                <option value="Do" <?php if($calculo=='Do'){echo 'selected';}?>>Distância do Objeto</option>
                <option value="f" <?php if($calculo=='f'){echo 'selected';}?>>Distância Focal</option>
            </select>
        </div>
    </div>
</div>
<input type="submit" name="action" value="Enviar" class="btn btn-outline-light btn-perigo-adicional col">
<hr>