<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <h2 class="center">Hunter Association Quest Form</h2>
        <label >First Name</label>
        <input type="text" name="first_name" value='<?php if (isset($_POST['first_name'])){echo $_POST['first_name'];}?>'>
        <span><?php echo htmlspecialchars($first_name_error); ?></span>

        <label>Last Name</label>
        <input type="text" name="last_name" value='<?php if (isset($_POST['last_name'])){echo $_POST['last_name'];}?>'>
        <span><?php echo htmlspecialchars($last_name_error); ?></span>

        <label>Phone Number</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value='<?php if (isset($_POST['phone'])){echo $_POST['phone'];}?>'>
        <span><?php echo htmlspecialchars($phone_error); ?></span>

        <label>Mission type</label>
        <ul>
            <li><input type="radio" name="type" value="bodyguard"
                <?php if(isset($_POST['type']) && $_POST['type'] == 'bodyguard'){echo 'checked = checked';} ?>
            ><strong>Bodyguard</strong> - I need someone to protect me.</li>
            <li><input type="radio" name="type" value="retrieval"
                <?php if(isset($_POST['type']) && $_POST['type'] == 'retrieval'){echo 'checked = checked';} ?>
            ><strong>Retrieval</strong> - I need a specific item or items returned to me.</li>
            <li><input type="radio" name="type" value="extermination"
                <?php if(isset($_POST['type']) && $_POST['type'] == 'extermination'){echo 'checked = checked';} ?>
            ><strong>Extermination</strong> - Kill or remove all of the demons from a particular area.</li>
            <li><input type="radio" name="type" value="assassination"
                <?php if(isset($_POST['type']) && $_POST['type'] == 'assassination'){echo 'checked = checked';} ?>
            ><strong>Assassination</strong> - Defeat a specific strong demon.</li>
            <li><input type="radio" name="type" value="recon"
                <?php if(isset($_POST['type']) && $_POST['type'] == 'recon'){echo 'checked = checked';} ?>
            ><strong>Reconnaisance</strong> - Gather information about a particular area.</li>
        </ul>
        <span><?php echo htmlspecialchars($type_error); ?></span>

        <label>Your Location, or Nearest Hunter Association</label>
        <select name="ward">
            <option value="NULL"
                <?php if(isset($_POST['ward']) && ($_POST['ward'] == 'NULL')){ echo 'selected = selected';}  ?>
            >Select One</option>
            <option value="Ueno"
                <?php if(isset($_POST['ward']) && ($_POST['ward'] == 'Ueno')){ echo 'selected = selected';}  ?>
            >Ueno</option>
            <option value="Shinjuku">
                <?php if(isset($_POST['ward']) && ($_POST['ward'] == 'Shinjuku')){ echo 'selected = selected';}  ?>
            Shinjuku</option>
            <option value="Ginza"
                <?php if(isset($_POST['ward']) && ($_POST['ward'] == 'Ginza')){ echo 'selected = selected';}  ?>
            >Ginza</option>
            <option value="Shibuya"
                <?php if(isset($_POST['ward']) && ($_POST['ward'] == 'Shibuya')){ echo 'selected = selected';}  ?>
            >Shibuya</option>
            <option value="Kinshicho"
                <?php if(isset($_POST['ward']) && ($_POST['ward'] == 'Kinshicho')){ echo 'selected = selected';}  ?>
            >Kinshicho</option>
        </select>
        <span><?php echo htmlspecialchars($ward_error); ?></span>

        <label>Describe the Mission, Briefly</label>
        <textarea name="description"><?php if (isset($_POST['description'])){echo htmlspecialchars( $_POST['description'] ) ;}?></textarea>
        <span><?php echo htmlspecialchars($description_error); ?></span>

        <input type="radio" name="privacy" value = "
        <?php if (isset($_POST['privacy'])){ echo htmlspecialchars($_POST['privacy']); } ?>"
        >I agree to the Privacy Policy
        <span><?php echo htmlspecialchars($privacy_error); ?></span>
        <br />

        <input type="submit" value="SUBMIT">
        <button type="reset" class="btn">RESET</button>
    </fieldset>

    </form>