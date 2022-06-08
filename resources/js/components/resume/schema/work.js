export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            placeholder: "Lleego Travel Market",
            label: "Company",
            model: "company",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "Junior Developer",
            label: "Position",
            model: "position",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "https://www.lleego.com",
            label: "Website",
            model: "website",
            validator: "url",
            styleClasses: ["col-md-4", "p-0"],
        },

        {
            type: "input",
            inputType: "date",
            format: "YYYY-MM-DD HH:mm:ss",
            label: "Start Date",
            model: "startDate",
            styleClasses: ["col-md-6", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "date",
            format: "YYYY-MM-DD HH:mm:ss",
            label: "End Date",
            model: "endDate",
            styleClasses: ["col-md-6", "p-0"],
        },

        {
            type: "textArea",
            inputType: "text",
            placeholder: "I developed an api to calculate the CO2 emissions produced by airplanes...",
            label: "Summary",
            model: "summary",
        },
    ],
};
