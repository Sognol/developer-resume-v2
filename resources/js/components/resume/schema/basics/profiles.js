export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            placeholder: "LinkedIn",
            label: "Network",
            model: "network",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "https://es.linkedin.com/user",
            label: "Url",
            model: "url",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "User Name",
            label: "Username",
            model: "username",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },
    ],
};
