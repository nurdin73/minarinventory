const options = (placeholder, path) => {
    return {
        placeholder: placeholder,
        ajax: {
            url: `${BASE_URL}/${path}`,
            dataType: "json",
            data: function (params) {
                return {
                    search: params.term,
                };
            },
            processResults: function (data) {
                return {
                    results: data.map((result) => {
                        return {
                            text: result.name,
                            id: result.id,
                        };
                    }),
                };
            },
        },
    };
};

$(document).ready(function () {
    const provSelect = $("select[name=provinsi_id]");
    const citySelect = $("select[name=kotakab_id]");
    const districtSelect = $("select[name=kecamatan_id]");
    const subDistrictSelect = $("select[name=kelurahan_id]");
    const postalCodeSelect = $("select[name=kodepos]");

    citySelect.attr("disabled", true);
    districtSelect.attr("disabled", true);
    subDistrictSelect.attr("disabled", true);
    postalCodeSelect.attr("disabled", true);

    provSelect.select2(options("Pilih Provinsi", "provinces"));

    provSelect.on("select2:select", function (e) {
        const val = e.target.value;
        citySelect.attr("disabled", false);
        citySelect.val("").trigger("change");
        districtSelect.val("").trigger("change");
        subDistrictSelect.val("").trigger("change");
        postalCodeSelect.val("").trigger("change");
        citySelect.select2(options("Pilih Kota / Kabupaten", `cities/${val}`));
    });

    citySelect.on("select2:select", function (e) {
        const val = e.target.value;
        districtSelect.attr("disabled", false);
        districtSelect.val("").trigger("change");
        subDistrictSelect.val("").trigger("change");
        postalCodeSelect.val("").trigger("change");
        districtSelect.select2(options("Pilih Kecamatan", `districts/${val}`));
    });

    districtSelect.on("select2:select", function (e) {
        const val = e.target.value;
        subDistrictSelect.attr("disabled", false);
        subDistrictSelect.val("").trigger("change");
        postalCodeSelect.val("").trigger("change");
        subDistrictSelect.select2(
            options("Pilih Kelurahan", `subdistricts/${val}`)
        );
    });

    subDistrictSelect.on("select2:select", function (e) {
        const provId = provSelect.val();
        const cityId = citySelect.val();
        const disId = districtSelect.val();
        const subdisId = e.target.value;
        postalCodeSelect.attr("disabled", false);
        postalCodeSelect.val("").trigger("change");
        postalCodeSelect.select2(
            options(
                "Pilih Kode POS",
                `postalcodes/${provId}/${cityId}/${disId}/${subdisId}`
            )
        );
    });

    $("select[name=user_type]").on("change", function (e) {
        const val = e.target.value;
        $("label[for=name]").text(`Nama ${val}`);
    });
});
