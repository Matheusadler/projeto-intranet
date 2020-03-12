//require('./bootstrap');
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })

    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        Locale: {
            format: "DD/MM/YYYY"
        }
    })

    //Date range picker with time picker
    $('#reservationtime2').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        Locale: {
            format: 'dd/mm/yyyy',
            language: 'pt-BR'
        }
    })
})