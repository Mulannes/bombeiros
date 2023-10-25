var latromi = latromi || {};

latromi.myForm = function () {

   function onFormCreatedPrivate(arguments) {
      let board = document.getElementById('board');		
   
      new latromi.esignature(board, { 
         width:  $(board.parentElement).width(),
         height: $(board.parentElement).height(),
         lineWidth: 4,
         backcolor: "white"
      });
   }

   function onEventFiringPrivate(arguments){
      console.log('Evento ' + arguments.eventName + ' disparado.');

      if (arguments.eventKind   === 'Field' 
         && arguments.field.name === 'btnConfirmar' 
         && arguments.eventName === 'Click')
      {
         let board = document.getElementById('board');	
         let base64 = board.toDataURL("image/png").replace("image/png", "image/octet-stream")
         arguments.form.setVariableValue('assinaturaBase64', base64);
      }

   }

   function onFieldValueChangedPrivate(arguments){
      console.log('O valor do campo ' + arguments.field.name + ' foi alterado.');
   }

   return {

      onFormCreated: function(arguments) {
         onFormCreatedPrivate(arguments);
      },

      onEventFiring: function(arguments) {
         onEventFiringPrivate(arguments);
      },

      onFieldValueChanged: function(arguments) {
         onFieldValueChangedPrivate(arguments);
      }
   }
};

// Declara o formulário
var myForm = new latromi.myForm();

// Adiciona Callbacks no Formulário
latromi.formManager.setOnFormCreatedCallback( myForm.onFormCreated );
latromi.formManager.setOnEventFiringCallback( myForm.onEventFiring );
latromi.formManager.setOnFieldValueChangedCallback( myForm.onFieldValueChanged );