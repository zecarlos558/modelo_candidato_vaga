$("#habilidades").selectize({
    plugins: ["restore_on_backspace", "clear_button", "remove_button"],
    delimiter: ",",
    persist: false,
    maxItems: null,
    create: function(input) {
        return {
            value: input,
            text: input,
        };
    },
    sortField: {
        field: 'text',
        direction: 'asc'
    }
});
