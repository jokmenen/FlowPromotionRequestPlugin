<div class="container">

<form class="well form-horizontal" action="https://www.svflow.nl/wp-admin/admin-post.php" method="post" id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Promotion Request</legend>
<input type="hidden" name="fromPage" value="1">
<input type="hidden" name="action" value="FlowPromotieaanvraag">

<!-- Welke Commissaris -->

<div class="form-group">
<label class="col-md-4 control-label">Commissie</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select name="m_commissie" class="form-control selectpicker">
<option value=" " >Selecteer je commissie</option>
<option>Webcommissie</option>
<option>IFAC</option>
<option >Bestuur</option>
<option >etc...</option>
</div>
</div>
</div>

<br/>

<!-- Start promotie -->

<div class="form-group">
<label class="col-md-4 control-label">Staaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaart Promotie</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="m_startpromo" placeholder="startpromo" class="form-control" type="startPromotiontime-local">
</div>
</div>
</div>

<!-- Welke promotie, deze vakjes moeten de invulvakjes laten verschijnen -->
<div class="form-group">
<label class="col-md-4 control-label">Waar wil je promoten</label>
<select name="waar">
<option value="m_wb">Website - Bericht</option>
<option value="m_wf">Website - Formulier</option>
<option value="m_fb">Facebook - Bericht</option>
<option value="m_fe">Facebook - Evenement</option>
</select>
</div>

<!-- ##############################################WEBSITE######################################## -->

<div class="form-group">
<label class="col-md-4 control-label">Pagina Titel</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="w_titel" placeholder="Pagina Titel" class="form-control" type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Website tekst - Nederlands</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="w_nl" placeholder="Voer hier de Nederlandse tekst in die je op de website wil hebben."></textarea>
</div>
</div>
<label class="col-md-4 control-label">Website tekst - Engels</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Engelse tekst in die je op de website wil hebben."></textarea>
</div>
</div>
</div>

<!-- Formulier - aan als formulier is aangevinkt-->
<<div class="form-group">
<label class="col-md-4 control-label">Wat moet er in het formulier komen?</label>
<div class="col-md-4">
<div class="checkbox">
<label>
<input type="checkbox" name="voornaam" value="voornaam" /> Voornaam
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="achternaam" value="Achternaam" /> Achternaam
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="email" value="email" /> Email
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="tel" value="tel" /> Telefoonnummer
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" name="anders" value="anders" /> Anders... <!-- Meer opties toevoegen, ook tekstvakje erbij -->
</label>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Start Inschrijvingen</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="first_name" placeholder="First Name" class="form-control" type="startPromotiontime-local">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Einde inschrijvingen</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="first_name" placeholder="First Name" class="form-control" type="startPromotiontime-local">
</div>
</div>
</div>

<!-- email inschrijvers-->

<div class="form-group">
<label class="col-md-4 control-label">Email inschrijvers - Nederlands</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Nederlandse email in."></textarea>
</div>
</div>
<label class="col-md-4 control-label">Email inschrijvers - Engels</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Engelse email in."></textarea>
</div>
</div>
</div>

<!-- ##############################################FACEBOOK BERICHT######################################## -->
<!-- maak max 320? tekenst of 440? zonder plaatje -->

<div class="form-group">
<label class="col-md-4 control-label">Facebookbericht - Nederlands</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Nederlandse tekst in die je in het facebookbericht wil hebben." onkeyup="textCounter(this,'counter',320);"></textarea>
<input disabled maxlength="3" size="3" value="10" id="counter">
</div>
</div>
<label class="col-md-4 control-label">Facebookbericht - Engels</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Engelse tekst in die je in het facebookbericht wil hebben." onkeyup="textCounter(this,'counter2',320);"></textarea>
<input disabled maxlength="3" size="3" value="10" id="counter2">
</div>
</div>
</div>

<script>
function textCounter(field,field2,maxlimit)
{
var countfield = document.getElementById(field2);
if ( field.value.length > maxlimit ) {
field.value = field.value.substring( 0, maxlimit );
return false;
} else {
countfield.value = maxlimit - field.value.length;
}
}
</script>

<!-- ##############################################FACEBOOK EVENT######################################## -->

<div class="form-group">
<label class="col-md-4 control-label">Start Evenement</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="first_name" placeholder="First Name" class="form-control" type="startPromotiontime-local">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Einde Evenement</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="first_name" placeholder="First Name" class="form-control" type="startPromotiontime-local">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Evenement Titel</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="zip" placeholder="Zip Code" class="form-control" type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Facebookevenement - Nederlands</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Nederlandse tekst in die je in het facebookbericht wil hebben."></textarea>
</div>
</div>
<label class="col-md-4 control-label">Facebookevenement - Engels</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier de Engelse tekst in die je in het facebookbericht wil hebben."></textarea>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Evenement Titel</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input name="zip" placeholder="Zip Code" class="form-control" type="text">
</div>
</div>
</div>

<!---------------------------- Opmerkingen ------------------->
<div class="form-group">
<label class="col-md-4 control-label">Opmerkingen</label>
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
<textarea class="form-control" name="comment" placeholder="Voer hier je opmerkingen in."></textarea>
</div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i> Bedankt voor je promotieaanvraag! </div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4">
<button action="https://www.svflow.nl/wp-admin/admin-post.php" method="POST" type="submit" class="btn btn-warning">Verzenden <span class="glyphicon glyphicon-send"></span></button>
</div>
</div>

</fieldset>
</form>
</div>
</div>
<!-- /.container -->