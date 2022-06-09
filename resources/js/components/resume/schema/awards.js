export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            label: "Title",
            placeholder: "Award Name",
            model: "title",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            label: "Awarder",
            placeholder: "Microsoft Partner Of The Year",
            model: "awarder",
            styleClasses: ["col-md-4", "p-0"],
        },

        {
            type: "input",
            inputType: "date",
            label: "Date",
            model: "date",
            styleClasses: ["col-md-4", "p-0", "pr-md-1"],
        },

        {
            type: "textArea",
            inputType: "text",
            label: "Summary",
            placeholder:
                "Microsoft gave me the award for the best junior programmer of 2022...",
            model: "summary",
        },
    ],
};
