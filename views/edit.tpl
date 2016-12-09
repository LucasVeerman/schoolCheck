<form action="./model/update.php" method="post">
<table>
       <tr>
            <td><input type="text" class="textField" placeholder="id" name="id" value="{$result.0.id}" readonly></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="Schoolname" name="name" value="{$result.0.name}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="street" name="street" value="{$result.0.street}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="streetNumber" name="streetNumber" value="{$result.0.streetNumber}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="zipCode" name="zipCode" value="{$result.0.zipCode}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="telNr" name="telNr" value="{$result.0.telNr}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="email" name="email" value="{$result.0.email}" required></td>
        </tr>
        <tr>
            <td><input type="text" class="textField" placeholder="website" name="website" value="{$result.0.website}" required></td>
        </tr>
        <tr>
            <td><input type="number" class="textField" placeholder="districts_id" name="districts_id" value="{$result.0.districts_id}" min="1" max="9" required></td>
        </tr>
        <tr>
            <td><input type="datetime-local" name="openday" value="{$result.0.openday}" required></td>
        </tr>
        <tr>
            <td> <input type="datetime-local" name="openclass" value="{$result.0.openclass}" required></td>
        </tr>    
        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
       
</table>
<a href="index.php?action=admin">Keer terug</a>
    
</form>