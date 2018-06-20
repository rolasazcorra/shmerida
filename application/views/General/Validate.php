<script  type="text/javascript">
 var frmvalidator = new Validator("contact_form");
 
 frmvalidator.addValidation("nombre","req","Por favor ingrese su nombre");
  frmvalidator.addValidation("celular","req","Por favor ingrese un teléfono");
 frmvalidator.addValidation("mensaje","req","Por favor ingrese un mensaje");
 frmvalidator.addValidation("email","req","Por favor ingrese su correo");
  frmvalidator.addValidation("interes","req","Por favor su intereses");
   frmvalidator.addValidation("tratamiento","req","Por favor un tratamiento");
 
 frmvalidator.addValidation("email","email", "Por favor ingrese un correo válido.");
 
 frmvalidator.addValidation("tel","numeric", "El teléfono debe contener sólo números.");

</script>