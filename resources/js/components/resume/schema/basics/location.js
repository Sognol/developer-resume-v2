export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            placeholder: "Avenida de la Vega 1, 1ª planta",
            label: "Adress",
            model: "adress",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "29 200",
            label: "Postal Code",
            model: "postalCode",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "Antequera",
            label: "City",
            model: "city",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "ES",
            label: "CountryCode",
            model: "countryCode",
            styleClasses: ["col-md-6", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "Málaga",
            label: "Region",
            model: "region",
            styleClasses: ["col-md-6", "p-1", "pr-md-1"],
        },
    ],
};
