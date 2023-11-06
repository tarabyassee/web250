<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($bird)) {
  redirect_to(url_for('/index.php'));
}
?>

<dl>
  <dt>Common Name</dt>
  <dd><input type="text" name="bird[common_name]" value="<?php echo h($bird->common_name); ?>" /></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="bird[habitat]" value="<?php echo h($bird->habitat); ?>" /></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="bird[food]" value="<?php echo h($bird->food); ?>" /></dd>
</dl>

<dl>
  <dt>Conservation </dt>
  <dd>
    <select name="bird[conservation]">
      <option value=""></option>
    <?php foreach(Bird::CONSERVATION_OPTIONS as $conserv_id => $conserv_description) { ?>
      <option value="<?php echo $conserv_id; ?>"<?php if($bird->conservation_id == $conserv_id) {echo 'selected';}?>><?php echo $conserv_description; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Backyard Tips</dt>
  <dd><input type="text" name="bird[backyard_tips]" value="<?php echo h($bird->backyard_tips); ?>" /></dd>
</dl>


