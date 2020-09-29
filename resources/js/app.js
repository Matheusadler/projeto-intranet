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
        timePicker: true,
        timePicker24Hour: true,
        timePickerSeconds: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        drops: "down",
        locale: {
            format: "DD/MM/YYYY HH:mm:ss",
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
        $(this).val(picker.startDate.format("DD/MM/YYYY HH:mm:ss"));
    });
    //}


    /*
            datepicker.mask("00/00/0000", {
                clearIfNotMatch: true,
                placeholder: "__/__/____"
            });*/

    $('.swalDefaultSuccess').click(function() {
        Toast.fire({
            type: 'success',
            title: 'Notícia cadastrada com sucesso!'
        })
    });


    $('#modal-imagem').on('click', 'img', function() {
        var img_id = $(this).data('id');
        var img_titulo = $(this).data('titulo');
        console.log(img_id);
        $('#imagem').val(img_id);
        $('#img-nome').val(img_titulo);
        $('#modal-imagem').modal('hide');
    })

    $('#modal-delete').on('shown.bs.modal', function(e) {
        var noticia_id = $(e.relatedTarget).data('id');
        var modal = $(this)
        modal.find('.modal-body #noticia_id').val(noticia_id);
    })

    $(document).ready(function() {
        $("#editoria").stringToSlug({
            getPut: '#slug',
        });
    });

});