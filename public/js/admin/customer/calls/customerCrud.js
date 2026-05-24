$(document).ready(function(){

    if ($('#frmStoreCustomer').length > 0) {
        applyNumberCange();
        let rules = {
            name: {
                required: true,
                maxlength: 253
            },
            mobile_number: {
                required: true,
                maxlength: 253
            },
            whats_app: {
                required: true,
                maxlength: 253
            }
        };
        PX.ajaxRequest({
            element: 'frmStoreCustomer',
            validation: true,
            script: 'admin/customer',
            rules,
            afterSuccess: {
                type: 'inflate_reset_response_data',
            }
        });
    }

    if ($('#frmUpdateCustomer').length > 0) {
        applyNumberCange();
        let rules = {
            name: {
                required: true,
                maxlength: 253
            },
            mobile_number: {
                required: true,
                maxlength: 253
            },
            whats_app: {
                required: true,
                maxlength: 253
            }
        };
        PX.ajaxRequest({
            element: 'frmUpdateCustomer',
            validation: true,
            script: 'admin/customer/'+$("#patch_id").val(),
            rules,
            afterSuccess: {
                type: 'inflate_response_data',
            }
        });
    }

    if ($("#dtCustomer").length > 0) {
        const {pageLang={}} = PX?.config;
        const {table={}} = pageLang;
        let col_draft = [
            {
                data: 'id',
                title: table?.id
            },
            {
                data: 'name',
                title: table?.name
            },
            {
                data: 'mobile_number',
                title: table?.mobile_number
            },
            {
                data: 'whats_app',
                title: table?.whats_app
            },
            {
                data: 'address',
                title: table?.address
            },
            {
                data: 'created_at',
                title: table?.created
            },

            {
                data: null,
                title: table?.action,
                class: 'text-end',
                render: function (data, type, row) {
                    return `<a href="${baseurl}admin/customer/${data.id}/edit" class="btn btn-outline-secondary btn-sm edit" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </a>`;
                }
            },
        ];
        PX.renderDataTable('dtCustomer', {
            select: true,
            url: 'admin/customer/list',
            columns: col_draft,
            pdf: [1, 2]
        });
    }
})

function dtCustomer(table, api, op) {
    PX.deleteAll({
        element: "deleteAllCustomer",
        script: "admin/customer/delete-list",
        confirm: true,
        api,
    });
    PX.updateAll({
        element: "updateAllCustomer",
        script: "admin/customer/update-list",
        confirm: true,
        dataCols: {
            key: "ids",
            items: [
                {
                    index: 1,
                    name: "ids",
                    type: "input",
                    data: [],
                },
                {
                    index: 1,
                    name: "serial",
                    type: "input",
                    data: []
                }
            ]
        },
        api,
        afterSuccess: {
            type: "inflate_response_data"
        }
    });
    PX?.dowloadPdf({ ...op, btn: "downloadCustomerPdf", dataTable: "yes" })
    PX?.dowloadExcel({ ...op, btn: "downloadCustomerExcel", dataTable: "yes" })
}

function applyNumberCange(){
    $('#mobile_number').on('input', function () {
        $('#whats_app').val($(this).val());
    });
}
