//require('./bootstrap');
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    //$('#datemask').inputmask('dd/mm/aaaa');

    //Date range picker with time picker
    /*$('#reservationtime').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        Locale: {
            format: "DD/MM/YYYY"
        }
    })*/

    //Date range picker with time picker
    const datepicker = $(".datas");
    //if (datepicker.length > 0) {
    datepicker.daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        drops: "down",
        locale: {
            format: "DD/MM/YYYY",
            daysOfWeek: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
            monthNames: [
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ]
        }
    });
    /*
            datepicker.mask("00/00/0000", {
                clearIfNotMatch: true,
                placeholder: "__/__/____"
            });*/

    datepicker.on("apply.daterangepicker", function(ev, picker) {
        $(this).val(picker.startDate.format("DD/MM/YYYY"));
    });
    //}

    $('.swalDefaultSuccess').click(function() {
        Toast.fire({
            type: 'success',
            title: 'Notícia cadastrada com sucesso!'
        })
    });
    $('#editoria').keyup(function() {
        $('#slug').val($(this).val());
    });
});