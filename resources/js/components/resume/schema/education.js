export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            label: "Institution",
            model: "institution",
            placeholder: "ITEC Vocational Training",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            label: "Area",
            model: "area",
            placeholder: "Development and Web Applications",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            label: "Study Type",
            model: "studyType",
            placeholder: "Advanced Technician",
            styleClasses: ["col-md-4", "p-0"],
        },

        {
            type: "input",
            inputType: "date",
            format: "YYYY-MM-DD HH:mm:ss",
            model: "startDate",
            label: "Start Date",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "date",
            format: "YYYY-MM-DD HH:mm:ss",
            model: "endDate",
            label: "End Date",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "number",
            model: "gpa",
            label: "School Report",
            validor: "number",
            styleClasses: ["col-md-4", "p-0"],
        },
    ],
};
