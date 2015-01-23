<?php 
echo "<pre>Usuario: ";
print_r($usuario);
echo "</pre>";
?>
<form method="POST"
enctype="multipart/form-data">
    <ul>
        <li>
            <label>id</label>
            <input type="hidden" name="id" value="<?php echo $usuario[0];?>" />
        </li>
        <li>
            <label>Nombre</label>
            <input type="text" name="name" value="<?php echo $usuario[1];?>"/>
        </li>
        <li>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $usuario[2];?>"/>
        </li>
        <li>
            <label>Contraseña</label>
            <input type="password" name="password" />
        </li>
        <li>
            <label>Fecha de nacimiento</label>
            <input type="date" name="bdate" />
        </li>
        <li>
            <label>Descripcion</label>
            <textarea rows="" cols="" name="description">
            <?php echo $usuario[5];?>
            </textarea>
        </li>
        <li>
            <label>Foto</label>
            <input type="file" name="photo" />
        </li>
        <li>
            <label>Privacidad</label>
            Si<input type="checkbox" name="privacy[]" value="si" <?php if(in_array('si', $usuario[6])) echo 'checked';?>/>
            Spam<input type="checkbox" name="privacy[]" value="spam" <?=(in_array('spam', $usuario[6]))?'checked':'';?>/>
        </li>
        <li>
            <label>Sexo</label>
            M<input type="radio" name="gender" value="m" <?=($usuario[7]=='m')?'checked':'';?> />
            H<input type="radio" name="gender" value="h" <?=($usuario[7]=='h')?'checked':'';?> />
            O<input type="radio" name="gender" value="o" <?=($usuario[7]=='o')?'checked':'';?> />            
        </li>
        <li>
            <label>Ciudad</label>
            <select name="city">
                <option value="Valencia" <?=($usuario[8]=='Valencia')?'checked':'';?>>Valencia</option>
                <option value="BCN" <?=($usuario[8]=='BCN')?'checked':'';?>>Barcelona</option>
                <option value="Madrid" <?=($usuario[8]=='Madrid')?'checked':'';?>>Madrid</option>                
            </select>
        </li>
        
        <li>
            <label>Aficiones</label>
            <select multiple name="hobbies[]">
                <option <?=(in_array('Cine', $usuario[9]))?'selected':'';?>>Cine</option>
                <option <?=(in_array('Deporte', $usuario[9]))?'selected':'';?>>Deporte</option>
                <option <?=(in_array('Viajes', $usuario[9]))?'selected':'';?>>Viajes</option>                
            </select>
        </li>
        <li>
            <label>Enviar</label>
            <input type="submit" name="submit" />
        </li>
    </ul>
</form>

