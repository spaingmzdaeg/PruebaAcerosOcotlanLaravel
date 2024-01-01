$(document).ready(function(){
    $(document).on('click', '#add-button', function(){
        // Aqui muestras los campos
        let firstName = $('#fill_first_name').val();
        let lastName = $('#fill_last_name').val();
        let secondSurName = $('#fill_second_surname').val();
        let rfc = $('#fill_rfc').val();
        let departmentName = $('#fill_department option:selected').text();
        let departmentId =  $('#fill_department option:selected').attr("value");
        
        // Agregar los campos en etiquetas

        $( "#get-first-name" ).append( "[" + firstName + "]" );
        $( "#get-last-name" ).append( "[" + lastName + "]" ); 
        $( "#get-second-surname" ).append( "[" + secondSurName + "]" ); 
        $( "#get-rfc" ).append( "[" + rfc + "]" ); 
        $( "#get-department-name" ).append( "[" + departmentName + "]" );
        
        
        // Agregar valores en input
        $("#first_name").val(firstName);
        $("#last_name").val(lastName);
        $("#second_surname").val(secondSurName);
        $("#rfc").val(rfc);
        $("#department_id").val(departmentId);
        
    });

    $(document).on('click', '#btn-cancel', function(){
        // Aqui los borras para que no aparezcan duplicados
        $( "#get-first-name" ).empty();
        $( "#get-last-name" ).empty();
        $( "#get-second-surname" ).empty();
        $( "#get-rfc" ).empty();
        $( "#get-department-name" ).empty();
        
        // Limpiar valores del input
        $("#first-name").empty()
        $("#last-name").empty()
        $("#second-surname").empty()
        $("#rfc").empty()
        $("#department_id").empty() 
        
    });
});