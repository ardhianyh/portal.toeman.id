$(document).ready (function() {
    $('#formKaryawan').formValidation({
        framework: 'bootstrap',
        excluded: 'disabled',

        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nik: {
                validators: {
                    notEmpty: {
                        message: 'NIK Tidak Boleh Kosong'
                    }
                }
            },
            nama: {
                validators: {
                    notEmpty: {
                        message: 'Nama Tidak Boleh Kosong'
                    }
                }
            },
            alamat: {
                validators: {
                    notEmpty: {
                        message: 'Alamat Tidak Boleh Kosong'
                    }
                }
            },
            no_hp: {
                validators: {
                    notEmpty: {
                        message: 'No Hp Tidak Boleh Kosong'
                    }
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: 'Email Tidak Boleh Kosong'
                    },
                }
            }
        }
    })
});
