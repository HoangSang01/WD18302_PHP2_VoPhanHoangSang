<script src="../resources/assets/admin/js/core/popper.min.js"></script>
<script src="../resources/assets/admin/js/core/bootstrap.min.js"></script>
<script src="../resources/assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../resources/assets/admin/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../resources/assets/admin/js/plugins/choices.min.js"></script>
<script src="../resources/assets/admin/js/plugins/quill.min.js"></script>
<script src="../resources/assets/admin/js/plugins/flatpickr.min.js"></script>
<script src="../resources/assets/admin/js/plugins/dropzone.min.js"></script>
<script src="../resources/assets/admin/js/plugins/multistep-form.js"></script>
<script>
    if (document.getElementById('edit-deschiption')) {
        var quill = new Quill('#edit-deschiption', {
            theme: 'snow' // Specify theme in configuration
        });
    };

    if (document.getElementById('choices-category')) {
        var element = document.getElementById('choices-category');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-sizes')) {
        var element = document.getElementById('choices-sizes');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-currency')) {
        var element = document.getElementById('choices-currency');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-teacher')) {
        var teachers = document.getElementById('choices-teacher');
        const examples = new Choices(teachers, {
            removeItemButton: true
        });

        examples.setChoices(
            [{
                    value: 'One',
                    label: 'Trần Thì X',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'Võ Tấn C',
                    selected: true
                }
            ],
            'value',
            'label',
            false,
        );
    }
    if (document.getElementById('choices-specialized')) {
        var specialized = document.getElementById('choices-specialized');
        const examples = new Choices(specialized, {
            removeItemButton: true
        });

        examples.setChoices(
            [{
                    value: 'One',
                    label: 'Thiết Kế Đồ Họa',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'Digital Marketing',
                    selected: true
                }
            ],
            'value',
            'label',
            false,
        );
    }
</script>
<script>
    if (document.getElementById('editor')) {
        var quill = new Quill('#editor', {
            theme: 'snow' // Specify theme in configuration
        });
    }

    if (document.getElementById('choices-multiple-remove-button')) {
        var element = document.getElementById('choices-multiple-remove-button');
        const example = new Choices(element, {
            removeItemButton: true
        });

        example.setChoices(
            [{
                    value: 'One',
                    label: 'Tiếng Anh 1.1',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'Tiếng Anh 2.1',
                    selected: true
                },
                {
                    value: 'Three',
                    label: 'Tiếng Anh 1.2'
                },
            ],
            'value',
            'label',
            false,
        );
    }
    if (document.getElementById('choices-course')) {
        var element = document.getElementById('choices-course');
        const course = new Choices(element, {
            removeItemButton: true
        });

        course.setChoices(
            [{
                    value: 'One',
                    label: '15',
                    disabled: true
                },
                {
                    value: 'Three',
                    label: '25'
                },
            ],
            'value',
            'label',
            false,
        );
    }

    if (document.getElementById('choices-class')) {
        var element = document.getElementById('choices-class');
        const example = new Choices(element, {
            removeItemButton: true
        });

        example.setChoices(
            [{
                    value: 'One',
                    label: 'WD18301',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'WD18302',
                    selected: true
                }
            ],
            'value',
            'label',
            false,
        );
    }
    if (document.querySelector('.datetimepicker')) {
        flatpickr('.datetimepicker', {
            allowInput: true
        }); // flatpickr
    }

    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
        url: "/file/post",
        addRemoveLinks: true

    });
</script>

<script src="../resources/assets/admin/js/plugins/dragula/dragula.min.js"></script>
<script src="../resources/assets/admin/js/plugins/jkanban/jkanban.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="../resources/assets/admin/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"846df4074ead8b69","version":"2023.10.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>