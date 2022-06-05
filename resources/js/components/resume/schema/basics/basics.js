export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            placeholder: "Name",
            label: "Name",
            model: "name",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "Developer",
            label: "Label",
            model: "label",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "developerItec@gmail.com",
            label: "Email",
            model: "email",
            validator: "email",
            styleClasses: ["col-md-4", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "tel",
            placeholder: "678 40 85 76",
            label: "Phone",
            model: "phone",
            styleClasses: ["col-md-6", "p-1", "pr-md-1"],
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "https://www.developer.com",
            label: "Website",
            model: "website",
            validator: "url",
            styleClasses: ["col-md-6", "p-1", "pr-md-1"],
        },

        {
            type: "textArea",
            inputType: "text",
            placeholder: "I am a backend developer at Lleego Travel Market",
            label: "Summary",
            model: "summary",
            styleClasses: ["col-md-12", "p-1", "pr-md-1"],
        },
    ],
};
