export default {
    fields: [
        {
            type: "input",
            inputType: "text",
            placeholder: "Name",
            label: "Name",
            model: "name",
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "Developer",
            label: "Label",
            model: "label",
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "developerItec@gmail.com",
            label: "Email",
            model: "email",
            validator: "email"
        },

        {
            type: "input",
            inputType: "tel",
            placeholder: "678 40 85 76",
            label: "Phone",
            model: "phone",
        },

        {
            type: "input",
            inputType: "text",
            placeholder: "https://www.developer.com",
            label: "Website",
            model: "website",
            validator: "url"
        },

        {
            type: "textArea",
            inputType: "text",
            placeholder: "I am a backend developer at Lleego Travel Market",
            label: "Summary",
            model: "summary",
        },
    ],
};
